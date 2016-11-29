<?php
namespace App\Repositories\Category;
 
interface CategoryRepositoryContract
{
    
    public function find($id);
    
    public function getAllcategory();

    public function getAllUsersWithDepartments();

    public function create($requestData);

    public function update($id, $requestData);

    public function destroy($id);
}
