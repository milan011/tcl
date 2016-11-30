<?php
namespace App\Repositories\Category;

use App\Category;
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

class CategoryRepository implements CategoryRepositoryContract
{

    // 根据ID获得门店信息
    public function find($id)
    {
        return Category::select(['id', 'name', 'brand_id', 'year_type', 'sort', 'status', 'recommend'])
                       ->findOrFail($id);
    }

    // 获得门店列表
    public function getAllcategory()
    {   
        return Category::paginate(10);
    }

    // 创建门店
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

    // 修改门店
    public function update($requestData, $id)
    {
        
        $category  = Category::findorFail($id);
        $input =  array_replace($requestData->all());
        $category->fill($input)->save();
        // dd($Category->toJson());
        Session::flash('sucess', '修改门店成功');
        return $category;
    }

    // 删除门店
    public function destroy($id)
    {
        try {
            $Category = Category::findorFail($id);
            $Category->delete();
            Session::flash('sucess', '删除门店成功');
           
        } catch (\Illuminate\Database\QueryException $e) {
            Session()->flash('faill', '删除门店失败');
        }      
    }
}
