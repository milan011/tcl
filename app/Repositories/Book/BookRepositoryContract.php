<?php
namespace App\Repositories\Book;
 
interface BookRepositoryContract
{
    
    public function find($id);
    
    public function getAllBooks($requestData);

    public function create($chanceId);

    public function update($id, $requestData);

    public function destroy($id);

    public function isRepeat($chance_id);

}
