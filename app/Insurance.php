<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Auth;

class Insurance extends Model
{
    /**
     * The database table used by the model.
     * 定义模型对应数据表及主键
     * @var string
     */
    // protected $table = 'users';
    protected $table = 'tcl_insurance';
    protected $primaryKey ='id';

    /**
     * The attributes that are mass assignable.
     * 定义可批量赋值字段
     * @var array
     */
    protected $fillable = ['insurance_code', 'name', 'company_commercial', 'company_interest', 'car_plate', 'telephone', 'categorey_id', 'source', 'traffic_date', 'vehicle_date', 'traffic_price', 'vehicle_price', 'vehicle_tax', 'total_price', 'detail', 'interest_rate', 'commercial_rate', 'rebeat', 'royalty_ratio', 'commercial_ratio', 'royalty', 'need_pay', 'profit', 'salesman', 'insurance_status', 'remark', 'customer_id', 'remark', 'creater_id', 'insurance_provence', 'insurance_city'];

    /**
     * The attributes excluded from the model's JSON form.
     * //在模型数组或 JSON 显示中隐藏某些属性
     * @var array
     */
    protected $hidden = [   
        'password', 'remember_token',
    ];

    /**
     * 应该被调整为日期的属性
     * 定义软删除
     * @var array
     */
    protected $dates = ['deleted_at'];

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
    public function addCondition($requestData){

        $query = $this;

        /*if($is_self){

            if(!(Auth::user()->isSuperAdmin())){

               if(Auth::user()->isMdLeader()){
                    //店长
                    $user_shop_id = Auth::user()->shop_id; //用户所属门店id
                    // $this->where('shop_id', $user_shop_id);
                    $query = $query->where('shop_id', $user_shop_id);    
                }else{
                    //店员
                    // $this->where('creater_id', Auth::id());
                    $query = $query->where('creater_id', Auth::id());  
                } 
            }           
        }*/

        // dd($requestData);

        if(!empty($requestData['insurance_code'])){

            $query = $query->where('insurance_code', $requestData['insurance_code']);

            return $query;
        }

        if(isset($requestData['insurance_status']) && $requestData['insurance_status'] != ''){
            
            $query = $query->where('insurance_status', $requestData['insurance_status']);
            
        }else{

            $query = $query->where('insurance_status', '1');
        }  

        if(!empty($requestData['telephone'])){

            $query = $query->where('telephone', $requestData['telephone']);
        }

        if(!empty($requestData['name'])){

            $query = $query->where('name','LIKE','%'.$requestData['name'].'%');
        } 

        if(!empty($requestData['end_date'])){
            $query = $query->where('created_at', '<=', $requestData['end_date']);
        }
        
        if(!empty($requestData['begin_date'])){
            $query = $query->where('created_at', '>=', $requestData['begin_date']);
        } 

        return $query;
    }

    // 定义Shop表与insurance表一对多关系
    public function belongsToShop(){

      return $this->belongsTo('App\Shop', 'shop_id', 'id')->select('id', 'city_id', 'name AS shop_name', 'address as shop_address');
    }

    // 定义Brand表与insurance表一对多关系
    public function belongsToBrand(){

      return $this->belongsTo('App\Brand', 'categorey_id', 'id')->select('id', 'name AS brand_name');
    }

    // 定义User表与insurance表一对多关系
    public function belongsToUser(){

      return $this->belongsTo('App\User', 'creater_id', 'id')->select('id as user_id', 'nick_name', 'telephone as creater_telephone');
    }

    // 定义customer表与insurance表一对多关系
    /*public function belongsToCustomer(){

      return $this->belongsTo('App\Customer', 'customer_id', 'id')->select('id', 'name as customer_name', 'telephone as customer_telephone');
    }*/

    // 定义insurance表与Area表一对多关系
    public function belongsToCity(){

      return $this->belongsTo('App\Area', 'insurance_city', 'id')->select('id', 'name as city_name');
    }

    // 定义insurance表与Area表一对多关系
    public function belongsToProvence(){

      return $this->belongsTo('App\Area', 'insurance_provence', 'id')->select('id', 'name as provence_name');
    }

    // 定义Car表与images表一对多关系
    public function hasManyImages()
    {
        return $this->hasMany('App\InsuranceImage', 'insurance_id', 'id');
    }
}
