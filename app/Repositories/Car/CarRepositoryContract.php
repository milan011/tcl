<?php
namespace App\Repositories\Car;
 
interface CarRepositoryContract
{
    
    public function find($id);
    
    public function getAllcars();

    public function create($requestData);

    public function update($id, $requestData);

    public function destroy($id);
}
