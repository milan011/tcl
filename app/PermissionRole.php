<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
    
class PermissionRole extends Model
{
    protected $table = 'permission_role';

    protected $fillable = [
        'permission_id',
        'role_id'
    ];

    public function settings()
    {
        return $this->belongsTo('settings');
    }

    public function employee()
    {
        return $this->hasMany('App\PermissionRole', 'role_id', 3);
    }
    public function hasperm()
    {
        return $this->hasMany('App\Permissions', 'Permissions_id', 'id');
    }

    // 定义Permissionsns与Permission_Role一对多关系
    public function belongsToPermissions(){

        return $this->belongsTo('App\Permissions', 'permission_id', 'id');
  }
}
