<?php
namespace App\Repositories\Plan;
 
interface PlanRepositoryContract
{
    
    public function find($id);
    
    public function getAllPlans($requestData);

    public function create($requestData);

    public function update($id, $requestData);

    public function destroy($id);

    public function isRepeat($requestData);
}
