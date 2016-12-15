<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Want extends Model
{
    /**
     * The database table used by the model.
     * 定义模型对应数据表及主键
     * @var string
     */
    // protected $table = 'users';
    protected $table = 'tcl_want';
    protected $primaryKey ='id';

    /**
     * The attributes that are mass assignable.
     * 定义可批量赋值字段
     * @var array
     */
    protected $fillable = ['want_code', 'name', 'car_type', 'brand_id', 'categorey_id', 'car_factory', 'cate_id', 'capacity', 'gearbox', 'bottom_price', 'top_price', 'age', 'mileage', 'out_color', 'inside_color', 'customer_id', 'creater_id', 'want_eara', 'remark', 'want_status', 'shop_id'];

    /**
     * The attributes excluded from the model's JSON form.
     * //在模型数组或 JSON 显示中隐藏某些属性
     * @var array
     */
    protected $hidden = [];

    // 搜索条件处理
    public function addCondition($requestData){

        $query = $this;

        if(isset($requestData['want_status']) && $requestData['want_status'] != ''){

            $query = $query->where('want_status', $requestData['want_status']);
        }else{

            $query = $query->where('want_status', '1');
        }

        return $query;
    }

    // 定义Category表与Want(客源）表一对多关系
    public function belongsToCategory(){

      return $this->belongsTo('App\Category', 'cate_id', 'id')->select('id', 'name AS category_name');
    }

    // 定义Shop表与Want(客源）表一对多关系
    public function belongsToShop(){

      return $this->belongsTo('App\Shop', 'shop_id', 'id')->select('id', 'name AS shop_name');
    }

    // 定义User表与Want(客源）表一对多关系
    public function belongsToUser(){

      return $this->belongsTo('App\User', 'creater_id', 'id')->select('id', 'nick_name');
    }

    // 定义Car表与want_follow表一对多关系
    public function hasManyFollow()
    {
        return $this->hasMany('App\WantFollow', 'car_id', 'id');
    }
}
