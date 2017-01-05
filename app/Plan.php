<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    /**
     * The database table used by the model.
     * 定义模型对应数据表及主键
     * @var string
     */
    // protected $table = 'users';
    protected $table = 'tcl_plan';
    protected $primaryKey ='id';

    /**
     * The attributes that are mass assignable.
     * 定义可批量赋值字段
     * @var array
     */
    protected $fillable = ['chance_id', 'user_id', 'plan_address', 'plan_remark', 'plan_time', 'plan_del', 'status'];

    /**
     * The attributes excluded from the model's JSON form.
     * //在模型数组或 JSON 显示中隐藏某些属性
     * @var array
     */
    protected $hidden = [   
        'password', 'remember_token',
    ];


    // 定义Plan表与Chance表一对多关系
    public function belongsToChance(){

      return $this->belongsTo('App\Chance', 'chance_id', 'id');
    }

    // 定义Plan表与User表一对多关系
    public function belongsToUser(){

      return $this->belongsTo('App\User', 'user_id', 'id');
    }
}
