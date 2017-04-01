<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CustomerCar extends Model
{	

	use SoftDeletes; //使用软删除

    /**
     * The database table used by the model.
     * 定义模型对应数据表及主键
     * 淘车乐门店表
     * @var string
     */
    // protected $table = 'users';
    protected $table = 'tcl_customer_car';
    protected $primaryKey ='id';

    /**
     * The attributes that are mass assignable.
     * 定义可批量赋值字段
     * @var array
     */
    protected $fillable = ['name', 'mobile', 'brand_id', 'car_factory', 'category_id','city_id','city_name'];

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

    // 搜索条件处理
    public function addCondition($requestData){

        $query = $this;

        if(!empty($requestData['end_date'])){
            $query = $query->where('created_at', '<=', $requestData['end_date']);
        }
        
        if(!empty($requestData['begin_date'])){
            $query = $query->where('created_at', '>=', $requestData['begin_date']);
        } 
        return $query;
    }

    // 定义customer_car表与Category表一对多关系
    public function belongsToCategory(){

      return $this->belongsTo('App\Brand', 'category_id', 'id')->select('id', 'name AS category_name');
    }

    // 定义customer_car表与Category表一对多关系
    public function belongsToCompnay(){

      return $this->belongsTo('App\Brand', 'car_factory', 'id')->select('id', 'name AS compnay_name');
    }

    // 定义customer_car表与Brand表一对多关系
    public function belongsToBrand(){

      return $this->belongsTo('App\Brand', 'brand_id', 'id')->select('id', 'name AS brand_name');
    }

    
}
