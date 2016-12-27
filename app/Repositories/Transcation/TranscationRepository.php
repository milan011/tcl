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
    protected $select_columns = ['chance_id', 'deal_price', 'earnest', 'first_pay', 'last_pay', 'done_time', 'commission', 'commission_infact', 'commission_remark', 'violate', 'sale_card', 'trade_status', 'user_id'];

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
        return Transaction::select($this->select_columns)
                   ->findOrFail($id);
    }

    // 根据不同参数获得订车列表
    public function getAllTransactions()
    {   
        // dd($request->Transaction_launch);
        // $query = Transaction::query();  // 返回的是一个 QueryBuilder 实例
        $query = new Transaction();       // 返回的是一个Transaction实例,两种方法均可
        // dd($request->all());
        // $query = $query->addCondition($request->all(), $is_self); //根据条件组合语句

        // $query = $query->chacneLaunch($request->Transaction_launch);

        return $query->select($this->select_columns)
                     ->orderBy('created_at', 'DESC')
                     ->paginate(10);
    }

    // 创建订车
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
                
    
                $requestData['user_id'] = Auth::id();
                $transaction = new Transcation();
                $input =  array_replace($requestData->all());
                $transaction->fill($input);
                $transaction = $transaction->create($input);
    
                $car->save();
                $want->save();
                $chance->save();
                $plan->save();
    
                return $transcation;           
            });
        }                     
    }

    // 看车结果反馈
    public function update($requestData, $id)
    {   
        /**
        * 处理逻辑：
        * 1、看车后有购买意向，则转为订车操作，对应车源、求购、销售机会状态设置为订车   
        * 2、看车失败或没有看车，则该订车信息被废弃、对应销售机会也被废弃，对应车源信息和客源信息转为正常状态，
        *   可以再次被匹配并发起订车。    
        */
        // dd($requestData->all());
        DB::transaction(function() use ($requestData, $id){

            $plan   = Plan::select($this->select_columns)->findorFail($id); //订车对象
            $chance = Chance::findOrFail($plan->chance_id);
            $car    = Cars::findOrFail($chance->car_id);
            $want   = Want::findOrFail($chance->want_id);

            //dd($plan);
            // dd($chance);
            // dd($car);
            // dd($want);
            if($requestData->plan_del == 1){
                //看车成功
                $car->car_status   = '3';
                $want->want_status = '3';
                $chance->status    = '5';

                $plan->plan_status = '1';
                $plan->plan_remark = $requestData->plan_remark;
            }else{
                // 看车失败
                $car->car_status   = '1';
                $want->want_status = '1';
                $chance->status    = '0';

                $plan->plan_status = '0';
                $plan->plan_remark = $requestData->plan_remark;
            }

            $car->save();
            $want->save();
            $chance->save();
            $plan->save();

            return $plan;           
        });     
        // dd('sucess');
        // dd($Plan->toJson());       
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

        return Transaction::where('chance_id', $chance_id)->first();
    }
}
