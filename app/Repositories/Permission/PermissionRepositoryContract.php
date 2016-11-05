<?php
namespace App\Repositories\Permission;
 
interface PermissionRepositoryContract
{
    
    public function allPermissions();

    public function Update($requestData, $id);

    public function create($requestData);

    public function destroy($id);
}
