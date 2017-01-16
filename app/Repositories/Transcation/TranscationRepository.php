<?php
namespace App\Repositories\Transcation;

use App\Transcation;
use App\Cars;
use App\Want;
use App\Chance;
use App\Plan;
use Session;
use Illuminate\Http\Request;
use Gate;
use Datatables;
use Planbon;
use PHPZen\LaravelRbac\Traits\Rbac;
use Auth;
use Illuminate\Support\Facades\Input;
use DB;
use Debugbar;

class TranscationRepository implements TranscationRepositoryContract
{
    //默认查询数据
    protected $select_columns = ['id','chance_id', 'deal_price', 'earnest', 'first_pay', 'last_pay', 'done_time', 'commission', 'commission_infact', 'commission_remark', 'violate', 'sale_card', 'trade_status', 'user_id','created_at', 'shop_id'];

    // 订车表列名称-注释对应
    protected $columns_annotate = [

        'car_id'            => '车源id',
        'want_id'           => '求购id',
        'car_customer_id'   => '车源用户id',
        'want_customer_id'  => '求购用户id',
        'car_creater'       => '车源创建者id',
        'want_creater'      => '求购信息创建者id',
        'creater'           => '订车创建者id',
    ];

    // 根据ID获得订车信息
    public function find($id)
    {
        return Transcation::select($this->select_columns)
                   ->findOrFail($id);
    }

    // 根据不同参数获得订车列表
    public function getAllTranscations($ruquest)
    {   
        // dd($request->Transaction_launch);
        // $query = Transaction::query();  // 返回的是一个 QueryBuilder 实例
        $query = new Transcation();       // 返回的是一个Transaction实例,两种方法均可
        // dd($ruquest->all());
        $query = $query->addCondition($ruquest->all()); //根据条件组合语句

        // $query = $query->chacneLaunch($request->Transaction_launch);
        // $query = $query->where('trade_status', '1');
        return $query->select($this->select_columns)
                     ->orderBy('created_at', 'DESC')
                     ->paginate(10);
    }

    // 创建交易
    public function create($requestData)
    {   
        // dd($requestData->all());
        if($this->isRepeat($requestData->chance_id)){

           return false;
        }else{
            DB::transaction(function() use ($requestData){

                $plan   = Plan::findOrFail($requestData->plan_id); //约车对象
                $chance = Chance::findOrFail($requestData->chance_id);
                $car    = Cars::findOrFail($requestData->car_id);
                $want   = Want::findOrFail($requestData->want_id);
    
                $car->car_status   = '3';
                $want->want_status = '3';
                $chance->status    = '5';
                $plan->status      = '2';
                $plan->plan_del    = '1';
                $plan->plan_remark = $requestData->plan_remark;
                
                //获得交易参与者ID及门店ID
                $partner = getPartnerInfo($chance->car_creater,$chance->want_creater,$chance->creater);
                dd($partner);
                if($partner['self']){
                    //车源、求购均来自本用户
                    $requestData['partner_id'] = Auth::id();
                    $requestData['partner_shop'] = $chance->shop_id;
                }else{

                    if($partner['want']){
                        // 对方提供求购信息
                        $requestData['partner_id']   = $partner['user_id'];
                        $requestData['partner_shop'] = $want->shop_id;
                    }else{
                        // 对方提供车源信息
                        $requestData['partner_id'] = $partner['user_id'];
                        $requestData['partner_shop'] = $car->shop_id;
                    }
                }

                $requestData['user_id'] = Auth::id();
                $requestData['shop_id'] = $chance->shop_id;
                
                $transcation = new Transcation();
                $input =  array_replace($requestData->all());
                $transcation->fill($input);
                $transcation = $transcation->create($input);
    
                $car->save();
                $want->save();
                $chance->save();
                $plan->save();
    
                return $transcation;           
            });
        }                     
    }

    // 交易修改
    public function update($requestData, $id)
    {   
        // dd($requestData->all()); 
        if(isset($requestData->complete) && $requestData->complete == '1'){

            DB::transaction(function() use ($requestData, $id){

                $transcation = Transcation::findorFail($id); //交易对象
                $plan        = Plan::where('chance_id', $transcation->chance_id)->first();
                $chance      = $transcation->belongsToChance; //销售机会对象
                $car         = $chance->belongsToCar;         //车源
                $want        = $chance->belongsToWant;        //求购信息
    
                // dd($transcation);
                /*dd($plan);
                dd($car);
                dd($want);
                dd($chance);*/
                $requestData['trade_status'] = '2';
                $input =  array_replace($requestData->all());
    
                // dd($transcation->fill($input));
                $transcation->fill($input)->save();
            
                $chance->status    = '6';
                $car->car_status   = '6';
                $want->want_status = '6';
                $plan->plan_del    = '2';
    
                $chance->save();
                $car->save();
                $want->save();
                $plan->save();
                $transcation->save(); 
    
                Session::flash('sucess', '恭喜您完成交易');
                return $transcation;
            });
        }else{

            $transcation  = Transcation::findorFail($id);
            $input =  array_replace($requestData->all());

            // dd($transcation->fill($input));
            $transcation->fill($input)->save();
            // dd($transcation);
            Session::flash('sucess', '修改交易成功');
            return $transcation;
            
        }
         
    }

    // 删除订车
    public function destroy($id)
    {
        try {
            $Plan = Plan::findorFail($id);
            $Plan->delete();
            Session::flash('sucess', '删除订车成功');
           
        } catch (\Illuminate\Database\QueryException $e) {
            Session()->flash('faill', '删除订车失败');
        }      
    }

    //判断销售机会是否重复
    public function isRepeat($chance_id){

        return Transcation::where('chance_id', $chance_id)->first();
    }

    //状态转换，暂时只有激活-废弃转换
    public function statusChange($requestData, $id){
        /**
        * 交易被废弃后，其对应销售机会将被废弃，对应车源、求购信息转为正常状态   
        */
        // dd($requestData->all());
        DB::transaction(function() use ($requestData, $id){

            $transcation = Transcation::findorFail($id); //交易对象
            $plan        = Plan::where('chance_id', $transcation->chance_id)->first();
            $chance      = $transcation->belongsToChance; //销售机会对象
            $car         = $chance->belongsToCar;         //车源
            $want        = $chance->belongsToWant;        //求购信息

            // dd($transcation);
            /*dd($plan);
            dd($car);
            dd($want);
            dd($chance);*/

            $transcation->trade_status = '0';
            $chance->status            = '0';
            $car->car_status           = '1';
            $want->want_status         = '1';
            $plan->plan_del            = '0';

            $chance->save();
            $car->save();
            $want->save();
            $transcation->save(); 

            return $transcation;
        });
    }
}
