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
        return Cars::select(['id', 'name', 'brand_id', 'year_type', 'sort', 'status', 'recommend'])
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
        // $requestData['user_id'] = Auth::id();
        // dd($requestData->all());
        $car = new Cars();
        // $input =  array_replace($requestData->all());

        $input['brand_id']  = $requestData->brand_id;
        $input['name']      = $requestData->name;
        $input['year_type'] = $requestData->year_type;
        $input['sort']      = $requestData->sort;
        $input['status']    = $requestData->status;
        $input['recommend'] = $requestData->recommend;
        $input['user_id']   = Auth::id();
        // dd($input);

        $car = $car->insertIgnore($input);

        Session::flash('sucess', '添加车源成功');
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
}
