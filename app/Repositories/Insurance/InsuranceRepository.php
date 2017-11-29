<?php
namespace App\Repositories\Insurance;

use App\CarFollow;
use App\Area;
use App\Insurance;
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

class InsuranceRepository implements InsuranceRepositoryContract
{
    //默认查询数据
    protected $select_columns = ['id', 'insurance_code', 'name', 'company_commercial', 'company_interest', 'car_plate', 'telephone','categorey_id', 'source', 'traffic_date', 'vehicle_date', 'traffic_price', 'vehicle_price', 'vehicle_tax', 'total_price', 'detail', 'interest_rate', 'commercial_rate', 'rebeat', 'royalty_ratio', 'commercial_ratio', 'royalty', 'profit', 'need_pay', 'salesman', 'insurance_status', 'remark', 'customer_id', 'remark', 'creater_id', 'insurance_provence', 'insurance_city', 'created_at'];

    // 根据ID获得保险信息
    public function find($id)
    {
        return Insurance::select($this->select_columns)
                   ->findOrFail($id);
    }

    // 根据不同参数获得保险列表
    public function getAllInsurances($request)
    {   
        // dd($request->all());
        // $query = Insurance::query();  // 返回的是一个 QueryBuilder 实例
        $query = new Insurance();       // 返回的是一个Insurance实例,两种方法均可

        $query = $query->addCondition($request->all()); //根据条件组合语句
    
        // dd($query);

        // $query = $query->where('is_show', '1');
        // $query = $query->orWhere('car_status', '6');
        // $query = $query->where('car_status', $request->input('car_status', '1'));
        return $query->select($this->select_columns)
                     ->orderBy('created_at', 'desc')
                     ->paginate(10);
    }

    // 创建保险
    public function create($requestData)
    {   
        // 添加保险并返回实例,处理跟进(添加保险)

            //获得用户信息
            $customer_info = Customer::find($requestData->customer_id);

            $requestData['creater_id']     = Auth::id();
            $requestData['insurance_code'] = getCarCode('insurance');
            $requestData['name']           = $customer_info->name;
            $requestData['telephone']      = $customer_info->telephone;



            // dd($requestData->all());
            /*dd(Carbon::parse($requestData->plate_date));
            dd(Carbon::now());*/

            // dd($customer_info);

            unset($requestData['_token']);
            unset($requestData['ajax_request_url']);
            // dd($requestData->all());
            $insurance = new Insurance();
            $input =  array_replace($requestData->all());
            $insurance->fill($input);
            $insurance = $insurance->create($input);

            Session::flash('sucess', '添加保险成功');
            // dd($insurance);

            return $insurance;        
    }

    // 修改保险
    public function update($requestData, $id)
    {
        // dd($requestData->all());
        $insurance  = Insurance::select($this->select_columns)->findorFail($id);
        $input      =  array_replace($requestData->all());
        $insurance->fill($input)->save();
        // dd($insurance->toJson());
        Session::flash('sucess', '修改保险成功');
        return $insurance;
                
    }

    // 删除保险
    public function destroy($id)
    {
        try {
            $car = Insurance::findorFail($id);
            $car->delete();
            Session::flash('sucess', '删除保险成功');
           
        } catch (\Illuminate\Database\QueryException $e) {
            Session()->flash('faill', '删除保险失败');
        }      
    }

    //车源状态转换，暂时只有激活-废弃转换
    public function statusChange($requestData, $id){

        // dd($requestData->all());
        //DB::transaction(function() use ($requestData, $id){

            $insurance = Insurance::select($this->select_columns)->findorFail($id); //车源对象

            if($requestData->status == 0){
                
                $insurance->insurance_status = '1';
            }else{

                $insurance->insurance_status = '0';
            }          

            $insurance->save(); 

            return $insurance;
        //});
    }

    //判断保险是否属于自己
    public function is_self_car($car_id){

        $car = $this->find($car_id);

        // dd($car);

        return $car->creater_id == Auth::id();
    }
}
