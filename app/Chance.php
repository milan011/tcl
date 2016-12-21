<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chance extends Model
{
    /**
     * The database table used by the model.
     * 定义模型对应数据表及主键
     * @var string
     */
    // protected $table = 'users';
    protected $table = 'tcl_chance';
    protected $primaryKey ='id';

    /**
     * The attributes that are mass assignable.
     * 定义可批量赋值字段
     * @var array
     */
    protected $fillable = ['chance_code', 'car_id', 'want_id', 'car_customer_id', 'want_customer_id', 'car_creater', 'want_creater', 'creater', 'status'];

    /**
     * The attributes excluded from the model's JSON form.
     * //在模型数组或 JSON 显示中隐藏某些属性
     * @var array
     */
    protected $hidden = [ ];

    // 定义User表与Chance表一对多关系
    public function belongsToUser(){

      return $this->belongsTo('App\User', 'creater', 'id')->select('id', 'nick_name', 'telephone as creater_telephone');
    }

    // 定义Want表与Chance表一对多关系
    public function belongsToWant(){

      return $this->belongsTo('App\Want', 'want_id', 'id')->select('id', 'name as want_name');
    }

    // 定义Car表与Chance表一对多关系
    public function belongsToCar(){

      return $this->belongsTo('App\Cars', 'car_id', 'id')->select('id', 'name as car_name');
    }

    // 定义want表与customer表一对多关系(求购)
    public function belongsToCustomerOnWant(){

      return $this->belongsTo('App\Customer', 'want_customer_id', 'id')->select('id', 'name as car_customer_name', 'telephone as car_customer_telephone');
    }

    // 定义want表与customer表一对多关系(车源)
    public function belongsToCustomerOnCar(){

      return $this->belongsTo('App\Customer', 'car_customer_id', 'id')->select('id', 'name as want_customer_name', 'telephone as want_customer_telephone');
    }
}
