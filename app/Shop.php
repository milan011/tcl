<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Shop extends Model
{	

	use SoftDeletes; //使用软删除

    /**
     * The database table used by the model.
     * 定义模型对应数据表及主键
     * 淘车乐门店表
     * @var string
     */
    // protected $table = 'users';
    protected $table = 'tcl_shop';
    protected $primaryKey ='id';

    /**
     * The attributes that are mass assignable.
     * 定义可批量赋值字段
     * @var array
     */
    protected $fillable = ['name', 'type', 'qq_number', 'wx_number', 'provence_id', 'city_id', 'telephone', 'address', 'email', 'user_id', 'status'];

    /**
     * The attributes excluded from the model's JSON form.
     * //在模型数组或 JSON 显示中隐藏某些属性
     * @var array
     */
    protected $hidden = [ ];

    /**
     * 应该被调整为日期的属性
     * 定义软删除
     * @var array
     */
    protected $dates = ['deleted_at'];

    // 定义Shop表与User表一对多关系
    public function hasManyUser(){

        return $this->hasMany('App\User', 'creater_id', 'id');

    }

    // 定义Shop表与Cars表一对多关系
    public function hasManyCars(){

      return $this->hasMany('App\Cars', 'shop_id', 'id');
    }

    // 定义Shop表与Want表一对多关系
    public function hasManyWants(){

      return $this->hasMany('App\Want', 'shop_id', 'id');
    }

    // 定义Shop表与Chance表一对多关系
    public function hasManyChances(){

      return $this->hasMany('App\Chance', 'shop_id', 'id');
    }

    // 定义Shop表与Transcation表一对多关系
    public function hasManyTranscations(){

      return $this->hasMany('App\Transcation', 'shop_id', 'id');
    }
}
