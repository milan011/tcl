<?php
namespace App\Repositories\Role;
 
interface RoleRepositoryContract
{
    
    public function listAllRoles();

    public function allRoles();

    public function create($requestData);

    public function destroy($id);

    //根据角色ID获得允许添加的角色信息
    public function getAllowList($role_id);
}
