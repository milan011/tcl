<?php
namespace App\Repositories\Permission;

use App\Role;
use App\Permissions;
use Session;

class PermissionRepository implements PermissionRepositoryContract
{

    //根据ID获得权限信息
    public function find($id)
    {
        return Permissions::findOrFail($id);
    }

    // 判断是否有角色被赋予该权限
    protected function permissionUsed($permission_id){

        $permission = Permissions::findOrFail($permission_id)->hasManyPermissionRoles()->get();
        
        // dd($permission->count());
        if($permission->count() > 0 ){
            return false;
        }else{
            return true;
        }
    }

    //获得所有权限信息
    public function allPermissions()
    {
        return Permissions::paginate(10);
    }

    // 创建权限
    public function Create($requestData)
    {   
        $permissionName        = $requestData->name;
        $permissionSlug        = $requestData->slug;
        $permissionDescription = $requestData->description;

        $permission = Permissions::create([
                    'name'        => $permissionName,
                    'slug'        => $permissionSlug,
                    'description' => $permissionDescription
        ]);

        Session::flash('sucess', '添加权限成功');          
        return $permission;

    }

    // 更新权限信息
    public function Update($requestData, $id)
    {
        $permission = Permissions::findOrFail($id);

        $input =  array_replace($requestData->all());

        $permission->fill($input)->save();

        Session::flash('sucess', '修改权限成功');
        return $permission;
    }

    // 删除权限
    public function destroy($id)
    {   
        if($this->permissionUsed($id)){
            // 当前权限没有被赋予角色
            $Permissions = Permissions::findorFail($id);
            $Permissions->delete();
            Session()->flash('sucess', '权限删除成功');
        }else{

            Session()->flash('faill', '该权限正在被使用');
        }
    }
}
