<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CarFollow extends Model
{
    /**
     * The database table used by the model.
     * 定义模型对应数据表及主键
     * @var string
     */
    // protected $table = 'users';
    protected $table = 'tcl_car_follow';
    protected $primaryKey ='id';

    /**
     * The attributes that are mass assignable.
     * 定义可批量赋值字段
     * @var array
     */
    protected $fillable = ['car_id', 'user_id', 'follow_type', 'operate_type', 'description', 'prev_update'];

    /**
     * The attributes excluded from the model's JSON form.
     * //在模型数组或 JSON 显示中隐藏某些属性
     * @var array
     */
    protected $hidden = [ ];

    // 定义Cars表与car_follow表一对多关系
    public function belongsToCars(){

      return $this->belongsTo('App\Cars', 'car_id', 'id');
    }
}
