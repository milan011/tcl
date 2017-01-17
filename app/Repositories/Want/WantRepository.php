<?php
namespace App\Repositories\Want;

use App\Want;
use App\WantFollow;
use Session;
use Illuminate\Http\Request;
use Gate;
use Datatables;
use Carbon;
use PHPZen\LaravelRbac\Traits\Rbac;
use Auth;
use Illuminate\Support\Facades\Input;
use DB;
use Debugbar;

class WantRepository implements WantRepositoryContract
{
    //默认查询数据
    protected $select_columns = ['id', 'want_code', 'name', 'want_type', 'brand_id', 'categorey_id', 'car_factory', 'cate_id', 'capacity', 'gearbox', 'bottom_price', 'top_price', 'age', 'mileage', 'sale_number', 'out_color', 'inside_color', 'customer_id', 'creater_id', 'want_area', 'remark', 'want_status', 'shop_id', 'created_at', 'updated_at','recommend','is_top','xs_remark', 'alternate_car', 'alternate_car_another'];

    // 求购信息表列名称-注释对应
    protected $columns_annotate = [

        'capacity'              => '排量',
        'gearbox'               => '变速箱',
        'out_color'             => '外观颜色',
        'inside_color'          => '内饰颜色',
        'age'                   => '车龄',
        'mileage'               => '行驶里程',
        'remark'                => '客户描述',
        'bottom_price'          => '期望价格',
        'top_price'             => '可接受价格',
        'guide_price'           => '指导价',
        'want_status'           => '求购信息状态',
        'is_top'                => '是否置顶推荐',
        'recommend'             => '是否推荐求购信息',
        'xs_remark'             => '销售描述',
        'alternate_car'         => '备选车型',
        'alternate_car_another' => '备选车型',
    ];

    // 根据ID获得求购信息信息
    public function find($id)
    {
        return Want::select($this->select_columns)
                   ->findOrFail($id);
    }

    // 根据不同参数获得求购信息列表
    public function getAllWants($request, $is_self = false)
    {   

        // dd($request->all());
        // $query = Want::query();  // 返回的是一个 QueryBuilder 实例
        $query = new Want();       // 返回的是一个Cars实例,两种方法均可

        $query = $query->addCondition($request->all(), $is_self); //根据条件组合语句
        // dd($query);
        
        /*if($request->has('os_recommend') && $request->os_recommend == 'yes'){
            //系统推荐信息scope添加
            $query = $query->osRecommend($request->all());
        }*/

        return $query->select($this->select_columns)
                     ->orderBy('created_at', 'DESC')
                     ->paginate(10);
    }

    // 创建求购信息
    public function create($requestData)
    {   
        DB::transaction(function() use ($requestData){
            // 添加求购信息并返回实例
            $requestData['creater_id']   = Auth::id();
            $requestData['want_code']    = getCarCode('want');

            if(empty($requestData->mileage)){
                $requestData['mileage']      = '1';
            }
            if(empty($requestData->out_color)){
                $requestData['out_color']    = '0';
            }
            if(empty($requestData->inside_color)){
               $requestData['inside_color'] = '3';
            }
                                  
            if(empty($requestData->name)){
                $requestData['name'] = '无具体意向车型';
            }
    
            $want = new Want;
            $input  =  array_replace($requestData->all());
            // dd($input);
            $want->fill($input);
            $want = $want->create($input);
            // dd($want);

            $follow_info = new WantFollow(); //求购信息跟进对象

            $create_content = collect(['创建求购信息'])->toJson();  //定义求购信息跟进时信息变化情况,即跟进描述
            // 求购信息跟进信息
            $follow_info->want_id       = $want->id;
            $follow_info->user_id      = Auth::id();
            $follow_info->follow_type  = '1';
            $follow_info->operate_type = '1';
            $follow_info->description  = $create_content;
            $follow_info->prev_update  = $want->updated_at;
        
            $follow_info->save(); 
                
    
            return $want;
        });
    }

