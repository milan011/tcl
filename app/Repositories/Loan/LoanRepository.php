<?php
namespace App\Repositories\Loan;

use App\CarFollow;
use App\Area;
use App\Loan;
use App\Customer;
use Session;
use Illuminate\Http\Request;
use Gate;
use Datatables;
use Carbon;
use PHPZen\LaravelRbac\Traits\Rbac;
use Auth;
use Illuminate\Support\Facades\Input;
use DB;
use Debugbar;

class LoanRepository implements LoanRepositoryContract
{
    //默认查询数据
    protected $select_columns = ['id', 'loan_code', 'name', 'card', 'bill_day', 'telephone', 'car_name', 'cate_id', 'category_id', 'appraiser_price', 'loan_price', 'insurance_loan', 'orther_loan', 'total_loan', 'loan_phase', 'loan_date', 'repayment_frist', 'repayment_everymonth', 'loan_begin_date', 'car_plate_old', 'car_plate_new', 'other_contact1', 'other_contact2', 'other_contact1_phone', 'other_contact2_phone', 'recognizor', 'recognizor_adress', 'recognizor_phone', 'plate_date', 'appraiser_cost', 'poundage', 'qm_profits', 'loan_profits', 'visits_profits', 'loan_channels', 'customer_sorcue', 'customer_id','loan_status', 'insurance_status', 'remark', 'creater_id', 'insurance_provence', 'insurance_city', 'created_at'];

    // 贷款表列名称-注释对应
    /*protected $columns_annotate = [

        'vin_code'       => '车架号',
        'capacity'       => '排量',
        'gearbox'        => '变速箱',
        'out_color'      => '外观颜色',
        'inside_color'   => '内饰颜色',
        'plate_date'     => '上牌日期',
        'plate_end'      => '到检日期',
        'plate_provence' => '上牌省份',
        'plate_city'     => '上牌城市',
        'age'            => '车龄',
        'safe_type'      => '保险类别',
        'safe_end'       => '到保日期',
        'sale_number'    => '过户次数',
        'mileage'        => '行驶里程',
        'description'    => '车况',
        'pg_description' => '评估师描述',
        'top_price'      => '期望价格',
        'bottom_price'   => '底价',
        'guide_price'    => '指导价',
        'car_status'     => '贷款状态',
        'is_top'         => '是否置顶推荐',
        'recommend'      => '是否推荐车源',
        'car_type'       => '车源类别',
        'xs_description' => '销售描述',
        'appraiser_price'=> '评估价',
    ];*/

    // 根据ID获得贷款信息
    public function find($id)
    {
        return Loan::select($this->select_columns)
                   ->findOrFail($id);
    }

    // 根据不同参数获得贷款列表
    public function getAllLoans($request)
    {   
        // dd($request->all());
        // $query = Loan::query();  // 返回的是一个 QueryBuilder 实例
        $query = new Loan();       // 返回的是一个Insurance实例,两种方法均可

        $query = $query->addCondition($request->all()); //根据条件组合语句
    
        // dd($query);

        // $query = $query->where('is_show', '1');
        // $query = $query->orWhere('car_status', '6');
        // $query = $query->where('car_status', $request->input('car_status', '1'));
        return $query->select($this->select_columns)
                     ->orderBy('created_at', 'desc')
                     ->paginate(10);
    }

    // 创建贷款
    public function create($requestData)
    {   
        // 添加贷款并返回实例,处理跟进(添加贷款)

            //获得用户信息
            $customer_info = Customer::find($requestData->customer_id);

            $requestData['creater_id']  = Auth::id();
            $requestData['loan_code']   = getCarCode('loan');
            $requestData['name']        = $customer_info->name;
            $requestData['telephone']        = $customer_info->telephone;



            // dd($requestData->all());
            /*dd(Carbon::parse($requestData->plate_date));
            dd(Carbon::now());*/

            // dd($customer_info);

            unset($requestData['_token']);
            unset($requestData['ajax_request_url']);
            // dd($requestData->all());
            $loan = new Loan();
            $input =  array_replace($requestData->all());
            $loan->fill($input);
            $loan = $loan->create($input);

            Session::flash('sucess', '添加贷款成功');
            // dd($loan);

            return $loan;        
    }

    // 修改贷款
    public function update($requestData, $id)
    {
        // dd($requestData->all());
        $loan  = Loan::select($this->select_columns)->findorFail($id);
        $input =  array_replace($requestData->all());
        $loan->fill($input)->save();
        // dd($loan->toJson());
        Session::flash('sucess', '修改贷款成功');
        return $loan;
                
    }

    // 删除贷款
    public function destroy($id)
    {
        try {
            $car = Loan::findorFail($id);
            $car->delete();
            Session::flash('sucess', '删除贷款成功');
           
        } catch (\Illuminate\Database\QueryException $e) {
            Session()->flash('faill', '删除贷款失败');
        }      
    }

    //车源状态转换，暂时只有激活-废弃转换
    public function statusChange($requestData, $id){

        // dd($requestData->all());
        //DB::transaction(function() use ($requestData, $id){

            $loan = Loan::select($this->select_columns)->findorFail($id); //车源对象

            if($requestData->status == 1){
                
                $loan->loan_status = '2';
            }else{

                $loan->loan_status = '1';
            }          

            $loan->save(); 

            return $loan;
        //});
    }

    //判断贷款是否属于自己
    public function is_self_car($car_id){

        $car = $this->find($car_id);

        // dd($car);

        return $car->creater_id == Auth::id();
    }
}
