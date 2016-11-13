<?php
namespace App\Repositories\Notice;

use App\Notice;
use Session;

class NoticeRepository implements NoticeRepositoryContract
{

    public function listAllNotices()
    {
        return Notice::lists('name', 'id');
    }

    //根据ID获取公告信息
    public function find($id)
    {
        return Notice::findOrFail($id);
    }

    public function allNotices()
    {
        return Notice::paginate(10);
    }

    // 获得公告拥有的权限信息
    public function getNoticePermission($Notice_id){

        return Notice::findOrFail($Notice_id)->permissions;
    }

    // 创建公告
    public function create($requestData)
    {
        $NoticeName = $requestData->name;
        $NoticeSlug = $requestData->slug;
        $NoticeDescription = $requestData->description;

        $Notice = Notice::create([
                    'name' => $NoticeName,
                    'slug' => $NoticeSlug,
                    'description' => $NoticeDescription
        ]);

        Session::flash('sucess', '添加公告成功');          
        return $Notice;
    }

    // 修改公告
    public function update($requestData, $id)
    {
        
        $Notice  = Notice::findorFail($id);
        $input =  array_replace($requestData->all());
        $Notice->fill($input)->save();

        // dd($Notice->toJson());
        Session::flash('sucess', '修改公告成功');          
        return $Notice;
    }

    // 删除公告
    public function destroy($id)
    {
        $Notice = Notice::findorFail($id);
        if ($Notice->id !== 1) {
            $Notice->delete();
            Session()->flash('sucess', '删除公告成功');
        } else {
            Session()->flash('faill', '不能删除超级管理员');
        }
    }
}
