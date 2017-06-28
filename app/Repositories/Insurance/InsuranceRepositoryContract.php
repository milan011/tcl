<?php
namespace App\Repositories\Insurance;
 
interface InsuranceRepositoryContract
{
    
    public function find($id);
    
    public function getAllInsurances($requestData);

    public function create($requestData);

    public function update($id, $requestData);

    public function destroy($id);

    //public function isRepeat($vin_code);

    public function statusChange($requestData, $id);
}
