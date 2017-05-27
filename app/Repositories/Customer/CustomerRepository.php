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

    // 根据ID获得用户信息
    public function find($id)
    {
        return Customer::select(['id', 'name', 'telephone'])
                       ->findOrFail($id);
    }

    // 获得用户列表
    public function getAllCustomers()
    {   
        return Customer::paginate(10);
    }

    // 创建用户
    public function create($requestData)
    {   
        
        if($this->isRepeat($requestData->telephone)){
            //手机号码重复，已存在该手机注册用户，返回用户实例
            $customer = $this->isRepeat($requestData->telephone);
        }else{
            // 注册用户并返回实例
            $requestData['creater_id'] = Auth::id();
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
        Session::flash('sucess', '修改用户成功');
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
                       ->first();
    }
}
