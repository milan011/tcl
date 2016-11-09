<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Session;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Role;
use App\Permissions;
use App\PermissionRole;
use DB;
use App\Http\Requests\Role\StoreRoleRequest;
use App\Http\Requests\Role\UpdateRoleRequest;
use App\Repositories\Role\RoleRepositoryContract;
use App\Repositories\Permission\PermissionRepositoryContract;

class RoleController extends Controller{

    protected $roles;
    protected $permission;

    public function __construct(RoleRepositoryContract $roles, PermissionRepositoryContract $permission)
    {
        $this->roles      = $roles;
        $this->permission = $permission;
        $this->middleware('user.is.admin', ['only' => ['index', 'create', 'destroy']]);
    }
    public function index()
    {   
        // dd($this->roles->allRoles());
        return view('admin.roles.index')
        ->withRoles($this->roles->allRoles());
    }
    public function create()
    {
        return view('admin.roles.create');
    }
    public function store(StoreRoleRequest $roleRequest)
    {

        $sucessed = $this->roles->create($roleRequest);
        // dd($sucessed);
        if($sucessed){
            
            Session::flash('sucess', '添加角色成功');
            // dd($roleRequest->session()->all());
            return redirect()->route('admin.role.index')->withInput();
        }else{

            return back();
        }
    }
    /**
     * Show the form for editing the specified resource.
     * 编辑角色
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {    
        $role_info = $this->roles->find($id);
        // p($roles_info);exit;
        return view('admin.roles.edit', compact(

            'role_info'
        ));
    }
    /**
     * Update the specified resource in storage.
     * 更新角色信息
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateroleRequest $rolesRequest, $id)
    {   
        $sucessed = $this->roles->update($rolesRequest, $id);

        if($sucessed){
            
            Session::flash('sucess', '修改角色成功');
            // dd($ShopRequest->session()->all());
            return redirect()->route('admin.role.index')->withInput();
        }else{
            Session::flash('faill', '修改角色失败');
            return back();
        }
    }

    /**
     * Show the form for editing the specified resource.
     * 编辑角色权限
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editPermission($id)
    {   
        // 获得角色信息           
        $role_info = $this->roles->find($id);
        // 获得角色权限信息
        $role_permission = $this->roles->getRolePermission($id)->toArray(); 
        $role_permission = json_encode($role_permission); 
        // dd($role_permission);
        // 获得权限信息并分类（按用户管理、车源管理、求购信息管理等）
        $permission_info = Permissions::all();
        $permission_info = getPermissionByModel($permission_info);
        // dd($permission_info);
        return view('admin.roles.editPermission', compact(

            'role_info',
            'permission_info',
            'role_permission'
        ));
    }

    /**
     * Show the form for editing the specified resource.
     * 更新角色权限
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updatePermission(Request $request){

        $role_id = $request->role_id; //角色ID
        $permission_list = array();
        // 获得角色权限信息
        $role_permission = $this->roles->getRolePermission($request->role_id); 
        //提取权限ID
        foreach ($role_permission as $key => $value) {
            
            $permission_list[] = $value->id;
        }
        //已经拥有的权限列表
        $permission_now = collect($permission_list);

        //提交的权限列表
        $permission_request = collect($request->chouse_permission);   
        // dd(collect($request->chouse_permission));
        
        //需要删除的权限
        $need_remove = $permission_now->diff($permission_request);

        // 需要添加的权限
        $need_add = $permission_request->diff($permission_now);

        if($need_remove->count() > 0){
            //存在需要删除的权限则删除
            // dd($need_remove->toArray());
            $deletPermission = PermissionRole::where('role_id', $role_id)
                                              ->whereIn('permission_id', $need_remove)
                                              ->delete();

        }

        if($need_add->count() > 0){
            // 存在需要添加的权限则添加
            // dd($need_add);

            foreach ($need_add as $key => $value) {
                $addPermission = new PermissionRole;
                
                $addPermission->permission_id = $value;
                $addPermission->role_id       = $role_id;

                $addPermission->save();               
            }
        }

        Session::flash('sucess', '修改角色权限成功');

        return redirect()->route('admin.role.index')->withInput();
        // dd($need_remove);
        
    }

    public function destroy($id)
    {
        $this->roles->destroy($id);
        Session()->flash('flash_message', 'Role deleted');
        return redirect()->route('admin.roles.index');
    }
}

