<?php
namespace App\Repositories\Role;
 
interface RoleRepositoryContract
{
    
    public function listAllRoles();

    public function allRoles();

    public function create($requestData);

    public function destroy($id);
}
