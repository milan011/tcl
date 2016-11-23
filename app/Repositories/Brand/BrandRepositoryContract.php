<?php
namespace App\Repositories\Brand;
 
interface BrandRepositoryContract
{
    
    public function find($id);
    
    public function getAllBrands();

    public function getAllUsersWithDepartments();

    public function create($requestData);

    public function update($id, $requestData);

    public function destroy($id);
}
