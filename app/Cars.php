<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Auth;

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

    // 搜索条件处理
    public function addCondition($requestData, $is_self){

        $query = $this;

        if($is_self){

            if(!(Auth::user()->isSuperAdmin())){

               if(Auth::user()->isMdLeader()){
                    //店长
                    $user_shop_id = Auth::user()->belongsToShop->id; //用户所属门店id
        
                    // $this->where('shop_id', $user_shop_id);
                    $query = $query->where('shop_id', $user_shop_id);    
                }else{
                    //店员
                    // $this->where('creater_id', Auth::id());
                    $query = $query->where('creater_id', Auth::id());  
                } 
            }           
        }else{
           if(!(Auth::user()->isSuperAdmin())){

               if(Auth::user()->isMdLeader()){
                    //店长
                    $user_shop_id = Auth::user()->belongsToShop->id; //用户所属门店id
        
                    // $this->where('shop_id', $user_shop_id);
                    $query = $query->where('shop_id', '!=', $user_shop_id);    
                }else{
                    //店员
                    // $this->where('creater_id', Auth::id());
                    $query = $query->where('creater_id', '!=', Auth::id());  
                } 
            }  
        }

        if(!empty($requestData['car_code'])){

            $query = $query->where('car_code', $requestData['car_code']);

            return $query;
        }

        if(isset($requestData['car_status']) && $requestData['car_status'] != ''){

            $query = $query->where('car_status', $requestData['car_status']);
        }else{

            $query = $query->whereIn('car_status', ['1', '2', '3', '4', '5', '6']);
        }  

        if(!empty($requestData['gearbox'])){

            $query = $query->where('gearbox', $requestData['gearbox']);
        }

        if(!empty($requestData['sale_number'])){

            $query = $query->where('sale_number', $requestData['sale_number']);
        }

        if(!empty($requestData['out_color'])){

            $query = $query->where('out_color', $requestData['out_color']);
        }

        if(!empty($requestData['capacity'])){

            $query = $query->where('capacity', $requestData['capacity']);
        }

        if(!empty($requestData['category_type'])){

            $query = $query->where('categorey_type', $requestData['category_type']);
        } 

        if(!empty($requestData['category_id'])){

            $query = $query->where('category_id', $requestData['category_id']);
        }else{

            if(!empty($requestData['car_factory'])){
               $query = $query->where('car_factory', $requestData['car_factory']); 
            }else{

                if(!empty($requestData['brand_id'])){
                    $query = $query->where('brand_id', $requestData['brand_id']);
                }
           }
        } 

        if(!empty($requestData['begin_mileage'])){
            $query = $query->where('mileage', '>=', $requestData['begin_mileage']);
        }
        
        if(!empty($requestData['end_mileage'])){
            $query = $query->where('mileage', '<=', $requestData['end_mileage']);
        }

        if(!empty($requestData['top_price'])){
            $query = $query->where('top_price', '<=', $requestData['top_price']);
        }
        
        if(!empty($requestData['bottom_price'])){
            $query = $query->where('top_price', '>=', $requestData['bottom_price']);
        }

        if(!empty($requestData['end_date'])){
            $query = $query->where('created_at', '<=', $requestData['end_date']);
        }
        
        if(!empty($requestData['begin_date'])){
            $query = $query->where('created_at', '>=', $requestData['begin_date']);
        } 

        if(!empty($requestData['need_follow'])){
            $query = $query->where('created_at', '<=', $requestData['need_follow']);
        }   

        return $query;
    }

     /**
     * 推荐车型信息的查询作用域
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeOsRecommend($query, $requestData)
    {
        if(isset($requestData['top_price'])){
            $query = $query->where('top_price', '<=', $requestData['top_price']);
        }
        
        if(isset($requestData['bottom_price'])){
            $query = $query->where('bottom_price', '>=', $requestData['bottom_price']);
        }
        
        $query = $query->where('car_status', '1');
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

      return $this->belongsTo('App\User', 'creater_id', 'id')->select('id as user_id', 'nick_name', 'telephone as creater_telephone');
    }

    // 定义customer表与Cars表一对多关系
    public function belongsToCustomer(){

      return $this->belongsTo('App\Customer', 'customer_id', 'id')->select('id', 'name as customer_name', 'telephone as customer_telephone');
    }

    // 定义Car表与car_follow表一对多关系
    public function hasManyFollow()
    {
        return $this->hasMany('App\CarFollow', 'car_id', 'id')->orderBy('created_at', 'DESC');
    }

    // 定义Car表与images表一对多关系
    public function hasManyImages()
    {
        return $this->hasMany('App\Image', 'car_id', 'id');
    }

    // 定义Car表与chance表一对多关系
    public function hasManyChances()
    {
        return $this->hasMany('App\Chance', 'car_id', 'id');
    }
}
