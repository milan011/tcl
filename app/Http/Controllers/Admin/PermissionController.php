<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use Session;
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
        $sucessed = $this->permission->create($permissionRequest);
        // dd($sucessed);
        if($sucessed){
            
            Session::flash('sucess', '添加权限成功');
            // dd($roleRequest->session()->all());
            return redirect()->route('admin.permission.index')->withInput();
        }else{

            return back();
        }
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
        $sucessed = $this->permission->update($updateRequest, $id);

        if($sucessed){
            
            Session::flash('sucess', '修改权限成功');
            // dd($ShopRequest->session()->all());
            return redirect()->route('admin.permission.index')->withInput();
        }else{
            Session::flash('faill', '修改权限失败');
            return back();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
