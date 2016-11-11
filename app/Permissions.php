<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class Permissions extends Model
{
	protected $table = 'permissions';

	protected $fillable = [
        'name',
        'slug',
        'description'
    ];

    public function roles()
    {
        return $this->belongsToMany('App\Role', 'permission_role', 'permission_id', 'role_id');
    }
    public function hasperm()
    {
        return $this->belongsTo('App\PermissionRole', 'Permission_id', 'id');
    }

    // 定义Permissionsns与Permission_Role一对多关系
    public function hasManyPermissionRoles(){
    	return $this->hasMany('App\PermissionRole', 'permission_id', 'id');
    }
}
