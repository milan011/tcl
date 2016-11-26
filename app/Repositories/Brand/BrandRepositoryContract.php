<?php
namespace App\Repositories\Brand;
 
interface BrandRepositoryContract
{
    
    public function find($id);
    
    public function getAllBrands();

    public function create($requestData);

    public function update($id, $requestData);

    public function destroy($id);

    public function getChildBrand($brand_id);
}
