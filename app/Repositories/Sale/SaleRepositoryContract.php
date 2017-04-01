<?php
namespace App\Repositories\Sale;
 
interface SaleRepositoryContract
{
    
    public function find($id);
    
    public function getAllCustomersCars($request);

    public function create($requestData);

}
