<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Auth;
use Gate;
use DB;
use Carbon;
use App\Area;
use App\Image;
use App\Cars;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Repositories\Brand\BrandRepositoryContract;
use App\Repositories\Car\CarRepositoryContract;
use App\Repositories\Shop\ShopRepositoryContract;
use App\Http\Requests\Cars\UpdateCarsRequest;
use App\Http\Requests\Cars\StoreCarsRequest;

class CarController extends Controller
{   
    protected $car;
    protected $brands;
    protected $shop;

    public function __construct(

        CarRepositoryContract $car,
        BrandRepositoryContract $brands,
        ShopRepositoryContract $shop
    ) {
    
        $this->car = $car;
        $this->brands = $brands;
        $this->shop = $shop;


        // $this->middleware('brand.create', ['only' => ['create']]);
    }

    /**
     * Display a listing of the resource.
     * 所有车源列表
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // dd($request->method());
        $all_top_brands = $this->brands->getChildBrand(0);
        $request['car_status'] = '1';
        $request['is_show']    = '1';
        $select_conditions  = $request->all();
        // dd($select_conditions);
        $cars = $this->car->getAllcars($request);
        // dd(lastSql());
        $shops = $this->shop->getShopsInProvence('10');

        // dd($shops);
        // dd(lastSql());
        // dd($cars);
        /*foreach ($cars as $key => $value) {
            p($value->id);
            p($value->belongsToUser->nick_name);
        }
        exit;*/
        $car_status_current = '1';
        
