<?php
namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use App\Tasks;
use App\shop;
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
        $this->middleware('user.create', ['only' => ['create']]);
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
        return view('admin.user.index', compact(

            'users'
        ));
    }

    public function anyData()
    {
        $canUpdateUser = auth()->user()->canDo('update.user');
        $users = User::select(['id', 'name', 'email', 'work_number']);
        return Datatables::of($users)
        ->addColumn('namelink', function ($users) {
                return '<a href="users/'.$users->id.'" ">'.$users->name.'</a>';
        })

        ->add_column('edit','
                <a href="{{ route(\'users.edit\', $id) }}" class="btn btn-success" >Edit</a>')
        ->add_column('delete', '
                <form action="{{ route(\'users.destroy\', $id) }}" method="POST">
            <input type="hidden" name="_method" value="DELETE">
            <input type="submit" name="submit" value="Delete" class="btn btn-danger" onClick="return confirm(\'Are you sure?\')"">

            {{csrf_field()}}
            </form>')
        ->make(true);
    }

    public function taskData($id)
    {
        
        $tasks = Tasks::select(
            ['id', 'title', 'created_at', 'deadline', 'fk_user_id_assign']
        )
        ->where('fk_user_id_assign', $id)->where('status', 1);
        return Datatables::of($tasks)
        ->addColumn('titlelink', function ($tasks) {
                return '<a href="' . route('tasks.show', $tasks->id). '">'.$tasks->title.'</a>';
        })
        ->editColumn('created_at', function ($tasks) {
                return $tasks->created_at ? with(new Carbon($tasks->created_at))
                ->format('d/m/Y') : '';
        })
        ->editColumn('deadline', function ($tasks) {
                return $tasks->created_at ? with(new Carbon($tasks->created_at))
                ->format('d/m/Y') : '';
        })
        ->make(true);
    }

    public function closedTaskData($id)
    {
        
        $tasks = Tasks::select(
            ['id', 'title', 'created_at', 'deadline', 'fk_user_id_assign']
        )
        ->where('fk_user_id_assign', $id)->where('status', 2);
        return Datatables::of($tasks)
        ->addColumn('titlelink', function ($tasks) {
                return '<a href="' . route('tasks.show', $tasks->id). '">'.$tasks->title.'</a>';
        })
        ->editColumn('created_at', function ($tasks) {
                return $tasks->created_at ? with(new Carbon($tasks->created_at))
                ->format('d/m/Y') : '';
        })
        ->editColumn('deadline', function ($tasks) {
                return $tasks->created_at ? with(new Carbon($tasks->created_at))
                ->format('d/m/Y') : '';
        })
        ->make(true);
    }

    public function clientData($id)
    {
        
        $clients = Client::select(['id', 'name', 'company_name', 'primary_number', 'email'])->where('fk_user_id', $id);
        return Datatables::of($clients)
        ->addColumn('clientlink', function ($clients) {
                return '<a href="' . route('clients.show', $clients->id). '">'.$clients->name.'</a>';
        })
        ->editColumn('created_at', function ($clients) {
                return $clients->created_at ? with(new Carbon($clients->created_at))
                ->format('d/m/Y') : '';
        })
        ->editColumn('deadline', function ($clients) {
                return $clients->created_at ? with(new Carbon($clients->created_at))
                ->format('d/m/Y') : '';
        })
        ->make(true);
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
        if($shop_id != 0){

            $shop_add_allow = $this->shops->find($shop_id);
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
        dd($userRequest->all());
        $getInsertedId = $this->users->create($userRequest);
        return redirect()->route('users.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        
        return view('users.show')
        ->withUser($this->users->find($id))
        ->withCompanyname($this->settings->getCompanyName());
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        return view('users.edit')
        ->withUser($this->users->find($id))
        ->withRoles($this->roles->listAllRoles())
        ->withDepartment($this->departments->listAllDepartments());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id, UpdateUserRequest $request)
    {
        $this->users->update($id, $request);
        Session()->flash('flash_message', 'User successfully updated');
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
        
        return redirect()->route('users.index');
    }
}
