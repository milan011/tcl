<?php
namespace App\Repositories\chance;

use App\Chance;
use App\chanceFollow;
use Session;
use Illuminate\Http\Request;
use Gate;
use Datatables;
use chancebon;
use PHPZen\LaravelRbac\Traits\Rbac;
use Auth;
use Illuminate\Support\Facades\Input;
use DB;
use Debugbar;

class chanceRepository implements chanceRepositoryContract
{
    //默认查询数据
    protected $select_columns = ['id', 'chance_code', 'car_id', 'want_id', 'car_customer_id', 'want_customer_id', 'car_creater', 'want_creater', 'creater', 'shop_id', 'status', 'created_at'];

    // 销售机会表列名称-注释对应
    protected $columns_annotate = [

        'car_id'            => '车源id',
        'want_id'           => '求购id',
        'car_customer_id'   => '车源用户id',
        'want_customer_id'  => '求购用户id',
        'car_creater'       => '车源创建者id',
        'want_creater'      => '求购信息创建者id',
        'creater'           => '销售机会创建者id',
    ];

    // 根据ID获得销售机会信息
    public function find($id)
    {
        return Chance::select($this->select_columns)
                   ->findOrFail($id);
    }

    // 根据不同参数获得销售机会列表
    public function getAllChances($request)
    {   
        // dd($request->participate);
        // $query = Chance::query();  // 返回的是一个 QueryBuilder 实例
        $query = new Chance();       // 返回的是一个Chance实例,两种方法均可
        // dd($request->all());
        // $query = $query->addCondition($request->all(), $is_self); //根据条件组合语句

        $query = $query->chacneLaunch($request->participate);

        return $query->whereIn('status', ['1', '2', '3'])
                     ->select($this->select_columns)
                     ->orderBy('created_at', 'DESC')
                     ->paginate(10);
    }

    // 创建销售机会
    public function create($requestData)
    {   
        // dd($requestData->all());
        // $car_id = 
        if($this->isRepeat($requestData)){

            $chance = $this->isRepeat($requestData);

        }else{
            // 添加销售机会并返回实例
            $requestData['creater']     = Auth::id();
            $requestData['chance_code'] = getCarCode('chance');

            $chance = new Chance();
            $input  =  array_replace($requestData->all());
            $chance->fill($input);

            $chance = $chance->create($input);
        }        
        // dd($chance);
        Session::flash('sucess', '创建销售机会成功');
        return $chance;
    }

    // 修改销售机会
    public function update($requestData, $id)
    {
        // dd($requestData->all());
        DB::transaction(function() use ($requestData, $id){

            $chance         = Chance::select($this->select_columns)->findorFail($id); //销售机会对象
            $follow_info = new chanceFollow(); //销售机会跟进对象

            $original_content = $chance->toArray(); //原有销售机会信息
            $request_content  = $requestData->all(); //提交的销售机会信息
        
            /*p($original_content);
            p($request_content);*/
            $changed_content = getDiffArray($request_content, $original_content);//比较提交的数据与原数据差别
            $update_content = collect(['例行跟进'])->toJson();  //定义销售机会跟进时信息变化情况,即跟进描述
            // dd(json_decode($update_content));
            if($changed_content->count() != 0){
                $update_content = array();
                foreach ($changed_content as $key => $value) {
    
                    /*p($this->columns_annotate[$key]);
                    p($requestData->$key);
                    p($original_content[$key]);*/
    
                    $update_content[] = Auth::user()->nick_name.'修改'.$this->columns_annotate[$key].'['.$original_content    [$key].']至['.$requestData->$key.']';
                }
            }

        
            /*dd($follow_info);
            dd(collect($update_content)->toJson());
            dd(json_decode(collect($update_content)->toJson())); //json_decode将json再转回数组
            dd($changed_content);*/
        
            // 销售机会编辑信息
            $chance->vin_code       = $requestData->vin_code;
            $chance->capacity       = $requestData->capacity;
            $chance->gearbox        = $requestData->gearbox;
            $chance->out_color      = $requestData->out_color;
            $chance->inside_color   = $requestData->inside_color;
            $chance->plate_date     = $requestData->plate_date;
            $chance->plate_end      = $requestData->plate_end;
            $chance->sale_number    = $requestData->sale_number;
            $chance->safe_type      = $requestData->safe_type;
            $chance->safe_end       = $requestData->safe_end;
            $chance->mileage        = $requestData->mileage;
            $chance->description    = $requestData->description;
            $chance->top_price      = $requestData->top_price;
            $chance->bottom_price   = $requestData->bottom_price;
            $chance->pg_description = $requestData->pg_description;
            $chance->guide_price    = $requestData->guide_price;
            $chance->is_top         = $requestData->is_top;
            $chance->recommend      = $requestData->recommend;
            $chance->creater_id     = Auth::id();
    
            // 销售机会跟进信息
            $follow_info->chance_id       = $id;
            $follow_info->user_id      = Auth::id();
            $follow_info->follow_type  = '1';
            $follow_info->operate_type = '2';
            $follow_info->description  = collect($update_content)->toJson();
            $follow_info->prev_update  = $chance->updated_at;
         
            $follow_info->save();
            $chance->save(); 

            Session::flash('sucess', '修改销售机会成功');
            return $chance;           
        });     
        // dd('sucess');
        // dd($chance->toJson());
        
    }

