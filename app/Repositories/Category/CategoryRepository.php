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
        return Category::select(['id', 'name'])->findOrFail($id);
    }

    // 获得门店列表
    public function getAllcategory()
    {   
        return Category::paginate(10);
    }

    public function getAllUsersWithDepartments()
    {
        return  User::select(array
            ('users.name', 'users.id',
                DB::raw('CONCAT(users.name, " (", departments.name, ")") AS full_name')))
        ->join('department_user', 'users.id', '=', 'department_user.user_id')
        ->join('departments', 'department_user.department_id', '=', 'departments.id')
        ->lists('full_name', 'id');
    }

    // 创建门店
    public function create($requestData)
    {   
        $requestData['user_id'] = Auth::id();
        // dd($requestData->all());
        $Category = new Category();
        $input =  array_replace($requestData->all());
        $Category->fill($input);

        $Category = $Category->create($input);

        Session::flash('sucess', '添加门店成功');
        return $Category;
    }

    // 修改门店
    public function update($requestData, $id)
    {
        
        $Category  = Category::findorFail($id);
        $input =  array_replace($requestData->all());
        $Category->fill($input)->save();
        // dd($Category->toJson());
        Session::flash('sucess', '修改门店成功');
        return $Category;
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
