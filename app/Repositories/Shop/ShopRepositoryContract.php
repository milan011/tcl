<?php
namespace App\Repositories\Shop;
 
interface ShopRepositoryContract
{
    
    public function find($id);
    
    public function getAllShops();

    public function getAllUsersWithDepartments();

    public function create($requestData);

    public function update($id, $requestData);

    public function destroy($id);
}
