<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use DB;

class Customer extends Model
{
    use SoftDeletes;

    /**
     * The database table used by the model.
     * 淘车乐客户表
     * 定义模型对应数据表及主键
     * @var string
     */
    protected $table      = 'tcl_customer';
    protected $primaryKey ='id';

    /**
     * The attributes that are mass assignable.
     * 定义可批量赋值字段
     * @var array
     */
    protected $fillable = ['name', 'password', 'telephone',  'qq_number', 'indentily_card', 'wx_number', 'address', 'creater_id','status', 'user_img', 'sex', 'type', 'customer_res'];

    /**
     * The attributes excluded from the model's JSON form.
     * //在模型数组或 JSON 显示中隐藏某些属性
     * @var array
     */
    protected $hidden = [   
        'password', 'remember_token',
    ];

    // 插入数据时忽略唯一索引
    public static function insertIgnore($array){
        $a = new static();
        if($a->timestamps){
            $now = \Carbon\Carbon::now();
            $array['created_at'] = $now;
            $array['updated_at'] = $now;
        }
        DB::insert('INSERT IGNORE INTO '.$a->table.' ('.implode(',',array_keys($array)).
            ') values (?'.str_repeat(',?',count($array) - 1).')',array_values($array));
    }

    // 定义User表与Customer表一对多关系
    public function belongsToUser(){

      return $this->belongsTo('App\User', 'user_id', 'id');
    }

    // 定义Customer表与Cars表一对多关系
    public function hasManyCars()
    {
        return $this->hasMany('App\Cars', 'customer_id', 'id');
    }

    // 定义Customer表与want表一对多关系
    public function hasManyWants()
    {
        return $this->hasMany('App\Want', 'customer_id', 'id');
    }

    // 定义Customer表与chance表一对多关系(车源)
    public function hasManyChancesOnCar()
    {
        return $this->hasMany('App\Chance', 'car_customer_id', 'id');
    }

    // 定义Customer表与chance表一对多关系(求购)
    public function hasManyChancesOnWant()
    {
        return $this->hasMany('App\Chance', 'want_customer_id', 'id');
    }
}
