<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Role;
use App\Http\Requests\Role\StoreRoleRequest;
use App\Repositories\Role\RoleRepositoryContract;

class RoleController extends Controller{

    protected $roles;

    public function __construct(RoleRepositoryContract $roles)
    {
        $this->roles = $roles;
        $this->middleware('user.is.admin', ['only' => ['index', 'create', 'destroy']]);
    }
    public function index()
    {
        return view('admin.role.index')
        ->withRoles($this->roles->allRoles());
    }
    public function create()
    {
        return view('admin.roles.create');
    }
    public function store(StoreRoleRequest $request)
    {
        $this->roles->create($request);
        Session()->flash('flash_message', 'Role created');
        return redirect()->back();
    }
    public function destroy($id)
    {
        $this->roles->destroy($id);
        Session()->flash('flash_message', 'Role deleted');
        return redirect()->route('admin.roles.index');
    }
}

