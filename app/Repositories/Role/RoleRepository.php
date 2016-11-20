<?php
namespace App\Repositories\Role;

use App\Role;
use App\Permissions;
use Session;

class RoleRepository implements RoleRepositoryContract
{

    public function listAllRoles()
    {
        return Role::lists('name', 'id');
    }

    //根据ID获取角色信息
    public function find($id)
    {
        return Role::findOrFail($id);
    }

    public function allRoles()
    {
        return Role::paginate(10);
    }

    // 获得角色拥有的权限信息
    public function getRolePermission($role_id){

        return Role::findOrFail($role_id)->permissions;
    }

    // 创建角色
    public function create($requestData)
    {
        $roleName = $requestData->name;
        $roleSlug = $requestData->slug;
        $roleDescription = $requestData->description;

        $role = Role::create([
                    'name' => $roleName,
                    'slug' => $roleSlug,
                    'description' => $roleDescription
        ]);

        Session::flash('sucess', '添加角色成功');          
        return $role;
    }

    // 修改角色
    public function update($requestData, $id)
    {
        
        $role  = Role::findorFail($id);
        $input =  array_replace($requestData->all());
        $role->fill($input)->save();

        // dd($role->toJson());
        Session::flash('sucess', '修改角色成功');          
        return $role;
    }

    // 删除角色
    public function destroy($id)
    {
        $role = Role::findorFail($id);
        if ($role->id !== 1) {
            $role->delete();
            Session()->flash('sucess', '删除角色成功');
        } else {
            Session()->flash('faill', '不能删除超级管理员');
        }
    }

    // 根据角色ID获得允许添加的角色信息
    public function getAllowList($role_id){

        $allow_list      = getUserAddAllowList($role_id);
        $allow_role_info = Role::select('id', 'name', 'slug', 'description')
                                ->whereIn('id', $allow_list)
                                ->get();
                                
        return $allow_role_info;
        // dd($allow_role_info);
    }
}
