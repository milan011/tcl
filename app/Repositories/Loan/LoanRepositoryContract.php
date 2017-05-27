<?php
namespace App\Repositories\Loan;
 
interface LoanRepositoryContract
{
    
    public function find($id);
    
    public function getAllLoans($requestData);

    public function create($requestData);

    public function update($id, $requestData);

    public function destroy($id);

    //public function isRepeat($vin_code);

    public function statusChange($requestData, $id);
}
