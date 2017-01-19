<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Auth;

class Plan extends Model
{
    /**
     * The database table used by the model.
     * 定义模型对应数据表及主键
     * @var string
     */
    // protected $table = 'users';
    protected $table = 'tcl_plan';
    protected $primaryKey ='id';

    /**
     * The attributes that are mass assignable.
     * 定义可批量赋值字段
     * @var array
     */
    protected $fillable = ['chance_id', 'user_id', 'plan_address', 'plan_remark', 'plan_time', 'plan_del', 'status','shop_id','partner_id','partner_shop', 'definite_time'];

    /**
     * The attributes excluded from the model's JSON form.
     * //在模型数组或 JSON 显示中隐藏某些属性
     * @var array
     */
    protected $hidden = [   
        'password', 'remember_token',
    ];

    // 搜索条件处理
    public function addCondition($requestData){

        $query   = $this;
        $user_id = Auth::id();//用户id
        // dd($query);
        if(!(Auth::user()->isSuperAdmin())){
           if(Auth::user()->isMdLeader()){
                //店长

                $user_shop_id = Auth::user()->belongsToShop->id; //用户所属门店id   
                $query = $query->where(function($query) use ($user_shop_id){

                    $query = $query->where('shop_id', $user_shop_id);
                    $query = $query->orWhere('partner_shop', $user_shop_id);
                });   
            }else{
                //店员

                $query = $query->where(function($query) use ($user_id){

                    $query = $query->where('user_id', $user_id);
                    $query = $query->orWhere('partner_id', $user_id);
                }); 
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

        if(isset($requestData['status']) && $requestData['status'] != ''){

            $query = $query->where('status', $requestData['status']);
        }else{

            $query = $query->where('status', '1');
        }        

        return $query;
    }


    // 定义Plan表与Chance表一对多关系
    public function belongsToChance(){

      return $this->belongsTo('App\Chance', 'chance_id', 'id');
    }

    // 定义Plan表与User表一对多关系
    public function belongsToUser(){

      return $this->belongsTo('App\User', 'user_id', 'id');
    }
}