    // 删除销售机会
    public function destroy($id)
    {
        try {
            $chance = Chance::findorFail($id);
            $chance->delete();
            Session::flash('sucess', '删除销售机会成功');
           
        } catch (\Illuminate\Database\QueryException $e) {
            Session()->flash('faill', '删除销售机会失败');
        }      
    }

    //判断销售机会是否重复
    public function isRepeat($requestData){

        $car_id  = $requestData->car_id;
        $want_id = $requestData->want_id;

        return chance::select(['id','chance_code', 'car_id', 'want_id', 'car_customer_id', 'want_customer_id', 'car_creater', 'want_creater', 'creater', 'status'])
                       ->where('car_id', $car_id)
                       ->where('want_id', $want_id)
                       ->where('creater', Auth::id())
                       ->first();
    }

    //销售机会状态转换，暂时只有激活-废弃转换
    public function statusChange($requestData, $id){

        // dd($requestData->all());
        DB::transaction(function() use ($requestData, $id){

            $chance         = Chance::select($this->select_columns)->findorFail($id); //销售机会对象
            $follow_info = new chanceFollow(); //销售机会跟进对象

            if($requestData->status == 1){

                $update_content = collect([Auth::user()->nick_name.'激活销售机会'])->toJson();
            }else{

                $update_content = collect([Auth::user()->nick_name.'废弃销售机会'])->toJson();
            }
            

            // 销售机会编辑信息
            $chance->chance_status = $requestData->status;

            // 销售机会跟进信息
            $follow_info->chance_id       = $id;
            $follow_info->user_id      = Auth::id();
            $follow_info->follow_type  = '1';
            $follow_info->operate_type = '2';
            $follow_info->description  = collect($update_content)->toJson();
            $follow_info->prev_update  = $chance->updated_at;
         
            $follow_info->save();
            $chance->save(); 

            return $chance;
        });
    }

    public function quicklyFollow($id){

        DB::transaction(function() use ($id){

            $chance         = Chance::select($this->select_columns)->findorFail($id); //销售机会对象
            $follow_info = new chanceFollow(); //销售机会跟进对象

            $update_content = collect([Auth::user()->nick_name.'例行跟进'])->toJson();
            
            // 销售机会编辑信息
            $chance->creater_id = Auth::id();
            $chance->chance_status = '1';

            // 销售机会跟进信息
            $follow_info->chance_id       = $id;
            $follow_info->user_id      = Auth::id();
            $follow_info->follow_type  = '1';
            $follow_info->operate_type = '2';
            $follow_info->description  = collect($update_content)->toJson();
            $follow_info->prev_update  = $chance->updated_at;
         
            $follow_info->save();
            $chance->save();
            $chance->touch();

            return $chance;
        });
    }
}
