<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $fillable = [
        'name',
        'slug',
        'description'
    ];
      
    public function userRole()
    {
        return $this->hasMany('Role', 'user_id', 'id');
    }

    // 定义User表与role表多对多关系
    public function hasManyUsers()
    {
        return $this->belongsToMany('App\User');
    }

    public function permissions()
    {
        return $this->belongsToMany('App\Permissions', 'permission_role', 'role_id', 'permission_id');
    }
}
