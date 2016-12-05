<?php
namespace App\Repositories\Car;

use App\Cars;
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

class CarRepository implements CarRepositoryContract
{

    // 根据ID获得车源信息
    public function find($id)
    {
        return Cars::select(['id', 'name'])
                       ->findOrFail($id);
    }

    // 获得车源列表
    public function getAllcars()
    {   
        return Cars::paginate(10);
    }

    // 创建车源
    public function create($requestData)
    {   
        if($requestData->has('vin_code') && $this->isRepeat($requestData->vin_code)){
            //存在车架号并且存在该车架号记录
            $car = $this->isRepeat($requestData->vin_code);
        }else{
            // 注册用户并返回实例
            $requestData['creater_id'] = Auth::id();
            $requestData['car_code']   = bcrypt('123465');

            unset($requestData['_token']);
            unset($requestData['ajax_request_url']);

            $car = new Cars();
            $input =  array_replace($requestData->all());
            $car->fill($input);

            $car = $car->create($input);
        }        

        return $car;
    }

    // 修改车源
    public function update($requestData, $id)
    {
        
        $car  = Cars::findorFail($id);
        $input =  array_replace($requestData->all());
        // dd($Car->fill($input));
        $car->fill($input)->save();
        // dd($Car->toJson());
        Session::flash('sucess', '修改车源成功');
        return $car;
    }

    // 删除车源
    public function destroy($id)
    {
        try {
            $car = Cars::findorFail($id);
            $car->delete();
            Session::flash('sucess', '删除车源成功');
           
        } catch (\Illuminate\Database\QueryException $e) {
            Session()->flash('faill', '删除车源失败');
        }      
    }

    //判断车架号号是否被使用
    public function isRepeat($vin_code){

        return Car::select('id', 'name')
                       ->where('vin_code', $vin_code)
                       ->first();
    }
}
