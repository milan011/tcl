<?php
namespace App\Repositories\Transcation;
 
interface TranscationRepositoryContract
{
    
    public function find($id);
    
    public function getAllTranscations();

    public function create($requestData);

    public function update($id, $requestData);

    public function destroy($id);

    public function isRepeat($chance_id);

}
