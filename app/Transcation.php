<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Auth;

class Transcation extends Model
{
    /**
     * The database table used by the model.
     * 定义模型对应数据表及主键
     * @var string
     */
    // protected $table = 'users';
    protected $table = 'tcl_transcation';
    protected $primaryKey ='id';

    /**
     * The attributes that are mass assignable.
     * 定义可批量赋值字段
     * @var array
     */
    protected $fillable = ['chance_id', 'deal_price', 'earnest', 'first_pay', 'last_pay', 'done_time', 'commission', 'commission_infact', 'commission_remark', 'violate', 'sale_card', 'trade_status', 'user_id', 'shop_id'];

    /**
     * The attributes excluded from the model's JSON form.
     * //在模型数组或 JSON 显示中隐藏某些属性
     * @var array
     */
    protected $hidden = [];

    // 搜索条件处理
    public function addCondition($requestData){

        $query = $this;

        $user_id = Auth::id();

        if(!(Auth::user()->isSuperAdmin())){
           if(Auth::user()->isMdLeader()){
                //店长
                $user_shop_id = Auth::user()->belongsToShop->id; //用户所属门店id
    
                $query = $query->where(function($query) use ($user_shop_id){

                    $query = $query->where('shop_id', $user_shop_id);
                    $query = $query->orWhere('partner_shop', $user_shop_id);
                });

                // $query = $query->where('shop_id', $user_shop_id);    
            }else{
                //店员
                $query = $query->where(function($query) use ($user_id){

                    $query = $query->where('user_id', $user_id);
                    $query = $query->orWhere('partner_id', $user_id);
                });
                // $query = $query->where('user_id', Auth::id());  
            } 
        }

        if($requestData['participate']){
            //用户参与的销售机会
            $query = $query->where('user_id', '!=', $user_id);
        }else{
            //用户发起的销售机会
            $query = $query->where('user_id', $user_id);
        }

        if(!empty($requestData['end_date'])){
            $query = $query->where('created_at', '<=', $requestData['end_date']);
        }
        
        if(!empty($requestData['begin_date'])){
            $query = $query->where('created_at', '>=', $requestData['begin_date']);
        }            

        if(isset($requestData['trade_status']) && $requestData['trade_status'] != ''){

            $query = $query->where('trade_status', $requestData['trade_status']);
        }else{

            $query = $query->where('trade_status', '1');
        }

        return $query;
    }

    // 定义Transcation表与Chance表一对多关系
    public function belongsToChance(){

      return $this->belongsTo('App\Chance', 'chance_id', 'id');
    }

    // 定义Transcation表与User表一对多关系
    public function belongsToUser(){

      return $this->belongsTo('App\User', 'user_id', 'id');
    }
}

