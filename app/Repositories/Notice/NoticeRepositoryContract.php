<?php
namespace App\Repositories\Notice;
 
interface NoticeRepositoryContract
{
    
    public function listAllNotices();

    public function allNotices();

    public function create($requestData);

    public function destroy($id);
}
