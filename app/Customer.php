<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use DB;
use Auth;

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
    protected $fillable = ['name', 'password', 'telephone',  'qq_number', 'indentily_card', 'wx_number', 'address', 'creater_id','status', 'user_img', 'sex', 'type', 'customer_res', 'shop_id', 'remark'];

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
    public function addCondition($requestData){

        $query = $this;

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

    // 定义User表与Customer表一对多关系
    public function belongsToUser(){

      return $this->belongsTo('App\User', 'creater_id', 'id');
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

    // 定义Shop表与Customer表一对多关系
    public function belongsToShop(){

      return $this->belongsTo('App\Shop', 'shop_id', 'id')->select('id', 'city_id', 'name AS shop_name', 'address as shop_address', 'telephone as shop_tele');
    }
}