    // 修改求购信息
    public function update($requestData, $id)
    {
        // dd($requestData->all());
        DB::transaction(function() use ($requestData, $id){

            $want         = Want::select($this->select_columns)->findorFail($id); //求购信息对象
            $follow_info = new WantFollow(); //求购信息跟进对象

            $original_content = $want->toArray(); //原有求购信息信息
            $request_content  = $requestData->all(); //提交的求购信息信息
        
            /*p($original_content);
            p($request_content);*/
            $changed_content = getDiffArray($request_content, $original_content);//比较提交的数据与原数据差别
            $update_content = '例行跟进';  //定义求购信息跟进时信息变化情况,即跟进描述

            $need_del_array = ['capacity', 'gearbox','out_color','inside_color','sale_number','is_top','recommend'];

            // dd($changed_content);
            if($changed_content->count() != 0){
                $update_content = array();
                foreach ($changed_content as $key => $value) {
    
                    if(in_array($key, $need_del_array)){
                        /*p($original_content[$key]);
                        p($key);
                        p($value);
                        p(config('tcl.'.$key)[$value]);exit;*/
                        $current_content = config('tcl.'.$key)[$original_content[$key]];
                        $updated_content = config('tcl.'.$key)[$value];
                        $update_content[] = $this->columns_annotate[$key].'['.$current_content.']修改为['.$updated_content.']';
                    }else{
                        $update_content[] = $this->columns_annotate[$key].'['.$original_content[$key].']修改为['.$requestData->$key.']';
                    }
                }
            }

        
            // dd($follow_info);
            /*dd($update_content);
            dd(json_decode(collect($update_content)->toJson())); //json_decode将json再转回数组
            dd($changed_content);*/
        
            // 求购信息编辑信息
            $want->capacity              = $requestData->capacity;
            $want->gearbox               = $requestData->gearbox;
            // $want->out_color             = $requestData->out_color;
            // $want->inside_color          = $requestData->inside_color;
            // $want->sale_number           = $requestData->sale_number;
            // $want->mileage               = $requestData->mileage;
            $want->remark                = $requestData->remark;
            $want->xs_remark             = $requestData->xs_remark;
            $want->top_price             = $requestData->top_price;
            $want->bottom_price          = $requestData->bottom_price;
            $want->is_top                = $requestData->is_top;
            $want->recommend             = $requestData->recommend;
            $want->alternate_car         = $requestData->alternate_car;
            $want->alternate_car_another = $requestData->alternate_car_another;
            $want->creater_id     = Auth::id();
    
            // 求购信息跟进信息
            $follow_info->want_id       = $id;
            $follow_info->user_id      = Auth::id();
            $follow_info->follow_type  = '1';
            $follow_info->operate_type = '2';
            $follow_info->description  = collect($update_content)->toJson();
            $follow_info->prev_update  = $want->updated_at;
         
            $follow_info->save();
            $want->save(); 

            Session::flash('sucess', '修改求购信息成功');
            return $want;           
        });     
        // dd('sucess');
        // dd($Car->toJson());
        
    }

    // 删除求购信息
    public function destroy($id)
    {
        try {
            $Want = Want::findorFail($id);
            $Want->delete();
            Session::flash('sucess', '删除求购信息成功');
           
        } catch (\Illuminate\Database\QueryException $e) {
            Session()->flash('faill', '删除求购信息失败');
        }      
    }

    //判断车架号号是否被使用
    public function isRepeat($vin_code){

        return Want::select('id', 'name')
                       ->where('vin_code', $vin_code)
                       ->first();
    }

    //求购信息状态转换，暂时只有激活-废弃转换
    public function statusChange($requestData, $id){

        // dd($requestData->all());
        DB::transaction(function() use ($requestData, $id){

            $want         = Want::select($this->select_columns)->findorFail($id); //求购信息对象
            $follow_info = new WantFollow(); //求购信息跟进对象

            if($requestData->status == 1){

                $update_content = collect([Auth::user()->nick_name.'激活求购信息'])->toJson();
            }else{

                $update_content = collect([Auth::user()->nick_name.'废弃求购信息'])->toJson();
            }
            

            // 求购信息编辑信息
            $want->Want_status = $requestData->status;

            // 求购信息跟进信息
            $follow_info->want_id       = $id;
            $follow_info->user_id      = Auth::id();
            $follow_info->follow_type  = '1';
            $follow_info->operate_type = '2';
            $follow_info->description  = $update_content;
            $follow_info->prev_update  = $want->updated_at;
         
            $follow_info->save();
            $want->save(); 

            return $want;
        });
    }

    public function quicklyFollow($id){

        DB::transaction(function() use ($id){

            $want         = Want::select($this->select_columns)->findorFail($id); //求购信息对象
            $follow_info = new WantFollow(); //求购信息跟进对象

            $update_content = collect(['例行跟进'])->toJson();
            
            // 求购信息编辑信息
            $want->creater_id  = Auth::id();
            $want->want_status = '1';

            // 求购信息跟进信息
            $follow_info->want_id       = $id;
            $follow_info->user_id      = Auth::id();
            $follow_info->follow_type  = '1';
            $follow_info->operate_type = '2';
            $follow_info->description  = collect($update_content)->toJson();
            $follow_info->prev_update  = $want->updated_at;
         
            $follow_info->save();
            $want->save();
            $want->touch();

            return $want;
        });
    }

    // 互动信息添加
     public function interactiveAdd($requestData){

        DB::transaction(function() use ($requestData){

            $want         = Want::select($this->select_columns)->findorFail($requestData->want_id); //求购信息对象
            $follow_info = new WantFollow(); //求购信息跟进对象

            $update_content = collect([$requestData->content])->toJson();
            
            // 求购信息编辑信息
            /*$want->creater_id = Auth::id();
            $want->want_status = '1';*/

            // 求购信息跟进信息
            $follow_info->want_id      = $requestData->want_id;
            $follow_info->user_id      = Auth::id();
            $follow_info->follow_type  = '2';
            $follow_info->operate_type = '2';
            $follow_info->description  = $update_content;
            $follow_info->prev_update  = $want->updated_at;
         
            $follow_info->save();
            $want->save();
            $want->touch();

            return $want;
        });
    }
}
