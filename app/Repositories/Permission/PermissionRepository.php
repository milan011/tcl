<?php
namespace App\Repositories\Permission;

use App\Role;
use App\Permissions;

class PermissionRepository implements PermissionRepositoryContract
{

    //根据ID获得权限信息
    public function find($id)
    {
        return Permissions::findOrFail($id);
    }


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

        if($permission){
            
            return $permission;
        }else{

            return false;
        }
    }

    // 更新权限信息
    public function Update($requestData, $id)
    {
        $permission = Permissions::findOrFail($id);

        $input =  array_replace($requestData->all());

        $permission->fill($input)->save();

        if($permission){
           
            return $permission;
        }else{

            return false;
        }
    }

    // 删除权限
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
