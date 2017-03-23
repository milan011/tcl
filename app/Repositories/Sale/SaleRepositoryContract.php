<?php
namespace App\Repositories\Sale;
 
interface SaleRepositoryContract
{
    
    public function find($id);
    
    public function getAllCustomersCars();

    public function create($requestData);

}
