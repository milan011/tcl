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
    protected $select_columns = ['id', 'want_code', 'name', 'want_type', 'brand_id', 'categorey_id', 'car_factory', 'cate_id', 'capacity', 'gearbox', 'bottom_price', 'top_price', 'age', 'mileage', 'out_color', 'inside_color', 'customer_id', 'creater_id', 'want_area', 'remark', 'want_status', 'shop_id', 'created_at'];

    // 求购信息表列名称-注释对应
    protected $columns_annotate = [

        'vin_code'       => '车架号',
        'capacity'       => '排量',
        'gearbox'        => '变速箱',
        'out_color'      => '外观颜色',
        'inside_color'   => '内饰颜色',
        'plate_date'     => '上牌日期',
        'plate_end'      => '到检日期',
        'plate_provence' => '上牌省份',
        'plate_city'     => '上牌城市',
        'age'            => '车龄',
        'safe_type'      => '保险类别',
        'safe_end'       => '到保日期',
        'sale_number'    => '过户次数',
        'mileage'        => '行驶里程',
        'description'    => '车况',
        'pg_description' => '评估师描述',
        'top_price'      => '期望价格',
        'bottom_price'   => '底价',
        'guide_price'    => '指导价',
        'car_status'     => '求购信息状态',
        'is_top'         => '是否置顶推荐',
        'recommend'      => '是否推荐求购信息',
        'car_type'       => '求购信息类别',
    ];

    // 根据ID获得求购信息信息
    public function find($id)
    {
        return Want::select($this->select_columns)
                   ->findOrFail($id);
    }

    // 根据不同参数获得求购信息列表
    public function getAllWants($request)
    {   
        // dd($request->all());
        // $query = Cars::query();  // 返回的是一个 QueryBuilder 实例
        $query = new Want();       // 返回的是一个Cars实例,两种方法均可
        // dd($query);
        $query = $query->addCondition($request->all()); //根据条件组合语句

        // dd($query);
        // $query = $query->where('car_status', $request->input('car_status', '1'));

        return $query->select($this->select_columns)
                   ->paginate(10);
    }

    // 创建求购信息
    public function create($requestData)
    {   
        // 添加求购信息并返回实例
        $requestData['creater_id'] = Auth::id();
        $requestData['want_code']  = getCarCode('want');
        
        if(empty($requestData->name)){
            $requestData['name'] = '无具体意向车型';
        }

        $want = new Want;
        $input  =  array_replace($requestData->all());
        $want->fill($input);
        // dd($want);
        $want = $want->create($input);    

        return $want;
    }

    // 修改求购信息
    public function update($requestData, $id)
    {
        // dd($requestData->all());
        DB::transaction(function() use ($requestData, $id){

            $Want         = Want::select($this->select_columns)->findorFail($id); //求购信息对象
            $follow_info = new CarFollow(); //求购信息跟进对象

            $original_content = $Want->toArray(); //原有求购信息信息
            $request_content  = $requestData->all(); //提交的求购信息信息
        
            /*p($original_content);
            p($request_content);*/
            $changed_content = getDiffArray($request_content, $original_content);//比较提交的数据与原数据差别
            $update_content = collect(['例行跟进'])->toJson();  //定义求购信息跟进时信息变化情况,即跟进描述
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
        
            // 求购信息编辑信息
            $Want->vin_code       = $requestData->vin_code;
            $Want->capacity       = $requestData->capacity;
            $Want->gearbox        = $requestData->gearbox;
            $Want->out_color      = $requestData->out_color;
            $Want->inside_color   = $requestData->inside_color;
            $Want->plate_date     = $requestData->plate_date;
            $Want->plate_end      = $requestData->plate_end;
            $Want->sale_number    = $requestData->sale_number;
            $Want->safe_type      = $requestData->safe_type;
            $Want->safe_end       = $requestData->safe_end;
            $Want->mileage        = $requestData->mileage;
            $Want->description    = $requestData->description;
            $Want->top_price      = $requestData->top_price;
            $Want->bottom_price   = $requestData->bottom_price;
            $Want->pg_description = $requestData->pg_description;
            $Want->guide_price    = $requestData->guide_price;
            $Want->creater_id     = Auth::id();
    
            // 求购信息跟进信息
            $follow_info->car_id       = $id;
            $follow_info->user_id      = Auth::id();
            $follow_info->follow_type  = '1';
            $follow_info->operate_type = '2';
            $follow_info->description  = collect($update_content)->toJson();
            $follow_info->prev_update  = $car->updated_at;
         
            $follow_info->save();
            $Want->save(); 

            Session::flash('sucess', '修改求购信息成功');
            return $Want;           
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

            $Want         = Want::select($this->select_columns)->findorFail($id); //求购信息对象
            $follow_info = new CarFollow(); //求购信息跟进对象

            if($requestData->status == 1){

                $update_content = collect([Auth::user()->nick_name.'激活求购信息'])->toJson();
            }else{

                $update_content = collect([Auth::user()->nick_name.'废弃求购信息'])->toJson();
            }
            

            // 求购信息编辑信息
            $Want->Want_status = $requestData->status;

            // 求购信息跟进信息
            $follow_info->car_id       = $id;
            $follow_info->user_id      = Auth::id();
            $follow_info->follow_type  = '1';
            $follow_info->operate_type = '2';
            $follow_info->description  = collect($update_content)->toJson();
            $follow_info->prev_update  = $Want->updated_at;
         
            $follow_info->save();
            $Want->save(); 

            return $Want;
        });
    }

    public function quicklyFollow($id){

        DB::transaction(function() use ($id){

            $Want         = Cars::select($this->select_columns)->findorFail($id); //求购信息对象
            $follow_info = new CarFollow(); //求购信息跟进对象

            $update_content = collect([Auth::user()->nick_name.'例行跟进'])->toJson();
            
            // 求购信息编辑信息
            $Want->creater_id = Auth::id();
            $Want->car_status = '1';

            // 求购信息跟进信息
            $follow_info->car_id       = $id;
            $follow_info->user_id      = Auth::id();
            $follow_info->follow_type  = '1';
            $follow_info->operate_type = '2';
            $follow_info->description  = collect($update_content)->toJson();
            $follow_info->prev_update  = $Want->updated_at;
         
            $follow_info->save();
            $Want->save();
            $Want->touch();

            return $Want;
        });
    }
}
