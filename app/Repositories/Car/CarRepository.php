<?php
namespace App\Repositories\Car;

use App\Cars;
use App\CarFollow;
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

class CarRepository implements CarRepositoryContract
{
    //默认查询数据
    protected $select_columns = ['id', 'name', 'car_code', 'vin_code', 'capacity', 'top_price', 'plate_date', 'plate_end', 'mileage', 'out_color', 'inside_color', 'gearbox', 'plate_provence', 'plate_city', 'safe_end', 'sale_number', 'shop_id', 'creater_id', 'created_at', 'updated_at', 'description', 'bottom_price', 'safe_type', 'safe_end', 'recommend', 'is_top', 'car_type', 'car_status', 'customer_id', 'guide_price', 'pg_description'];

    // 车源表列名称-注释对应
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
        'car_status'     => '车源状态',
        'is_top'         => '是否置顶推荐',
        'recommend'      => '是否推荐车源',
        'car_type'       => '车源类别',
    ];

    // 根据ID获得车源信息
    public function find($id)
    {
        return Cars::select($this->select_columns)
                   ->findOrFail($id);
    }

    // 根据不同参数获得车源列表
    public function getAllcars($request, $is_self = false)
    {   
        // dd($request->all());
        // $query = Cars::query();  // 返回的是一个 QueryBuilder 实例
        $query = new Cars();       // 返回的是一个Cars实例,两种方法均可

        $query = $query->addCondition($request->all(), $is_self); //根据条件组合语句

        if($request->has('os_recommend') && $request->os_recommend == 'yes'){
            //系统推荐信息scope添加
            // $query = $query->osRecommend($request->all());
        }       
        // dd($query);
        $query = $query->where('name', '!=', '');
        // $query = $query->where('car_status', $request->input('car_status', '1'));

        return $query->select($this->select_columns)
                     ->orderBy('created_at', 'desc')
                     ->paginate(10);
    }

    // 创建车源
    public function create($requestData)
    {   
        if(!empty($requestData->vin_code) && $this->isRepeat($requestData->vin_code)){
            //存在车架号并且存在该车架号记录
            $car = $this->isRepeat($requestData->vin_code);
        }else{
            // 添加车源并返回实例
            $requestData['creater_id'] = Auth::id();
            $requestData['car_code']   = getCarCode();

            unset($requestData['_token']);
            unset($requestData['ajax_request_url']);

            $car = new Cars();
            $input =  array_replace($requestData->all());
            $car->fill($input);

            $car = $car->create($input);
        }        

        return $car;
    }

    // 修改车源
    public function update($requestData, $id)
    {
        // dd($requestData->all());
        DB::transaction(function() use ($requestData, $id){

            $car         = Cars::select($this->select_columns)->findorFail($id); //车源对象
            $follow_info = new CarFollow(); //车源跟进对象

            $original_content = $car->toArray(); //原有车源信息
            $request_content  = $requestData->all(); //提交的车源信息
        
            /*p($original_content);
            p($request_content);*/
            $changed_content = getDiffArray($request_content, $original_content);//比较提交的数据与原数据差别
            $update_content = collect(['例行跟进'])->toJson();  //定义车源跟进时信息变化情况,即跟进描述
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
        
            // 车源编辑信息
            $car->vin_code       = $requestData->vin_code;
            $car->capacity       = $requestData->capacity;
            $car->gearbox        = $requestData->gearbox;
            $car->out_color      = $requestData->out_color;
            $car->inside_color   = $requestData->inside_color;
            $car->plate_date     = $requestData->plate_date;
            $car->plate_end      = $requestData->plate_end;
            $car->sale_number    = $requestData->sale_number;
            $car->safe_type      = $requestData->safe_type;
            $car->safe_end       = $requestData->safe_end;
            $car->mileage        = $requestData->mileage;
            $car->description    = $requestData->description;
            $car->top_price      = $requestData->top_price;
            $car->bottom_price   = $requestData->bottom_price;
            $car->pg_description = $requestData->pg_description;
            $car->guide_price    = $requestData->guide_price;
            $car->is_top         = $requestData->is_top;
            $car->recommend      = $requestData->recommend;
            $car->creater_id     = Auth::id();
    
            // 车源跟进信息
            $follow_info->car_id       = $id;
            $follow_info->user_id      = Auth::id();
            $follow_info->follow_type  = '1';
            $follow_info->operate_type = '2';
            $follow_info->description  = collect($update_content)->toJson();
            $follow_info->prev_update  = $car->updated_at;
         
            $follow_info->save();
            $car->save(); 

            Session::flash('sucess', '修改车源成功');
            return $car;           
        });     
        // dd('sucess');
        // dd($Car->toJson());
        
    }

    // 删除车源
    public function destroy($id)
    {
        try {
            $car = Cars::findorFail($id);
            $car->delete();
            Session::flash('sucess', '删除车源成功');
           
        } catch (\Illuminate\Database\QueryException $e) {
            Session()->flash('faill', '删除车源失败');
        }      
    }

    //判断车架号号是否被使用
    public function isRepeat($vin_code){

        return Car::select('id', 'name')
                       ->where('vin_code', $vin_code)
                       ->first();
    }

    //车源状态转换，暂时只有激活-废弃转换
    public function statusChange($requestData, $id){

        // dd($requestData->all());
        DB::transaction(function() use ($requestData, $id){

            $car         = Cars::select($this->select_columns)->findorFail($id); //车源对象
            $follow_info = new CarFollow(); //车源跟进对象

            if($requestData->status == 1){

                $update_content = collect([Auth::user()->nick_name.'激活车源'])->toJson();
            }else{

                $update_content = collect([Auth::user()->nick_name.'废弃车源'])->toJson();
            }
            

            // 车源编辑信息
            $car->car_status = $requestData->status;

            // 车源跟进信息
            $follow_info->car_id       = $id;
            $follow_info->user_id      = Auth::id();
            $follow_info->follow_type  = '1';
            $follow_info->operate_type = '2';
            $follow_info->description  = collect($update_content)->toJson();
            $follow_info->prev_update  = $car->updated_at;
         
            $follow_info->save();
            $car->save(); 

            return $car;
        });
    }

    public function quicklyFollow($id){

        DB::transaction(function() use ($id){

            $car         = Cars::select($this->select_columns)->findorFail($id); //车源对象
            $follow_info = new CarFollow(); //车源跟进对象

            $update_content = collect([Auth::user()->nick_name.'例行跟进'])->toJson();
            
            // 车源编辑信息
            $car->creater_id = Auth::id();
            $car->car_status = '1';

            // 车源跟进信息
            $follow_info->car_id       = $id;
            $follow_info->user_id      = Auth::id();
            $follow_info->follow_type  = '1';
            $follow_info->operate_type = '2';
            $follow_info->description  = collect($update_content)->toJson();
            $follow_info->prev_update  = $car->updated_at;
         
            $follow_info->save();
            $car->save();
            $car->touch();

            return $car;
        });
    }
}
