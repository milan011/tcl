<?php
namespace App\Repositories\Customer;

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

class CustomerRepository implements CustomerRepositoryContract
{

    //默认查询数据
    protected $select_columns = ['id', 'name', 'password', 'telephone',  'qq_number', 'indentily_card', 'wx_number', 'address', 'creater_id','status', 'sex', 'type', 'customer_res', 'shop_id', 'created_at', 'remark'];

    // 根据ID获得用户信息
    public function find($id)
    {
        return Customer::select($this->select_columns)
                       ->findOrFail($id);
    }

    // 获得用户列表
    public function getAllCustomers($request)
    {   
        $query = new Customer();       // 返回的是一个Cars实例,两种方法均可

        $query = $query->addCondition($request->all()); //根据条件组合语句

        return $query->select($this->select_columns)
                     ->orderBy('created_at', 'desc')
                     ->paginate(10);
    }

    /*function addShopId(){
        根据创建者添加shop_id
        $query = new Customer();       // 返回的是一个Cars实例,两种方法均可

        $all_customers =  $query->select($this->select_columns)
                                ->where('id', '>=', '1800')
                                ->where('id', '<=', '1900')
                                ->orderBy('created_at', 'asc')
                                ->get();

        //根据creter_id获得shop_id,更新shop_id

        foreach ($all_customers as $key => $value) {
            // dd($value);
            //dd($value->belongsToUser->shop_id);
            $change_id = empty($value->belongsToUser->shop_id) ? 1 : $value->belongsToUser->shop_id;

            $value->shop_id = $change_id;

            $value->save();

            p($value->id);
        }
        // dd($all_customers);
    }*/

    // 创建用户
    public function create($requestData)
    {   
        
        if($this->isRepeat($requestData->telephone)){
            //手机号码重复，已存在该手机注册用户，返回用户实例
            $customer = $this->isRepeat($requestData->telephone);
        }else{
            // 注册用户并返回实例
            $requestData['creater_id'] = Auth::id();
            $requestData['shop_id']    = Auth::user()->shop_id;
            $requestData['name']       = $requestData['customer_name'];
            $requestData['password']   = bcrypt('123465');

            unset($requestData['_token']);
            unset($requestData['customer_name']);

            $customer = new Customer();
            $input =  array_replace($requestData->all());
            $customer->fill($input);

            $customer    = $customer->create($input);
        }        

        return $customer;
    }

    // 修改用户
    public function update($requestData, $id)
    {
        
        $customer  = Customer::findorFail($id);
        $input =  array_replace($requestData->all());
        // dd($customer->fill($input));
        $customer->fill($input)->save();
        // dd($customer->toJson());
        // Session::flash('sucess', '修改用户成功');
        return $customer;
    }

    // 删除用户
    public function destroy($id)
    {
        try {
            $customer = Customer::findorFail($id);
            $customer->delete();
            Session::flash('sucess', '删除用户成功');
           
        } catch (\Illuminate\Database\QueryException $e) {
            Session()->flash('faill', '删除用户失败');
        }      
    }

    //判断手机号是否被使用
    public function isRepeat($customer_telephone){

        return Customer::select('id', 'name')
                       ->where('telephone', $customer_telephone)
                       ->where('creater_id', Auth::id())
                       ->first();
    }
}
