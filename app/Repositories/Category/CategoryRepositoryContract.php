<?php
namespace App\Repositories\Category;
 
interface CategoryRepositoryContract
{
    
    public function find($id);
    
    public function getAllCategorys();

    public function getAllUsersWithDepartments();

    public function create($requestData);

    public function update($id, $requestData);

    public function destroy($id);
}
