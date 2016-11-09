<?php
namespace App\Repositories\Role;

use App\Role;
use App\Permissions;

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

        if($role){
            
            return $role;
        }else{

            return false;
        }
    }

    // 修改角色
    public function update($requestData, $id)
    {
        
        $role  = Role::findorFail($id);

        $input =  array_replace($requestData->all());

        $role->fill($input)->save();

        // dd($role->toJson());

        if($role){
           
            return $role;
        }else{

            return false;
        }
    }

    // 删除角色
    public function destroy($id)
    {
        $role = Role::findorFail($id);
        if ($role->id !== 1) {
            $role->delete();
        } else {
            Session()->flash('flash_message_warning', 'Can not delete Administrator role');
        }
    }
}
