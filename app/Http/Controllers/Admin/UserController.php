<?php
namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use App\Tasks;
use App\Shop;
use Illuminate\Http\Request;
use Gate;
use Datatables;
use Carbon;
use Auth;
use PHPZen\LaravelRbac\Traits\Rbac;
use Illuminate\Support\Facades\Input;
use App\Client;
use App\Http\Requests\User\UpdateUserRequest;
use App\Http\Requests\User\StoreUserRequest;
use App\Repositories\User\UserRepositoryContract;
use App\Repositories\Role\RoleRepositoryContract;
use App\Repositories\Shop\ShopRepositoryContract;
use App\Repositories\Department\DepartmentRepositoryContract;
use App\Repositories\Setting\SettingRepositoryContract;

class UserController extends Controller
{
    protected $users;
    protected $roles;
    protected $shops;

    public function __construct(
        UserRepositoryContract $users,
        RoleRepositoryContract $roles,
        ShopRepositoryContract $shops
    ) {
    
        $this->users = $users;
        $this->roles = $roles;
        $this->shops = $shops;
        // $this->middleware('user.create', ['only' => ['create']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $users = $this->users->getAllUsers();
        // dd(lastSql());
        // dd($users);
        /*foreach ($users as $key => $value) {
           dd($value->belongsToShop);
        }*/
        return view('admin.user.index', compact(

            'users'
        ));
    }

    /**
     * Show the form for creating a new resource.
     * 创建用户
     * @return Response
     */
    public function create()
    {   
        //获得当前用户角色id
        $user_role_id = $this->users->getRoleInfoById()->id;
        // dd($user_role_id);

        // 允许当前用户添加的角色列表
        $role_add_allow = $this->roles->getAllowList($user_role_id);
        // p($role_add_allow);

        // 允许当前用户添加的门店列表
        $shop_id = Auth::user()->shop_id;

        if($shop_id != 2){

            $shop_add_allow = Shop::where('id', $shop_id)->select(['id', 'name'])->get();
        }else{

            $shop_add_allow = Shop::select(['id', 'name'])->get();
        }
        // dd(lastSql());
        // dd($shop_add_allow);

        return view('admin.user.create', compact(

            'role_add_allow',
            'shop_add_allow'
        ));
    }

    /**
     * Store a newly created resource in storage.
     * 保存用户
     * @param User $user
     * @return Response
     */
    public function store(StoreUserRequest $userRequest)
    {   
        $getInsertedId = $this->users->create($userRequest);
        return redirect()->route('admin.user.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        
        /*return view('users.show')
        ->withUser($this->users->find($id))
        ->withCompanyname($this->settings->getCompanyName());*/
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //获得当前用户角色id
        $user_role_id = $this->users->getRoleInfoById()->id;
        // dd($user_role_id);

        // 允许当前用户添加的角色列表
        $role_add_allow = $this->roles->getAllowList($user_role_id);
        // p($role_add_allow);

        // 允许当前用户添加的门店列表
        $shop_id = Auth::user()->shop_id;
        if($shop_id != 21){

            $shop_add_allow = Shop::where('id', $shop_id)->select(['id', 'name'])->get();
        }else{

            $shop_add_allow = Shop::select(['id', 'name'])->get();
        }

        $user = $this->users->find($id);
        // dd($user);

        return view('admin.user.edit',compact('user', 'role_add_allow', 'shop_add_allow'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id, UpdateUserRequest $userRequest)
    {
        $this->users->update($id, $userRequest);
        
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $this->users->destroy($id);
        
        return redirect()->route('admin.user.index');
    }
}
