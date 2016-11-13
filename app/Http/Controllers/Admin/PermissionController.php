<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use Session;
use DB;
use App\Http\Controllers\Controller;
use App\Http\Requests\Permission\StorePermissonRequest;
use App\Http\Requests\Permission\UpdatePermissionRequest;
use App\Repositories\Permission\PermissionRepositoryContract;

class PermissionController extends Controller
{
    protected $permission;

    public function __construct(PermissionRepositoryContract $permission)
    {
        $this->permission = $permission;
        $this->middleware('user.is.admin', ['only' => ['index', 'create', 'destroy']]);
    }

    /**
     * Display a listing of the resource.
     * 获取权限列表
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // dd($this->permission->allPermissions());
        return view('admin.permission.index')
        ->withPermissions($this->permission->allPermissions());
    }

    /**
     * Show the form for creating a new resource.
     * 权限添加
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.permission.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePermissonRequest $permissionRequest)
    {
        $getInsertedId = $this->permission->create($permissionRequest);

        return redirect()->route('admin.permission.index')->withInput();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     * 编辑权限
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $permission_info = $this->permission->find($id);
        // p($permission_info);exit;
        return view('admin.permission.edit', compact(

            'permission_info'
        ));
    }

    /**
     * Update the specified resource in storage.
     * 更新权限信息
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePermissionRequest $updateRequest, $id)
    {
        $this->permission->update($updateRequest, $id);

        return redirect()->route('admin.permission.index')->withInput();
    }

    /**
     * Remove the specified resource from storage.
     * 删除权限
     * 删除规则：
     * 1、当前权限是赋予角色使用
     * 2、若有角色被赋予该权限，则禁止删除
     * 3、若该权限未被赋予角色使用则删除
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->permission->destroy($id);  
    
        return redirect()->route('admin.permission.index');
    }
}
