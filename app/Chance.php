<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Auth;

class Chance extends Model
{
    /**
     * The database table used by the model.
     * 定义模型对应数据表及主键
     * @var string
     */
    // protected $table = 'users';
    protected $table = 'tcl_chance';
    protected $primaryKey ='id';

    /**
     * The attributes that are mass assignable.
     * 定义可批量赋值字段
     * @var array
     */
    protected $fillable = ['chance_code', 'car_id', 'want_id', 'car_customer_id', 'want_customer_id', 'car_creater', 'want_creater', 'creater', 'status', 'shop_id'];

    /**
     * The attributes excluded from the model's JSON form.
     * //在模型数组或 JSON 显示中隐藏某些属性
     * @var array
     */
    protected $hidden = [ ];

     /**
     * 发起销售机会或参与销售机会的查询作用域
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeChacneLaunch($query, $participate, $is_all)
    {
        $user_id = Auth::id();

        /*if($user_id == 1){

            return $query;
        }*/

        $query = $query->where(function($query) use ($user_id){

            $query = $query->where('car_creater', $user_id);
            $query = $query->orWhere('want_creater', $user_id);
        });

        if($is_all){
            if($participate){
                //用户参与的销售机会
                $query = $query->where('creater', '!=', $user_id);
            }else{
                //用户发起的销售机会
                $query = $query->where('creater', $user_id);
            }
        }
        
        return $query;
    }

    // 搜索条件处理
    public function addCondition($requestData){

        $query = $this;
        // dd($query);
        /*if($is_self){

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
        }*/

        if(!empty($requestData['end_date'])){
            $query = $query->where('created_at', '<=', $requestData['end_date']);
        }
        
        if(!empty($requestData['begin_date'])){
            $query = $query->where('created_at', '>=', $requestData['begin_date']);
        }

        return $query;
    }

    // 定义User表与Chance表一对多关系
    public function belongsToUser(){

      return $this->belongsTo('App\User', 'creater', 'id')->select('id', 'nick_name', 'telephone as creater_telephone');
    }

    // 定义User表与Chance表一对多关系(求购)
    public function belongsToUserOnWant(){

      return $this->belongsTo('App\User', 'want_creater', 'id')
                  ->select('id', 'nick_name as want_creater', 'telephone as creater_telephone');
    }

    // 定义User表与Chance表一对多关系(车源)
    public function belongsToUserOnCar(){

        return $this->belongsTo('App\User', 'car_creater', 'id')
                    ->select('id', 'nick_name as car_creater', 'telephone as creater_telephone');
    }

    // 定义Want表与Chance表一对多关系
    public function belongsToWant(){

      return $this->belongsTo('App\Want', 'want_id', 'id')->select('id', 'want_status', 'name as want_name');
    }

    // 定义Car表与Chance表一对多关系
    public function belongsToCar(){

      return $this->belongsTo('App\Cars', 'car_id', 'id')->select('id', 'car_status', 'name as car_name');
    }

    // 定义Shop表与Chance表一对多关系
    public function belongsToShop(){

      return $this->belongsTo('App\Shop', 'shop_id', 'id')->select('id', 'name as shop_name');
    }

    // 定义want表与customer表一对多关系(求购)
    public function belongsToCustomerOnWant(){

      return $this->belongsTo('App\Customer', 'want_customer_id', 'id')
                  ->select('id', 'name as want_customer_name', 'telephone as want_customer_telephone');
    }

    // 定义want表与customer表一对多关系(车源)
    public function belongsToCustomerOnCar(){

      return $this->belongsTo('App\Customer', 'car_customer_id', 'id')
                  ->select('id', 'name as car_customer_name', 'telephone as car_customer_telephone');
    }

    // 定义Chance表与plan表一对一关系
    public function hasOnePlan()
    {
        return $this->hasOne('App\Plan', 'chance_id', 'id');
    }

    // 定义Chance表与Transcation表一对多关系
    public function hasManyTranscations()
    {
        return $this->hasMany('App\Transcation', 'chance_id', 'id');
    }
}
