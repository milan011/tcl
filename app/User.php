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

class User extends Model implements AuthenticatableContract, CanResetPasswordContract
{

    use Authenticatable, CanResetPassword, Rbac, Notifable, SoftDeletes;

    /**
     * The database table used by the model.
     * 定义表名及主键
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
}
