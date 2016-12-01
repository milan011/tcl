<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cars extends Model
{
    /**
     * The database table used by the model.
     * 定义模型对应数据表及主键
     * @var string
     */
    // protected $table = 'users';
    protected $table = 'tcl_cars';
    protected $primaryKey ='id';

    /**
     * The attributes that are mass assignable.
     * 定义可批量赋值字段
     * @var array
     */
    protected $fillable = ['car_code', 'brand_id', 'categorey_id', 'cate_id', 'img_url', 'img_thumb', 'capacity', 'gearbox', 'out_color', 'inside_color', 'plate_date', 'plate_end', 'plate_provence', 'plate_city', 'age', 'safe_type', 'sale_number', 'mileage', 'description', 'top_price', 'bottom_price', 'car_status', 'recommend', 'is_top', 'car_type', 'customer_id', 'creater_id', 'shop_id', 'want_area', 'created_at'];

    /**
     * The attributes excluded from the model's JSON form.
     * //在模型数组或 JSON 显示中隐藏某些属性
     * @var array
     */
    protected $hidden = [   
        'password', 'remember_token',
    ];
}
