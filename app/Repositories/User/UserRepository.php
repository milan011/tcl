<?php
namespace App\Repositories\User;

use App\User;
use Session;
use Illuminate\Http\Request;
use Gate;
use Datatables;
use Carbon;
use PHPZen\LaravelRbac\Traits\Rbac;
use App\Role;
use App\RoleUser;
use Auth;
use Illuminate\Support\Facades\Input;
use App\Client;
use App\Department;
use DB;

class UserRepository implements UserRepositoryContract
{

    // 获得用户信息
    public function find($id)
    {   
        return User::with(tableUnionDesign('hasManyRoles', ['roles.id', 'name', 'slug']))
                    ->select(['id', 'name', 'nick_name', 'telephone', 'qq_number', 'email', 'wx_number','address','shop_id', 'status'])
                    ->findOrFail($id);
    }

    public function getAllUsers()
    {           
        /*return User::with(['hasOneShop'=>function($query){
            $query->select('user_id','name','address');
        }])->paginate(10);*/
        return User::with(tableUnionDesign('hasManyRoles', ['roles.id', 'name', 'slug']))
                   // ->with(tableUnionDesign('belongsToShop', ['id','name','address','email']))
                   ->select(['id','shop_id', 'name', 'nick_name'])
                   ->paginate(10);
        // return User::with('hasOneShop')->paginate(10);
    }

    public function getAllUsersWithDepartments()
    {
        return  User::select(array
            ('users.name', 'users.id',
                DB::raw('CONCAT(users.name, " (", departments.name, ")") AS full_name')))
        ->join('department_user', 'users.id', '=', 'department_user.user_id')
        ->join('departments', 'department_user.department_id', '=', 'departments.id')
        ->lists('full_name', 'id');
    }



    public function create($requestData)
    {
        /*p('hehe');
        dd($requestData->all());*/
        $password =  bcrypt($requestData->password);
        $role_id  = $requestData->role_id;

        // 添加用户到用户表
        $input =  array_replace($requestData->all(), ['password'=>"$password",'creater_id'=>Auth::id()]);
        $user = User::create($input);

        // 关联用户表与用户-角色表
        $userRole = new RoleUser;
        $userRole->role_id = $role_id;
        $userRole->user_id = $user->id;
        $userRole->save();

        Session::flash('sucess', '添加用户成功'); 
        return $user;
    }

    public function update($id, $requestData)
    {
        // dd($requestData->all());
        $user = User::with(tableUnionDesign('hasManyRoles', ['roles.id', 'name', 'slug']))
                    ->findorFail($id);

        /*p($requestData->role_id);
        dd($user->hasManyRoles[0]->id);*/
        
        $user->name      = $requestData->name;
        $user->nick_name = $requestData->nick_name;
        $user->telephone = $requestData->telephone;
        $user->shop_id   = $requestData->shop_id;
        $user->status    = $requestData->status;
        $user->address   = $requestData->address;
        $user->qq_number = $requestData->qq_number;
        $user->wx_number = $requestData->wx_number;
        $user->email     = $requestData->email;

        // 更新用户
        $user->save();

        //如果角色有变化，更新UserRole表
        if($requestData->role_id != $user->hasManyRoles[0]->id){

            $user_id = $id; //当前用户ID
            $role_id = $user->hasManyRoles[0]->id; //角色ID
            // 获得需要更新的对象
            $user_role = RoleUser::where('user_id', $user_id)
                                 ->where('role_id', $role_id)
                                 ->first();
            // dd($requestData->role_id);
            $user_role->role_id = $requestData->role_id;

            $user_role->save();
        }

        Session()->flash('sucess', '更新用户成功');

        return $user;
    }

    public function destroy($id)
    {
        if ($id == 1) {
            return Session()->flash('faill', '超级管理员不允许删除');
        }
        try {
            $user = User::findorFail($id);
            $user->delete();
            Session()->flash('sucess', '删除管理员成功');
           
        } catch (\Illuminate\Database\QueryException $e) {
            Session()->flash('faill', '删除管理员失败');
        }
        
    }

    //获得用户角色信息
    public function getRoleInfoById($id=''){

        $role_id = '';

        if(empty($id)){ //若ID为空，则获得当前用户ID

            // dd(Auth::user()->hasManyRoles[0]->id);
            $role_id = Auth::user()->hasManyRoles[0]->id;
        }else{

            // dd(User::findOrFail($id)->hasManyRoles[0]->id);
            $role_id = User::findOrFail($id)->hasManyRoles[0]->id;
        }
        
        $role_info = Role::find($role_id);
        // dd($role_info);
        return $role_info;
    }
}
