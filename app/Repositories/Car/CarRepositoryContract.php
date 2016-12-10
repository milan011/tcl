<?php
namespace App\Repositories\Car;
 
interface CarRepositoryContract
{
    
    public function find($id);
    
    public function getAllcars($requestData);

    public function create($requestData);

    public function update($id, $requestData);

    public function destroy($id);

    public function isRepeat($vin_code);
}
