<?php
namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;
use PHPZen\LaravelRbac\Traits\Rbac;
use Illuminate\Database\Eloquent\SoftDeletes;
use Fenos\Notifynder\Notifable;
use Cache;
use Auth;

class User extends Model implements AuthenticatableContract, CanResetPasswordContract
{

    use Authenticatable, CanResetPassword, Rbac, Notifable, SoftDeletes;

    /**
     * The database table used by the model.
     * 定义表名及主键
     * 淘车乐管理员表
     * @var string
     */
    // protected $table = 'users';
    protected $table = 'tcl_user';
    protected $primaryKey ='id';

    /**
     * The attributes that are mass assignable.
     * 批量赋值属性
     * @var array
     */
    // protected $fillable = ['name', 'email', 'password', 'address', 'personal_number', 'work_number', 'image_path'];
    protected $fillable = ['name', 'nick_name', 'password', 'telephone', 'phone', 'qq_number', 'wx_number', 'address', 'creater_id', 'shop_id', 'status', 'user_img', 'email'];

    /**
     * The attributes excluded from the model's JSON form.
     * 隐藏属性
     * @var array
     */
    // protected $dates = ['trial_ends_at', 'subscription_ends_at'];
    // protected $hidden = ['password', 'password_confirmation', 'remember_token'];
    protected $hidden = [   //在模型数组或 JSON 显示中隐藏某些属性
        'password', 'remember_token',
    ];

    /**
     * 应该被调整为日期的属性
     * 定义软删除
     * @var array
     */
    protected $dates = ['deleted_at'];
    
    // 是否超级管理员
    public function isSuperAdmin(){

        return Auth::id() === 1;
    }

    // 是否店长
    public function isMdLeader(){

        $user_role_id  = Auth::user()->hasManyUserRole[0]->role_id; //用户角色id
        $user_role_id  = '6';
        return $user_role_id == config('tcl.user_role_type')['门店店长'];
    }

    public function tasksAssign()
    {
        return $this->hasMany('App\Tasks', 'fk_user_id_assign', 'id')
        ->where('status', 1)
        ->orderBy('deadline', 'asc');
    }
    public function tasksCreated()
    {
        return $this->hasMany('App\Tasks', 'fk_user_id_created', 'id')->limit(10);
    }

    public function tasksCompleted()
    {
        return $this->hasMany('App\Tasks', 'fk_user_id_assign', 'id')->where('status', 2);
    }
    
    public function tasksAll()
    {
        return $this->hasMany('App\Tasks', 'fk_user_id_assign', 'id')->whereIn('status', [1, 2]);
    }
    
    // 定义User表与role_user表一对多关系
    public function hasManyUserRole()
    {
        return $this->hasMany('App\RoleUser', 'user_id', 'id');
    }

    // 定义User表与role表多对多关系
    public function hasManyRoles()
    {
        return $this->belongsToMany('App\Role', 'role_user', 'user_id', 'role_id');
    }

    // 定义User表与Shop表一对一关系
    public function belongsToShop(){

      // return $this->hasOne('App\Shop', 'user_id', 'id')->select('user_id','name', 'address');
      return $this->belongsTo('App\Shop', 'shop_id', 'id');
    }

    // 定义User表与Notice表一对多关系
    public function hasManyNotice(){

      return $this->hasMany('App\Notice', 'user_id', 'id');
    }

    // 定义User表与Brand表一对多关系
    public function hasManyBrand(){

      return $this->hasMany('App\Brand', 'creater_id', 'id');
    }

    // 定义User表与Customer表一对多关系
    public function hasManyCustomer(){

      return $this->hasMany('App\Customer', 'user_id', 'id');
    }

    // 定义User表与Cars表一对多关系
    public function hasManyCars(){

      return $this->hasMany('App\Cars', 'creater_id', 'id');
    }

    // 定义User表与Want表一对多关系
    public function hasManyWants(){

      return $this->hasMany('App\Want', 'creater_id', 'id');
    }

    // 定义User表与Chance表一对多关系
    public function hasManyChances(){

      return $this->hasMany('App\Chance', 'creater', 'id');
    }

    // 定义User表与Chance表一对多关系(求购信息)
    public function hasManyChancesOnWant(){

      return $this->hasMany('App\Chance', 'want_customer_id', 'id');
    }

    // 定义User表与Chance表一对多关系(车源信息)
    public function hasManyChancesOnCar(){

      return $this->hasMany('App\Chance', 'car_customer_id', 'id');
    }

    // 定义User表与plan表一对多关系
    public function hasManyPlans(){

      return $this->hasMany('App\Plan', 'user_id', 'id');
    }

    // 定义User表与book表一对多关系
    public function hasManyTranscations()
    {
        return $this->hasMany('App\Transcation', 'user_id', 'id');
    }
}
