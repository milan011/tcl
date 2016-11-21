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

    public function find($id)
    {
        return User::findOrFail($id);
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

        // dd($role);
        // $department = $requestData->departments;

        /*if ($requestData->hasFile('image_path')) {
            if (!is_dir(public_path(). '/images/'. $companyname)) {
                      mkdir(public_path(). '/images/'. $companyname, 0777, true);
            }
            $settings = Settings::findOrFail(1);
            $companyname = $settings->company;
            $file =  $requestData->file('image_path');

            $destinationPath = public_path(). '/images/'. $companyname;
            $filename = str_random(8) . '_' . $file->getClientOriginalName() ;

            $file->move($destinationPath, $filename);
            
            $input =  array_replace($requestData->all(), ['image_path'=>"$filename", 'password'=>"$password"]);
        } else {
            $input =  array_replace($requestData->all(), ['password'=>"$password"]);
        }*/
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
        
        $user = User::findorFail($id);
        $password = bcrypt($requestData->password);
        $role = $requestData->roles;
        $department = $requestData->department;

        if ($requestData->hasFile('image_path')) {
            $settings = Settings::findOrFail(1);
            $companyname = $settings->company;
            $file =  $requestData->file('image_path');

            $destinationPath = public_path(). '\\images\\'. $companyname;
            $filename = str_random(8) . '_' . $file->getClientOriginalName() ;

            $file->move($destinationPath, $filename);
            if ($requestData->password == "") {
                $input =  array_replace($requestData->except('password'), ['image_path'=>"$filename"]);
            } else {
                $input =  array_replace($requestData->all(), ['image_path'=>"$filename", 'password'=>"$password"]);
            }
        } else {
            if ($requestData->password == "") {
                $input =  array_replace($requestData->except('password'));
            } else {
                $input =  array_replace($requestData->all(), ['password'=>"$password"]);
            }
        }

        $user->fill($input)->save();
        $user->roles()->sync([$role]);
        $user->department()->sync([$department]);

        Session::flash('flash_message', 'User successfully updated!');

        return $user;
    }

    public function destroy($id)
    {
        if ($id == 1) {
            return Session()->flash('flash_message_warning', 'Not allowed to delete super admin');
        }
        try {
            $user = User::findorFail($id);
            $user->delete();
            Session()->flash('flash_message', 'User successfully deleted');
           
        } catch (\Illuminate\Database\QueryException $e) {
            Session()->flash('flash_message_warning', 'User can NOT have, leads, clients, or tasks assigned when deleted');
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
