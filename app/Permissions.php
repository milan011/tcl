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
        return $this->belongsToMany('App\PermissionRole', 'Permission_role', 'role_id');
    }
}
