<?php
namespace App\Repositories\Want;
 
interface WantRepositoryContract
{
    
    public function find($id);
    
    public function getAllWants($requestData, $is_self = false);

    public function create($requestData);

    public function update($id, $requestData);

    public function destroy($id);

    public function isRepeat($vin_code);
}
