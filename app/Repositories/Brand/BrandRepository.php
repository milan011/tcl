<?php
namespace App\Repositories\Brand;

use App\Brand;
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

class BrandRepository implements BrandRepositoryContract
{

    // 根据ID获得门店信息
    public function find($id)
    {
        return Brand::select(['id', 'name'])->findOrFail($id);
    }

    // 获得门店列表
    public function getAllBrands()
    {   
        return Brand::paginate(10);
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
        $Brand = new Brand();
        $input =  array_replace($requestData->all());
        $Brand->fill($input);

        $Brand = $Brand->create($input);

        Session::flash('sucess', '添加门店成功');
        return $Brand;
    }

    // 修改门店
    public function update($requestData, $id)
    {
        
        $Brand  = Brand::findorFail($id);
        $input =  array_replace($requestData->all());
        $Brand->fill($input)->save();
        // dd($Brand->toJson());
        Session::flash('sucess', '修改门店成功');
        return $Brand;
    }

    // 删除门店
    public function destroy($id)
    {
        try {
            $Brand = Brand::findorFail($id);
            $Brand->delete();
            Session::flash('sucess', '删除门店成功');
           
        } catch (\Illuminate\Database\QueryException $e) {
            Session()->flash('faill', '删除门店失败');
        }      
    }
}