        return view('admin.car.index', compact('cars','car_status_current', 'all_top_brands', 'select_conditions','shops'));
    }

    /**
     * Display a listing of the resource.
     * 我的车源列表
     * @return \Illuminate\Http\Response
     */
    public function carself(Request $request)
    {
        
        // dd($request->all());
        if($request->method() == 'POST'){
            //初始搜索条件
            $select_conditions  = $request->all();
            $select_conditions['is_show'] = '1';
            $request['is_show'] = '1';
        }else{
            $select_conditions['car_status'] = '1';
            $request['car_status'] = '1';
            $select_conditions['is_show'] = '1';
            $request['is_show'] = '1';
        }

        $all_top_brands = $this->brands->getChildBrand(0);
        $cars = $this->car->getAllcars($request, true);
        
        // dd($select_conditions['car_status']);

        return view('admin.car.self', compact('cars', 'select_conditions','all_top_brands'));
    }

    /**
     * Display a listing of the resource.
     * 未登记车源列表
     * @return \Illuminate\Http\Response
     */
    public function showHidden(Request $request)
    {
        
        // dd($request->all());
 
        if($request->method() == 'POST'){
            //初始搜索条件
            $select_conditions  = $request->all();
            $select_conditions['is_show'] = '0';
            $request['is_show'] = '0';
            // $request['car_status'] = '1';
        }else{
            $select_conditions['is_show'] = '0';
            $select_conditions['car_status'] = '1';
            $request['car_status'] = '1';
            $request['is_show'] = '0';
        }
        // dd($request->all());
        $all_top_brands = $this->brands->getChildBrand(0);
        $cars = $this->car->getAllcars($request, true);
        // dd(lastSql());
        /*dd($cars);
        dd($select_conditions['car_status']);*/

        return view('admin.car.showHidden', compact('cars', 'select_conditions','all_top_brands'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // dd(Auth::user());
        $car_code = getCarCode();
        $all_top_brands = $this->brands->getChildBrand(0);
        /*$year_type      = config('tcl.year_type'); //获取配置文件中所有车款年份
        $category_type  = config('tcl.category_type'); //获取配置文件中车型类别
        $gearbox        = config('tcl.gearbox'); //获取配置文件中车型类别
        $out_color      = config('tcl.out_color'); //获取配置文件中外观颜色
        $inside_color   = config('tcl.inside_color'); //获取配置文件中内饰颜色
        $sale_number    = config('tcl.sale_number'); //获取配置文件中过户次数
        $car_type       = config('tcl.car_type'); //获取配置文件车源类型
        $customer_res   = config('tcl.customer_res'); //获取配置文件客户来源
        $safe_type      = config('tcl.safe_type'); //获取配置文件保险类别
        $capacity       = config('tcl.capacity'); //获取配置文件排量*/
        $city_id        = $this->shop->find(Auth::user()->shop_id)->city_id; //车源所在城市
        $provence_id    = $this->shop->find(Auth::user()->shop_id)->provence_id; //车源所在省份

        $area = Area::withTrashed()
                    ->where('pid', '1')
                    ->where('status', '1')
                    ->get();

        // dd($city_id);
        return view('admin.car.create',compact(
            'all_top_brands',           
            'city_id',
            'provence_id',
            'area'
        ));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     * ajax存储车源
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function ajaxAdd(StoreCarsRequest $carRequest)
    {
        // dd($carRequest->all());
        $cars = $this->car->create($carRequest);
        /*p('hehe');
        dd($car);*/
        return response()->json($cars); 
    }

    /**
     * Store a newly created resource in storage.
     * ajax存储跟进信息(互动)
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function interactiveAdd(Request $request)
    {
        // p($request->all());exit;

        $this->car->interactiveAdd($request, $request->input('car_id'));

        return response()->json(array(
            'status'      => 1,
            'msg'         => '添加成功',
            'content'     => $request->input('content'),
            'follow_time' => date('Y-m-d, H:i:s', time()),
        )); 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cars = $this->car->find($id);

        $gearbox        = config('tcl.gearbox'); //获取配置文件中变速箱类别
        $out_color      = config('tcl.out_color'); //获取配置文件中外观颜色
        $capacity       = config('tcl.capacity'); //获取配置文件排量
        $category_type  = config('tcl.category_type'); //获取配置文件中车型类别

        // dd($cars->hasManyImages()->get());
        return view('admin.car.show', compact('cars', 'gearbox', 'out_color', 'capacity', 'category_type'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cars = $this->car->find($id);

        $area = Area::withTrashed()
                    ->where('pid', '1')
                    ->where('status', '1')
                    ->get();
        $citys = Area::withTrashed()
                     ->where('pid', $cars->plate_provence)
                     ->where('status', '1')
                    ->get();
        /*if (Gate::denies('update', $cars)) {
            //不允许编辑,基于Policy
            dd('no no');
        }*/

        foreach ($area as $key => $value) {
            if($cars->plate_provence == $value->id){
                $provence =  $value;
            }
        }

        foreach ($citys as $key => $value) {
            if($cars->plate_city == $value->id){
                $city =  $value;
            }
        }
        // dd($cars);
        // dd($area);
        // dd($city);
        return view('admin.car.edit', compact(
            'cars','provence','city','area'
        ));
    }

    /**
     * Show the form for editing the specified resource.
     * 图片编辑
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editImg($id)
    {
        $car =  $this->car->find($id);
        $imgs = $car->hasManyImages;

        /*$out_color      = config('tcl.out_color'); //获取配置文件中外观颜色
        $inside_color   = config('tcl.inside_color'); //获取配置文件中内饰颜色
        $sale_number    = config('tcl.sale_number'); //获取配置文件中过户次数
        $car_type       = config('tcl.car_type'); //获取配置文件车源类型
        $customer_res   = config('tcl.customer_res'); //获取配置文件客户来源
        $safe_type      = config('tcl.safe_type'); //获取配置文件保险类别
        $capacity       = config('tcl.capacity'); //获取配置文件排量*/
        
        /*if (Gate::denies('update', $cars)) {
            //不允许编辑,基于Policy
            dd('no no');
        }*/

        // dd($imgs);
        return view('admin.car.editImg', compact(
            'imgs','car'
        ));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCarsRequest $carRequest, $id)
    {
        // dd($carRequest->all());
        $this->car->update($carRequest, $id);
        return redirect()->route('admin.car.self')->withInput();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    /**
     * 修改车源状态
     * 暂时只有激活-废弃转换
     * @return \Illuminate\Http\Response
     */
    public function changeStatus(Request $request)
    {    
        /*if($request->ajax()){
            echo "zhen de shi AJAX";
        }*/
        /*p($request->input('id'));
        p($request->input('status'));
        p($request->method());exit;*/

        $car = $this->car->find($request->id);

        // $is_repeat = $this->car->isRepeat($car->vin_code);

        if($request->input('status') == '0'){
            //激活车源
            if($this->car->repeatCarNum($car->vin_code) > 0){

                $msg = '已存在该车架号,无法激活';
            }else{
                $this->car->statusChange($request, $request->input('id'));
                $msg = '车源已经激活';
            }
           
        }else{
            //废弃车源
            $this->car->statusChange($request, $request->input('id'));
            $msg = '车源已经废弃';

        }
        
        return response()->json(array(
            'status' => 1,
            'msg' => $msg,
        ));      
    }

    /**
     * 快速跟进，只修改跟进时间
     * @return \Illuminate\Http\Response
     */
    public function follwQuickly(Request $request)
    {    
        /*if($request->ajax()){
            echo "zhen de shi AJAX";
        }
        p($request->input('id'));
        p($request->input('status'));
        p($request->method());exit;*/

        /*$car = $this->car->find($request->id);

        $car->status = $request->input('status');

        $car->save();*/
        // p($request->id);exit;
        $this->car->quicklyFollow($request->input('id'));

        return response()->json(array(
            'status' => 1,
            'msg' => '跟进成功',
        ));      
    }

    /**
     * ajax获得车源信息
     * @return \Illuminate\Http\Response
     */
    public function getCarInfo(Request $request)
    {    
        $year_type      = config('tcl.year_type'); //获取配置文件中所有车款年份
        $category_type  = config('tcl.category_type'); //获取配置文件中车型类别
        $gearbox        = config('tcl.gearbox'); //获取配置文件中车型类别
        $out_color      = config('tcl.out_color'); //获取配置文件中外观颜色
        $inside_color   = config('tcl.inside_color'); //获取配置文件中内饰颜色
        $sale_number    = config('tcl.want_sale_number'); //获取配置文件中过户次数
        $customer_res   = config('tcl.customer_res'); //获取配置文件客户来源
        $safe_type      = config('tcl.safe_type'); //获取配置文件保险类别
        $capacity       = config('tcl.capacity'); //获取配置文件排量
        $mileage_config = config('tcl.mileage'); //获取配置文件中车源状态
        $car_age = config('tcl.age'); //获取配置文件中车源状态
       
        $car = $this->car->find($request->input('car_id'));
        // dd(substr((date($car->created_at)), 0, 10));
        $car->capacity = $capacity[$car->capacity];
        $car->car_type = $category_type[$car->car_type];
        $car->gearbox = $gearbox[$car->gearbox];
        $car->out_color = $out_color[$car->out_color];
        $car->sale_number = $car->sale_number;
        $car->inside_color = $inside_color[$car->inside_color];
        $car->safe_type = $safe_type[$car->safe_type];
        $car->customer = $car->belongsToCustomer->customer_name;
        $car->creater = $car->belongsToUser->nick_name;
        $car->creater_tel = $car->belongsToUser->creater_telephone;
        $car->shop_name = $car->belongsToShop->shop_name;
        if(Auth::id() == $car->creater_id){
            $car->customer_info = $car->belongsToCustomer->customer_name.'('.$car->belongsToCustomer->customer_telephone.')';
        }else{
            $car->customer_info = $car->belongsToCustomer->customer_name;
        }       
        $car->created = substr((date($car->created_at)), 0, 10);
        $car->want_price = $car->bottom_price.'-'.$car->top_price;
        $car->plate_city = $car->belongsToCity->city_name;

        if(Auth::id() == $car->creater_id || Auth::user()->isSuperAdmin()){
            $car->show_pg_info = true;
        }
        
        // dd($car->belongsToArea->city_name);
        return response()->json(array(
            'status' => 1,
            'msg' => 'ok',
            'data' => $car->toJson(),
        ));      
    }

    /**
     * ajax修改首图
     * @return \Illuminate\Http\Response
     */
    public function changeFristImg(Request $request){

        DB::transaction(function() use ($request){
            // dd($request->all());
            $img = Image::where('original_name', $request->img_name)
                        ->where('car_id',   $request->img_car_id)
                        ->orWhere('filename', $request->img_name)
                        ->first();
            /*dd(lastSql());
            dd($img);*/
            /*$car = Cars::where('id', $request->img_car_id)->first();
            $car->is_show = '1';
            $car->save();*/

            Cars::where('id', $request->img_car_id)->update(['is_show'=>'1']);

            // dd($car);
            $img->is_top = '1';
            $img->save();
            
            Image::where('car_id', $request->img_car_id)
                 ->where('id', '!=', $img->id)
                 ->update(['is_top' => '0']);
        // dd($img);      
        }); 

        return response()->json(array(
            'status' => 200,
            'msg' => '修改成功',
        ));       
    }

    //车源下架
    public function autoWasteCar(Request $request){

        // dd($request->method());
        $now         = Carbon::today();  //当前日期对象
        $waster_date = $now->modify('-15 days');

        // dd($waster_date);
        // dd($now);
        $cars = DB::table('tcl_cars')
                  ->where('tcl_cars.updated_at', '<=', $waster_date)
                  ->where('tcl_cars.car_status', '1')
                  ->update(['car_status'=>'0']);
    }

    //车源数据分析
    public function carAnalysed(){

        $begin_date = '2017-02-10';
        $end_date   = '2017-12-20';

        //车源搜索列
        // $select_columns_car = ['id', 'name', 'car_code', 'vin_code', 'capacity', 'top_price', 'plate_date', 'plate_end', 'mileage', 'age', 'out_color', 'inside_color', 'gearbox', 'plate_provence', 'plate_city', 'safe_end', 'sale_number', 'categorey_type', 'shop_id', 'creater_id', 'created_at', 'updated_at', 'description', 'bottom_price', 'safe_type','recommend', 'is_top', 'car_type', 'car_status', 'customer_id', 'guide_price', 'pg_description','xs_description', 'cate_id', 'appraiser_price', 'is_appraiser', 'appraiser_at'];
        $select_columns_car = ['id', 'name', 'brand_id'];

        $all_top_brands = $this->brands->getChildBrand(0);


        //车源搜索条件
        $query_cars = new Cars();
        // $query_cars = $query_cars->select(DB::raw('count(*) as car_count'));
        /*$query_cars = $query_cars->where('brand_id', '1');
        $query_cars = $query_cars->where('created_at', '<=', $end_date);
        $query_cars = $query_cars->where('created_at', '>=', $begin_date);

        $cars_nums = $query_cars->select($select_columns_car)->get();*/

        foreach ($all_top_brands as $key => $value) {

            $cars_nums = DB::table('tcl_cars')
                             ->join('tcl_brand', 'tcl_cars.brand_id', '=', 'tcl_brand.id')
                             ->select(DB::raw('count(*) as car_count, brand_id, tcl_brand.name as bname'))
                             ->where('brand_id', $value->id)
                             ->where('tcl_cars.created_at', '<=', $end_date)
                             ->where('tcl_cars.created_at', '>=', $begin_date)
                             ->groupBy('brand_id')
                             ->get();

            if(!collect($cars_nums)->isEmpty()){
                $nums[] = $cars_nums[0];
            }
            
        }

        $s_num = collect($nums)->sortByDesc('car_count')->chunk(20); //前20品牌
        $numus = 0;
        
        foreach ($s_num[0] as $key => $value) {
            $numus += $value->car_count;
            $s_num[0][$key]->bili =  $value->car_count / 3688;
        }

        $category_list = DB::table('tcl_cars')
                             ->where('tcl_cars.created_at', '<=', $end_date)
                             ->where('tcl_cars.created_at', '>=', $begin_date)
                             ->groupBy('category_id')
                             ->get();

        foreach ($category_list as $key => $value) {
            $list_a[] = $value->category_id;
        }

        foreach ($list_a as $key => $value) {

            $cars_nums = DB::table('tcl_cars')
                             ->join('tcl_brand', 'tcl_cars.category_id', '=', 'tcl_brand.id')
                             ->select(DB::raw('count(*) as car_count, category_id, tcl_brand.name as bname'))
                             ->where('category_id', $value)
                             ->where('tcl_cars.created_at', '<=', $end_date)
                             ->where('tcl_cars.created_at', '>=', $begin_date)
                             ->get();

            if(!collect($cars_nums)->isEmpty()){
                $cate_nums[] = $cars_nums[0];
            }
            
        }

        // dd($list_a);
        $cate_num = collect($cate_nums)->sortByDesc('car_count')->chunk(20); //前20车型
        $cate_numus = 0;
        
        foreach ($cate_num[0] as $key => $value) {
            $cate_numus += $value->car_count;
            $cate_num[0][$key]->bili =  $value->car_count / 3688;
        }


        // dd($cate_num);
        
        //排量
        $capacity = config('tcl.capacity'); //获取配置文件排量
        $capacity_list = DB::table('tcl_cars')
                             ->where('tcl_cars.created_at', '<=', $end_date)
                             ->where('tcl_cars.created_at', '>=', $begin_date)
                             ->groupBy('capacity')
                             ->get();

        foreach ($capacity_list as $key => $value) {
            $list_c[] = $value->capacity;
        }
        // dd($list_c);
        foreach ($list_c as $key => $value) {

            $cars_nums = DB::table('tcl_cars')
                             ->select(DB::raw('count(*) as car_count, capacity'))
                             ->where('capacity', $value)
                             ->where('tcl_cars.created_at', '<=', $end_date)
                             ->where('tcl_cars.created_at', '>=', $begin_date)
                             ->get();
            // dd($cars_nums);                 
            if(!collect($cars_nums)->isEmpty()){
                $capacity_num[] = $cars_nums[0];
            }
        }

        // dd($capacity_num);
        $capa_num = collect($capacity_num)->sortByDesc('car_count')->chunk(10); //前20车型
        $capa_numus = 0;
        
        foreach ($capa_num[0] as $key => $value) {
            $capa_numus += $value->car_count;
            $capa_num[0][$key]->bili =  $value->car_count / 3688;
            $capa_num[0][$key]->capa_name =  $capacity[$value->capacity];
        }

        
        // dd($capa_num);
        // 
        //颜色
        $out_color = config('tcl.out_color'); //获取配置文件排量
        $out_color_list = DB::table('tcl_cars')
                             ->where('tcl_cars.created_at', '<=', $end_date)
                             ->where('tcl_cars.created_at', '>=', $begin_date)
                             ->groupBy('out_color')
                             ->get();
        // dd($out_color_list);
        foreach ($out_color_list as $key => $value) {
            $list_color[] = $value->out_color;
        }
        // dd($list_color);
        foreach ($list_color as $key => $value) {

            $cars_nums = DB::table('tcl_cars')
                             ->select(DB::raw('count(*) as car_count, out_color'))
                             ->where('out_color', $value)
                             ->where('tcl_cars.created_at', '<=', $end_date)
                             ->where('tcl_cars.created_at', '>=', $begin_date)
                             ->get();
            // dd($cars_nums);                 
            if(!collect($cars_nums)->isEmpty()){
                $out_color_num[] = $cars_nums[0];
            }
        }

        // dd($out_color_num);
        $color_num = collect($out_color_num)->sortByDesc('car_count')->chunk(5); //前20车型
        $color_numus = 0;
        
        foreach ($color_num[0] as $key => $value) {
            $color_numus += $value->car_count;
            $color_num[0][$key]->bili =  $value->car_count / 3688;
            $color_num[0][$key]->capa_name =  $out_color[$value->out_color];
        }

        // dd($color_num);

        //车龄分析
        $cars_nums_age = DB::table('tcl_cars')
                             ->select(DB::raw('count(*) as car_count'))
                             ->where('age', '>=', '0')
                             ->where('age', '<=', '5')
                             ->where('tcl_cars.created_at', '<=', $end_date)
                             ->where('tcl_cars.created_at', '>=', $begin_date)
                             ->get();
        // dd($cars_nums_age);

        //行驶里程分析
        $cars_nums_miliage = DB::table('tcl_cars')
                             ->select(DB::raw('count(*) as car_count'))
                             ->where('mileage', '>', '10')
                             ->where('mileage', '<=', '10')
                             ->where('tcl_cars.created_at', '<=', $end_date)
                             ->where('tcl_cars.created_at', '>=', $begin_date)
                             ->get();
        $car_bili = $cars_nums_miliage[0]->car_count / 3688;
        $cars_nums_miliage[0]->bili = $car_bili;
        // dd($cars_nums_miliage);

        //价格分析
        $cars_nums_price = DB::table('tcl_cars')
                             ->select(DB::raw('count(*) as car_count'))
                             ->where('top_price', '>', '20')
                             // ->where('top_price', '<=', '20')
                             ->where('tcl_cars.created_at', '<=', $end_date)
                             ->where('tcl_cars.created_at', '>=', $begin_date)
                             ->get();
        $car_price_bili = $cars_nums_price[0]->car_count / 3688;
        $cars_nums_price[0]->bili = $car_price_bili;
        // dd($cars_nums_price);

        //门店分析
        $shop_list = DB::table('tcl_cars')
                             ->where('tcl_cars.created_at', '<=', $end_date)
                             ->where('tcl_cars.created_at', '>=', $begin_date)
                             ->groupBy('shop_id')
                             ->get();

        foreach ($shop_list as $key => $value) {
            $list_shop[] = $value->shop_id;
        }

        foreach ($list_shop as $key => $value) {

            $cars_nums = DB::table('tcl_cars')
                             ->join('tcl_shop', 'tcl_cars.shop_id', '=', 'tcl_shop.id')
                             ->select(DB::raw('count(*) as car_count, shop_id, tcl_shop.name as shop_name'))
                             ->where('shop_id', $value)
                             ->where('tcl_cars.created_at', '<=', $end_date)
                             ->where('tcl_cars.created_at', '>=', $begin_date)
                             ->get();

            if(!collect($cars_nums)->isEmpty()){
                $shop_nums[] = $cars_nums[0];
            }
            
        }

        // dd($list_shop);
        $shop_num = collect($shop_nums)->sortByDesc('car_count')->chunk(20); //前20车型
        $shop_numus = 0;
        
        foreach ($shop_num[0] as $key => $value) {
            $shop_numus += $value->car_count;
            $shop_num[0][$key]->bili =  $value->car_count / 3688;
        }


        // dd($shop_num);

        //月份分析
        $cars_nums_month = DB::table('tcl_cars')
                             ->select(DB::raw('count(*) as car_count'))
                             ->where('creater_id', '!=', '1')
                             ->where('name', '!=', '')
                             ->where('tcl_cars.created_at', '>=', '2017-12-01')
                             ->where('tcl_cars.created_at', '<=', '2017-12-31')
                             ->get();
        $car_month_bili = $cars_nums_month[0]->car_count / 3688;
        // dd($cars_nums_month[0]->car_count  / 3688);
        $cars_nums_month[0]->bili = $car_month_bili;
        dd($cars_nums_month);
    }
}
