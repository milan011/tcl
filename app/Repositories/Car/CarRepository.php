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
        return Cars::select(['id', 'name', 'car_code', 'vin_code', 'capacity', 'top_price', 'plate_date', 'plate_end', 'mileage', 'out_color', 'gearbox', 'safe_end', 'sale_number', 'shop_id', 'creater_id', 'created_at', 'description', 'bottom_price'])
                   ->findOrFail($id);
    }

    // 根据不同参数获得车源列表
    public function getAllcars($request)
    {   
        // dd($request->all());
        // $query = Cars::query();  // 返回的是一个 QueryBuilder 实例
        $query = new Cars();       // 返回的是一个Cars实例,两种方法均可
        // dd($request->all());
        $query = $query->addCondition($request->all()); //根据条件组合语句

        // dd($query);
        $query = $query->where('name', '!=', '');
        // $query = $query->where('car_status', $request->input('car_status', '1'));

        return $query->select(['id', 'name', 'car_code', 'top_price', 'plate_date', 'plate_date', 'mileage', 'out_color', 'gearbox', 'sale_number', 'shop_id', 'creater_id', 'created_at', 'car_status'])
                   ->paginate(10);
    }

    // 创建车源
    public function create($requestData)
    {   
        if(!empty($requestData->vin_code) && $this->isRepeat($requestData->vin_code)){
            //存在车架号并且存在该车架号记录
            $car = $this->isRepeat($requestData->vin_code);
        }else{
            // 注册用户并返回实例
            $requestData['creater_id'] = Auth::id();
            $requestData['car_code']   = getCarCode();

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
        // dd($requestData->all());
        $car  = Cars::findorFail($id);
        
        $car->vin_code       = $requestData->vin_code;
        $car->capacity       = $requestData->capacity;
        $car->gearbox        = $requestData->gearbox;
        $car->out_color      = $requestData->out_color;
        $car->inside_color   = $requestData->inside_color;
        $car->plate_date     = $requestData->plate_date;
        $car->plate_end      = $requestData->plate_end;
        $car->sale_number    = $requestData->sale_number;
        $car->safe_type      = $requestData->safe_type;
        $car->safe_end       = $requestData->safe_end;
        $car->mileage        = $requestData->mileage;
        $car->description    = $requestData->description;
        $car->top_price      = $requestData->top_price;
        $car->bottom_price   = $requestData->bottom_price;
        $car->pg_description = $requestData->pg_description;
        $car->guide_price    = $requestData->guide_price;


        $car->save();
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
