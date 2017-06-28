<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Brand extends Model
{
    use SoftDeletes;

    /**
     * The database table used by the model.
     * 定义模型对应数据表及主键
     * 淘车乐品牌表
     * @var string
     */
    // protected $table = 'users';
    protected $table = 'tcl_brand';
    protected $primaryKey ='id';

    /**
     * The attributes that are mass assignable.
     * 定义可批量赋值字段
     * @var array
     */
    protected $fillable = ['name', 'logo_img', 'sort', 'status', 'frist_letter', 'recommend', 'creater_id', 'pid'];

    /**
     * The attributes excluded from the model's JSON form.
     * //在模型数组或 JSON 显示中隐藏某些属性
     * @var array
     */
    protected $hidden = [];

    /**
     * 应该被调整为日期的属性
     * 定义软删除
     * @var array
     */
    protected $dates = ['deleted_at'];

    // 定义User表与Brand表一对多关系
    public function belongsToUser(){

      return $this->belongsTo('App\User', 'creater_id', 'id');
    }

    // 定义Brand表与Category表一对多关系
    public function hasManyCategory(){

      return $this->hasMany('App\Category', 'brand_id', 'id');
    }

    // 定义Brand表与Category表一对多关系
    public function hasManyCustomerCar(){

      return $this->hasMany('App\CustomerCar', 'brand_id', 'id');
    }

    // 定义Brand表与Loan表一对多关系
    public function hasManyLoans(){

      return $this->hasMany('App\Loan', 'category_id', 'id');
    }

    // 定义Brand表与insurance表一对多关系
    public function hasManyInsurances(){

      return $this->hasMany('App\Insurance', 'categorey_id', 'id');
    }
}
