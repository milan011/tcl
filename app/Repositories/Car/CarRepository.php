<?php
namespace App\Repositories\Car;

use App\Car;
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

    // 根据ID获得车型信息
    public function find($id)
    {
        return Category::select(['id', 'name', 'brand_id', 'year_type', 'sort', 'status', 'recommend'])
                       ->findOrFail($id);
    }

    // 获得车型列表
    public function getAllcategory()
    {   
        return Category::paginate(10);
    }

    // 创建车型
    public function create($requestData)
    {   
        // $requestData['user_id'] = Auth::id();
        // dd($requestData->all());
        $category = new Category();
        // $input =  array_replace($requestData->all());

        $input['brand_id']  = $requestData->brand_id;
        $input['name']      = $requestData->name;
        $input['year_type'] = $requestData->year_type;
        $input['sort']      = $requestData->sort;
        $input['status']    = $requestData->status;
        $input['recommend'] = $requestData->recommend;
        $input['user_id']   = Auth::id();
        // dd($input);

        $category = $category->insertIgnore($input);

        Session::flash('sucess', '添加车型成功');
        return $category;
    }

    // 修改车型
    public function update($requestData, $id)
    {
        
        $category  = Category::findorFail($id);
        $input =  array_replace($requestData->all());
        // dd($category->fill($input));
        $category->fill($input)->save();
        // dd($Category->toJson());
        Session::flash('sucess', '修改车型成功');
        return $category;
    }

    // 删除车型
    public function destroy($id)
    {
        try {
            $Category = Category::findorFail($id);
            $Category->delete();
            Session::flash('sucess', '删除车型成功');
           
        } catch (\Illuminate\Database\QueryException $e) {
            Session()->flash('faill', '删除车型失败');
        }      
    }
}
