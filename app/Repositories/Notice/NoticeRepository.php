<?php
namespace App\Repositories\Notice;

use App\Notice;
use Session;
use Auth;

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
        /*$notice_user = new Notice;
        // $info = $notice_user::with('App\User')->find(1);
        $info = Notice::with('belongsToUser')->find(1);
        // dd(lastSql());
        dd($info->belongsToUser->name);
        dd($info->belongsToUser()->get());*/
        return Notice::with('belongsToUser')->paginate(10);
    }

    // 创建公告
    public function create($requestData)
    {
        $requestData['user_id'] = Auth::id();
        // dd($requestData);
        
        $notice = new Notice;
        $input  =  array_replace($requestData->all());
        $notice->fill($input);

        $notice = $notice->create($input);

        Session::flash('sucess', '添加公告成功');          
        return $notice;
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
