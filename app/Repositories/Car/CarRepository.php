<?php
namespace App\Repositories\Car;

use App\Cars;
use App\CarFollow;
use App\Area;
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
    protected $select_columns = ['id', 'name', 'car_code', 'vin_code', 'capacity', 'top_price', 'plate_date', 'plate_end', 'mileage', 'age', 'out_color', 'inside_color', 'gearbox', 'plate_provence', 'plate_city', 'safe_end', 'sale_number', 'categorey_type', 'shop_id', 'creater_id', 'created_at', 'updated_at', 'description', 'bottom_price', 'safe_type','recommend', 'is_top', 'car_type', 'car_status', 'customer_id', 'guide_price', 'pg_description','xs_description', 'cate_id', 'appraiser_price', 'is_show', 'is_appraiser', 'appraiser_at'];

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
        'xs_description' => '销售描述',
        'appraiser_price'=> '评估价',
    ];

    // 根据ID获得车源信息
    public function find($id)
    {
        return Cars::select($this->select_columns)
                   ->findOrFail($id);
    }

    //全部车源数量
    public function getAllCarsNum(){
        $query = new Cars(); 

        return $query->select($this->select_columns)
                     ->where('name', '!=', '')
                     ->where('creater_id', '!=', '1')
                     ->count();
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
        // $query = $query->where('is_show', '1');
        // $query = $query->orWhere('car_status', '6');
        // $query = $query->where('car_status', $request->input('car_status', '1'));

        if($request->has('home')){

            return $query->select($this->select_columns)
                     ->orderBy('created_at', 'desc')
                     ->paginate(20);
        }
        return $query->select($this->select_columns)
                     ->orderBy('created_at', 'desc')
                     ->paginate(10);
    }

    // 前端显示车源列表
    public function getAllCarsWithBefore($condition){   

        // dd($condition);
        // $query = Cars::query();  // 返回的是一个 QueryBuilder 实例
        $query = new Cars();       // 返回的是一个Cars实例,两种方法均可

        //品牌筛选
        if(!empty($condition['brand_id'])){
            $query = $query->where('brand_id', $condition['brand_id']);
        }
        //颜色筛选
        if(!empty($condition['color'])){
            $query = $query->where('out_color', $condition['color']);
        }
        //颜色筛选
        if(!empty($condition['gearbox'])){
            $query = $query->where('gearbox', $condition['gearbox']);
        }
        //车型类别筛选
        if(!empty($condition['category_type'])){
            $query = $query->where('categorey_type', $condition['category_type']);
        }
        //价格筛选
        if(!empty($condition['price']) && $condition['price'] > 1){
            
            //p($price_begin);
            //dd($price_end);
            $query = $query->where(function($query) use ($condition){

                $price_begin_end = config('tcl.price_begin_end'); //获取配置文件中价格区间起始
                $price_begin = $price_begin_end[$condition['price']]['begin'];
                $price_end   = $price_begin_end[$condition['price']]['end'];

                if(!empty($price_end)){
                    $query = $query->where('top_price', '<=', $price_end);
                }

                if(!empty($price_begin)){
                    $query = $query->where('top_price', '>', $price_begin);
                }               
            });

            //dd($query);
        }
        //车龄筛选
        if(!empty($condition['age'])&& $condition['age'] > 1){

            $query = $query->where(function($query) use ($condition){

                $age_begin_end  = config('tcl.age_begin_end'); //获取配置文件中车龄区间起始
                $age_begin      = $age_begin_end[$condition['age']]['begin'];
                $age_end        = $age_begin_end[$condition['age']]['end'];

                if(!empty($age_end)){
                    $query = $query->where('age', '<=', $age_end);
                }

                if(!empty($age_begin)){
                    $query = $query->where('age', '>', $age_begin);
                } 
            });
        }
        //车系筛选
        if(!empty($condition['category_id'])){
            $query = $query->where('category_id', $condition['category_id']);
        }
        //门店筛选
        if(!empty($condition['shop_id'])){
            // dd('have');
            // $query = $query->where('shop_id', $condition['shop_id']);
            $query = $query->where(function($query) use ($condition){
                $query = $query->where('shop_id', $condition['shop_id']);
                if(isset($condition['shop_list'])){
                    $query = $query->orWhereIn('shop_id', $condition['shop_list']);
                }
                
            });
        }else{
            // dd('nothave');
            $query = $query->where(function($query) use ($condition){

                $query = $query->whereIn('shop_id', $condition['shop_list']);
                $query = $query->orWhere('plate_city', $condition['plate_city']);
            });
        }
        // dd($query);
        $query = $query->where(function($query) use ($condition){

                $query = $query->where('car_status', '1');
                $query = $query->orWhere('car_status', '6');
            });

        $query = $query->where('is_show', '1');

        return $query->select($this->select_columns)
                     ->orderBy('updated_at', 'desc')
                     ->paginate(20);
    }

    // 前端显示车源列表(移动端)
    public function getAllCarsWithBeforeMobel($condition){   

        // dd($condition);
        // $query = Cars::query();  // 返回的是一个 QueryBuilder 实例
        $query = new Cars();       // 返回的是一个Cars实例,两种方法均可

        //品牌筛选
        if(!empty($condition['brand_id'])){
            $query = $query->where('brand_id', $condition['brand_id']);
        }
        //车型类别筛选
        if(!empty($condition['category_type'])){
            $query = $query->where('categorey_type', $condition['category_type']);
        }
        //价格筛选
        if(!empty($condition['price']) && $condition['price'] > 1){
            
            //p($price_begin);
            //dd($price_end);
            $query = $query->where(function($query) use ($condition){

                $price_begin_end = config('tcl.price_begin_end'); //获取配置文件中价格区间起始
                $price_begin = $price_begin_end[$condition['price']]['begin'];
                $price_end   = $price_begin_end[$condition['price']]['end'];

                if(!empty($price_end)){
                    $query = $query->where('top_price', '<=', $price_end);
                }

                if(!empty($price_begin)){
                    $query = $query->where('top_price', '>', $price_begin);
                }               
            });

            //dd($query);
        }
        //车龄筛选
        if(!empty($condition['age'])&& $condition['age'] > 1){

            $query = $query->where(function($query) use ($condition){

                $age_begin_end  = config('tcl.age_begin_end'); //获取配置文件中车龄区间起始
                $age_begin      = $age_begin_end[$condition['age']]['begin'];
                $age_end        = $age_begin_end[$condition['age']]['end'];

                if(!empty($age_end)){
                    $query = $query->where('age', '<=', $age_end);
                }

                if(!empty($age_begin)){
                    $query = $query->where('age', '>', $age_begin);
                } 
            });
        }
        //车系筛选
        if(!empty($condition['category_id'])){
            $query = $query->where('category_id', $condition['category_id']);
        }
        //变速箱筛选
        if(!empty($condition['gearbox'])){
            $query = $query->where('gearbox', $condition['gearbox']);
        }
        //颜色筛选
        if(!empty($condition['color'])){
            $query = $query->where('out_color', $condition['color']);
        }
        //门店筛选
        if(!empty($condition['shop_id'])){
            
            $query = $query->where('shop_id', $condition['shop_id']);
        }else{
            $query = $query->whereIn('shop_id', $condition['shop_list']);
        }
        // dd($query);
        $query = $query->where(function($query) use ($condition){

                $query = $query->where('car_status', '1');
                $query = $query->orWhere('car_status', '6');
            });

        $query = $query->where('is_show', '1');

        return $query->select($this->select_columns)
                     ->orderBy('updated_at', 'desc')
                     ->simplePaginate(20);
    }

    //获得推荐车源
    public function getRecommendCars($price){

        // dd($price);
        $query = new Cars();
        $query = $query->where('name', '!=', '');
        $query = $query->where('car_status', '1');
        $query = $query->where('is_show', '1');
        $query = $query->where('top_price', '<=', ($price*1.2));
        $query = $query->where('top_price', '>=', ($price*0.8));

        return $query->select($this->select_columns)
                     ->orderBy('updated_at', 'desc')
                     ->limit(4)
                     ->get();
    }

    // 创建车源
    public function create($requestData)
    {   
        if(!empty($requestData->vin_code) && $this->isRepeat($requestData->vin_code)){
            //存在车架号并且存在该车架号记录

            $car = $this->isRepeat($requestData->vin_code);
            // dd(lastSql());
            $car->isRepeat = true;
            return $car;
        }else{
            $car_obj = (object) '';
            DB::transaction(function() use ($requestData, $car_obj){
                // 添加车源并返回实例,处理跟进(添加车源)
                $requestData['creater_id']      = Auth::id();
                $requestData['car_code']        = getCarCode('car');
                $requestData['age']             = getCarAge($requestData->plate_date);
                $requestData['categorey_type']  = $requestData['category_type'];

                //dd($requestData->all());
                /*dd(Carbon::parse($requestData->plate_date));
                dd(Carbon::now());*/

                //unset($requestData['_token']);
                //unset($requestData['ajax_request_url']);

                $car = new Cars();
                $input =  array_replace($requestData->all());
                $car->fill($input);
                $car = $car->create($input);

                $follow_info = new CarFollow(); //车源跟进对象

                $create_content = collect(['创建车源'])->toJson();  //定义车源跟进时信息变化情况,即跟进描述

                // 车源跟进信息
                $follow_info->car_id       = $car->id;
                $follow_info->user_id      = Auth::id();
                $follow_info->follow_type  = '1';
                $follow_info->operate_type = '1';
                $follow_info->description  = $create_content;
                $follow_info->prev_update  = $car->updated_at;
            
                $follow_info->save();

                $car_obj->scalar = $car;
                // dd($car_obj);
                // return $car_obj;
            });
            return $car_obj;
        }         
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
            
            /*$collection1 = collect(['type'=>2, 'type1'=>7, 'type2'=>3]);
            $collection2 = collect(['type'=>0, 'type5'=>2, 'type2'=>3]);

            $diff = $collection2->diffKeys($collection1);
            // $diff = array_udiff($collection1, $collection2);

            dd($diff);
            p($original_content);
            p($request_content);*/

            $changed_content = getDiffArray($request_content, $original_content);//比较提交的数据与原数据差别
            $update_content = '例行跟进';  //定义车源跟进时信息变化情况,即跟进描述
            // dd(json_decode($update_content));
            // dd($changed_content);
            if($changed_content->count() != 0){
                $update_content = array();
                $need_del_array = ['capacity', 'gearbox','out_color','inside_color','safe_type','sale_number','is_top','recommend', 'car_type'];
                foreach ($changed_content as $key => $value) {
                    /*p($this->columns_annotate[$key]);
                    p($requestData->$key);
                    p($original_content[$key]);*/
                    if(in_array($key, $need_del_array)){
                        /*p($original_content[$key]);
                        p($key);
                        p($value);
                        p(config('tcl.'.$key)[$value]);exit;*/
                        $current_content = config('tcl.'.$key)[$original_content[$key]];
                        $updated_content = config('tcl.'.$key)[$value];
                        $update_content[] = $this->columns_annotate[$key].'['.$current_content.']修改为['.$updated_content.']';
                    }elseif($key == 'plate_provence'){
                        
                        $area_before = Area::withTrashed()->findorFail($car->plate_provence);
                        $area_after = Area::withTrashed()->findorFail($requestData->plate_provence);

                        $update_content[] = $this->columns_annotate[$key].'['.$area_before->name.']修改为['.$area_after->name.']';                      
                     }elseif($key == 'plate_city'){
                        
                        $city_before = Area::withTrashed()->findorFail($car->plate_city);
                        $city_after = Area::withTrashed()->findorFail($requestData->plate_city);

                        $update_content[] = $this->columns_annotate[$key].'['.$city_before->name.']修改为['.$city_after->name.']';
                    }else{
                        $update_content[] = $this->columns_annotate[$key].'['.$original_content[$key].']修改为['.$requestData->$key.']';
                    }
                }
            }

        
            // dd($follow_info);
            // dd(collect($update_content)->toJson());
            // dd(json_decode(collect($update_content)->toJson())); //json_decode将json再转回数组
            // dd($changed_content);
        
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
            $car->xs_description = $requestData->xs_description;
            $car->top_price      = $requestData->top_price;
            $car->bottom_price   = $requestData->bottom_price;
            $car->pg_description = $requestData->pg_description;
            $car->guide_price    = $requestData->guide_price;
            $car->is_top         = $requestData->is_top;
            $car->recommend      = $requestData->recommend;
            // $car->creater_id     = Auth::id();
    
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

    // 评估师评估
    public function updateByAppraiser($requestData, $id)
    {
        // dd($requestData->all());
        DB::transaction(function() use ($requestData, $id){

            $car         = Cars::select($this->select_columns)->findorFail($id); //车源对象
            $follow_info = new CarFollow(); //车源跟进对象

            $original_content = $car->toArray(); //原有车源信息
            $request_content  = $requestData->all(); //提交的车源信息
            
            /*$collection1 = collect(['type'=>2, 'type1'=>7, 'type2'=>3]);
            $collection2 = collect(['type'=>0, 'type5'=>2, 'type2'=>3]);

            $diff = $collection2->diffKeys($collection1);
            // $diff = array_udiff($collection1, $collection2);

            dd($diff);
            p($original_content);
            p($request_content);*/

            $changed_content = getDiffArray($request_content, $original_content);//比较提交的数据与原数据差别
            $update_content = '例行跟进';  //定义车源跟进时信息变化情况,即跟进描述
            // dd(json_decode($update_content));
            // dd($changed_content);
            if($changed_content->count() != 0){
                $update_content = array();
                $need_del_array = ['capacity', 'gearbox','out_color','inside_color','safe_type','sale_number','is_top','recommend', 'car_type'];
                foreach ($changed_content as $key => $value) {
                    /*p($this->columns_annotate[$key]);
                    p($requestData->$key);
                    p($original_content[$key]);*/
                    if(in_array($key, $need_del_array)){
                        /*p($original_content[$key]);
                        p($key);
                        p($value);
                        p(config('tcl.'.$key)[$value]);exit;*/
                        $current_content = config('tcl.'.$key)[$original_content[$key]];
                        $updated_content = config('tcl.'.$key)[$value];
                        $update_content[] = $this->columns_annotate[$key].'['.$current_content.']修改为['.$updated_content.']';
                    }elseif($key == 'plate_provence'){
                        
                        $area_before = Area::withTrashed()->findorFail($car->plate_provence);
                        $area_after = Area::withTrashed()->findorFail($requestData->plate_provence);

                        $update_content[] = $this->columns_annotate[$key].'['.$area_before->name.']修改为['.$area_after->name.']';                      
                     }elseif($key == 'plate_city'){
                        
                        $city_before = Area::withTrashed()->findorFail($car->plate_city);
                        $city_after = Area::withTrashed()->findorFail($requestData->plate_city);

                        $update_content[] = $this->columns_annotate[$key].'['.$city_before->name.']修改为['.$city_after->name.']';
                    }else{
                        $update_content[] = $this->columns_annotate[$key].'['.$original_content[$key].']修改为['.$requestData->$key.']';
                    }
                }
            }

        
            // dd($follow_info);
            // dd(collect($update_content)->toJson());
            // dd(json_decode(collect($update_content)->toJson())); //json_decode将json再转回数组
            // dd($changed_content);
        
            // 评估信息
            $car->appraiser_price = $requestData->appraiser_price;
            $car->guide_price     = $requestData->guide_price;
            $car->pg_description  = $requestData->pg_description;
            $car->is_appraiser    = '1';
            $car->appraiser_at    = Carbon::now()->toDateString();
            
            // dd(Carbon::now()->toDateString());
            // 车源跟进信息
            $follow_info->car_id       = $id;
            $follow_info->user_id      = Auth::id();
            $follow_info->follow_type  = '1';
            $follow_info->operate_type = '2';
            $follow_info->description  = collect($update_content)->toJson();
            $follow_info->prev_update  = $car->updated_at;

            // dd($car);
         
            $follow_info->save();
            $car->save(); 

            Session::flash('sucess', '评估成功');
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

        $car = Cars::select('id', 'name')
                          ->where('vin_code', $vin_code)
                          ->whereIn('car_status', ['1', '2', '3', '4', '6'])
                          ->first();

        // dd($car);
        return $car;
    }

    //判断车架号号使用次数
    public function repeatCarNum($vin_code){

        $car = Cars::select('id', 'name')
                          ->where('vin_code', $vin_code)
                          ->whereIn('car_status', ['1', '2', '3', '4', '6'])
                          ->count();

        // dd($car);
        return $car;
    }

    //车源状态转换，暂时只有激活-废弃转换
    public function statusChange($requestData, $id){

        // dd($requestData->all());
        DB::transaction(function() use ($requestData, $id){

            $car         = Cars::select($this->select_columns)->findorFail($id); //车源对象
            $follow_info = new CarFollow(); //车源跟进对象

            if($requestData->status == 0){
                
                // dd('not have sb');
                $update_content = collect([Auth::user()->nick_name.'激活车源'])->toJson();
                $car->car_status = '1';
            }else{

                $update_content = collect([Auth::user()->nick_name.'废弃车源'])->toJson();
                $car->car_status = '0';
            }          

            // 车源跟进信息
            $follow_info->car_id       = $id;
            $follow_info->user_id      = Auth::id();
            $follow_info->follow_type  = '1';
            $follow_info->operate_type = '2';
            $follow_info->description  = $update_content;
            $follow_info->prev_update  = $car->updated_at;
         
            $follow_info->save();
            $car->save(); 

            return $car;
        });
    }

    // 快速跟进
    public function quicklyFollow($id){

        DB::transaction(function() use ($id){

            $car         = Cars::select($this->select_columns)->findorFail($id); //车源对象
            $follow_info = new CarFollow(); //车源跟进对象

            $update_content = collect(['例行跟进'])->toJson();
            
            // 车源编辑信息
            // $car->creater_id = Auth::id();
            $car->car_status = '1';

            // 车源跟进信息
            $follow_info->car_id       = $id;
            $follow_info->user_id      = Auth::id();
            $follow_info->follow_type  = '1';
            $follow_info->operate_type = '2';
            $follow_info->description  = $update_content;
            $follow_info->prev_update  = $car->updated_at;
         
            $follow_info->save();
            $car->save();
            $car->touch();

            return $car;
        });
    }

    // 互动信息添加
     public function interactiveAdd($requestData){

        DB::transaction(function() use ($requestData){

            $car         = Cars::select($this->select_columns)->findorFail($requestData->car_id); //车源对象
            $follow_info = new CarFollow(); //车源跟进对象

            $update_content = collect([$requestData->content])->toJson();
            
            // 车源编辑信息
            /*$car->creater_id = Auth::id();
            $car->car_status = '1';*/

            // 车源跟进信息
            $follow_info->car_id       = $requestData->car_id;
            $follow_info->user_id      = Auth::id();
            $follow_info->follow_type  = '2';
            $follow_info->operate_type = '2';
            $follow_info->description  = $update_content;
            $follow_info->prev_update  = $car->updated_at;
         
            $follow_info->save();
            $car->save();
            $car->touch();

            return $car;
        });
    }

    //判断车源是否属于自己
    public function is_self_car($car_id){

        $car = $this->find($car_id);

        // dd($car);

        return $car->creater_id == Auth::id();
    }

    //获得客户名下车源信息
    public function getListByCustomerId($customer_id){      

        $car = Cars::select($this->select_columns)
                          ->where('customer_id', $customer_id)
                          ->paginate(5);

        // dd($car);

        return $car;

    }
}
