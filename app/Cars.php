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
    protected $fillable = ['car_code', 'name', 'brand_id', 'car_factory', 'category_id', 'cate_id', 'capacity', 'gearbox', 'out_color', 'inside_color', 'plate_date', 'plate_end', 'plate_provence', 'plate_city', 'age', 'safe_type', 'safe_end', 'sale_number', 'mileage', 'description', 'top_price', 'bottom_price', 'car_status', 'recommend', 'is_top', 'car_type', 'customer_id', 'creater_id', 'shop_id', 'want_area', 'vin_code', 'sale_tcl', 'pg_description', 'guide_price'];

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


    public function addCondition($requestData){

        $query = $this;

        if(isset($requestData['car_status']) && $requestData['car_status'] != ''){

            $query = $query->where('car_status', $requestData['car_status']);
        }else{

            $query = $query->where('car_status', '1');
        }

        if(!empty($requestData['car_code'])){

            $query = $query->where('car_code', $requestData['car_code']);
        }

        return $query;
    }

    // 定义Category表与Cars表一对多关系
    public function belongsToCategory(){

      return $this->belongsTo('App\Category', 'cate_id', 'id')->select('id', 'name AS category_name');
    }

    // 定义Shop表与Cars表一对多关系
    public function belongsToShop(){

      return $this->belongsTo('App\Shop', 'shop_id', 'id')->select('id', 'name AS shop_name');
    }

    // 定义User表与Cars表一对多关系
    public function belongsToUser(){

      return $this->belongsTo('App\User', 'creater_id', 'id')->select('id', 'nick_name');
    }

    // 定义Car表与car_follow表一对多关系
    public function hasManyFollow()
    {
        return $this->hasMany('App\CarFollow', 'car_id', 'id');
    }
}
