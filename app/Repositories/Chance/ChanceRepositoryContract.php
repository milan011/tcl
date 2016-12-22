<?php
namespace App\Repositories\Chance;
 
interface ChanceRepositoryContract
{
    
    public function find($id);
    
    public function getAllChances($requestData);

    public function create($requestData);

    public function update($id, $requestData);

    public function destroy($id);

    public function isRepeat($requestData);
}
