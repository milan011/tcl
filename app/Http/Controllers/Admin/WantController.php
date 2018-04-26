<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Auth;
use Gate;
use Carbon;
use DB;
use App\Want;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Repositories\Brand\BrandRepositoryContract;
use App\Repositories\Want\WantRepositoryContract;
use App\Repositories\Shop\ShopRepositoryContract;
use App\Http\Requests\Want\UpdateWantRequest;
use App\Http\Requests\Want\StoreWantRequest;

class WantController extends Controller
{
    protected $want;
    protected $brands;
    protected $shop;

    public function __construct(

        WantRepositoryContract $want,
        BrandRepositoryContract $brands,
        ShopRepositoryContract $shop
    ) {
    
        $this->want = $want;
        $this->brands = $brands;
        $this->shop = $shop;


        // $this->middleware('brand.create', ['only' => ['create']]);
    }

    /**
     * Display a listing of the resource.
     * 所有客源列表
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $request['want_status'] = '1';
        $wants = $this->want->getAllWants($request);
        // dd(lastSql());
        // dd($wants);
        $all_top_brands = $this->brands->getChildBrand(0);
        $shops = $this->shop->getShopsInProvence('10');
        // dd($request->all());
        $want_status_current = '1';
        $select_conditions  = $request->all();
        
        return view('admin.want.index', compact('wants', 'shops', 'want_status_current','all_top_brands', 'select_conditions'));
    }

    /**
     * Display a listing of the resource.
     * 我的客源列表
     * @return \Illuminate\Http\Response
     */
    public function selfwant(Request $request)
    {
        // dd($request->all());
    
        if($request->method() == 'POST'){
            //初始搜索条件
            $select_conditions  = $request->all();
        }else{
            $select_conditions['want_status'] = '1';
            $request['want_status'] = '1';
        }
        
        $all_top_brands = $this->brands->getChildBrand(0);
        $wants = $this->want->getAllWants($request, true);
        // dd($wants[0]->belongsToCustomer);
        return view('admin.want.self', compact('wants',  'want_stauts_config', 'select_conditions','all_top_brands'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // dd(Auth::user());

        $all_top_brands = $this->brands->getChildBrand(0);
        /*$year_type      = config('tcl.year_type'); //获取配置文件中所有车款年份
        $category_type  = config('tcl.category_type'); //获取配置文件中车型类别
        $gearbox        = config('tcl.gearbox'); //获取配置文件中车型类别
        $out_color      = config('tcl.out_color'); //获取配置文件中外观颜色
        $inside_color   = config('tcl.inside_color'); //获取配置文件中内饰颜色
        $sale_number    = config('tcl.want_sale_number'); //获取配置文件中过户次数
        $customer_res   = config('tcl.customer_res'); //获取配置文件客户来源
        $safe_type      = config('tcl.safe_type'); //获取配置文件保险类别
        $capacity       = config('tcl.capacity'); //获取配置文件排量
        $mileage_config = config('tcl.mileage'); //获取配置文件中车源状态*/
        $city_id        = $this->shop->find(Auth::user()->shop_id)->city_id; //车源所在城市
        $provence_id    = $this->shop->find(Auth::user()->shop_id)->provence_id; //车源所在省份
        // dd($city_id);
        return view('admin.want.create',compact(
            'all_top_brands', 
            'city_id',
            'provence_id'
        ));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreWantRequest $wantRequest)
    {
        // dd($wantRequest->all());
        $getInsertedId = $this->want->create($wantRequest);
        // p(lastSql());exit;
        return redirect()->route('admin.want.self')->withInput();
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

        $this->want->interactiveAdd($request, $request->input('want_id'));

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
        $wants = $this->want->find($id);

        /*$gearbox        = config('tcl.gearbox'); //获取配置文件中变速箱类别
        $out_color      = config('tcl.out_color'); //获取配置文件中外观颜色
        $capacity       = config('tcl.capacity'); //获取配置文件排量
        $category_type  = config('tcl.category_type'); //获取配置文件中车型类别*/

        // dd($wants);
        return view('admin.want.show', compact('wants'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $wants = $this->want->find($id);
        // dd($wants);
        /*$gearbox        = config('tcl.gearbox'); //获取配置文件中车型类别
        $out_color      = config('tcl.out_color'); //获取配置文件中外观颜色
        $inside_color   = config('tcl.inside_color'); //获取配置文件中内饰颜色
        $sale_number    = config('tcl.sale_number'); //获取配置文件中过户次数
        $customer_res   = config('tcl.customer_res'); //获取配置文件客户来源
        $capacity       = config('tcl.capacity'); //获取配置文件排量*/
        
        /*if (Gate::denies('update', $wants)) {
            //不允许编辑,基于Policy
            dd('no no');
        }*/
        return view('admin.want.edit', compact(
            'wants'
        ));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateWantRequest $wantRequest, $id)
    {
        // dd($wantRequest->all());
        $this->want->update($wantRequest, $id);
        return redirect()->route('admin.want.self')->withInput();
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
     * 修改求购信息状态
     * 暂时只有激活-废弃转换
     * @return \Illuminate\Http\Response
     */
    public function changeStatus(Request $request)
    {    
        /*if($request->ajax()){
            echo "zhen de shi AJAX";
        }
        p($request->input('id'));
        p($request->input('status'));
        p($request->method());exit;*/

        /*$want = $this->want->find($request->id);

        $want->status = $request->input('status');

        $want->save();*/

        $this->want->statusChange($request, $request->input('id'));

        if($request->input('status') == '0'){
            $msg = '求购已经激活';
        }else{
            $msg = '求购已经废弃';
        }

        return response()->json(array(
            'status' => 1,
            'msg'    => $msg,
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
        $this->want->quicklyFollow($request->input('id'));

        return response()->json(array(
            'status' => 1,
            'msg' => '跟进成功',
        ));      
    }

     /**
     * ajax获得求购信息
     * @return \Illuminate\Http\Response
     */
    public function getWantInfo(Request $request)
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
       
        $want = $this->want->find($request->input('want_id'));

        $want->capacity = $capacity[$want->capacity];
        $want->want_type = $category_type[$want->want_type];
        $want->gearbox = $gearbox[$want->gearbox];
        $want->mileage = $mileage_config[$want->mileage];
        $want->out_color = $out_color[$want->out_color];
        $want->sale_number = $sale_number[$want->sale_number];
        $want->inside_color = $inside_color[$want->inside_color];
        $want->car_age = $car_age[$want->age];
        $want->customer = $want->belongsToCustomer->customer_name;
        $want->creater = $want->belongsToUser->nick_name;
        $want->creater_tel = $want->belongsToUser->creater_telephone;
        $want->shop_name = $want->belongsToShop->shop_name;
        if(Auth::id() == $want->creater_id){
            $want->customer_info = $want->belongsToCustomer->customer_name.'('.$want->belongsToCustomer->customer_telephone.')';
        }else{
            $want->customer_info = $want->belongsToCustomer->customer_name;
        } 
        // dd($want);
        return response()->json(array(
            'status' => 1,
            'msg' => 'ok',
            'data' => $want->toJson(),
        ));      
    }

    // 求购下架
    public function autoWasteWant(Request $request){

        // dd($request->method());
        $now         = Carbon::today();  //当前日期对象
        $waster_date = $now->modify('-40 days');

        // dd($waster_date);
        // dd($now);
        $wants = DB::table('tcl_want')
                  ->where('tcl_want.updated_at', '<=', $waster_date)
                  ->where('tcl_want.want_status', '1')
                  ->update(['want_status'=>'0']);
    }

    //车源数据分析
    public function wantAnalysed(){

        $begin_date = '2017-02-10';
        $end_date   = '2017-12-20';

        //车源搜索列
        // $select_columns_car = ['id', 'name', 'car_code', 'vin_code', 'capacity', 'top_price', 'plate_date', 'plate_end', 'mileage', 'age', 'out_color', 'inside_color', 'gearbox', 'plate_provence', 'plate_city', 'safe_end', 'sale_number', 'categorey_type', 'shop_id', 'creater_id', 'created_at', 'updated_at', 'description', 'bottom_price', 'safe_type','recommend', 'is_top', 'car_type', 'car_status', 'customer_id', 'guide_price', 'pg_description','xs_description', 'cate_id', 'appraiser_price', 'is_appraiser', 'appraiser_at'];
        $select_columns_want = ['id', 'name', 'brand_id'];

        $all_top_brands = $this->brands->getChildBrand(0);


        //车源搜索条件
        $query_wants = new Want();
        // $query_wants = $query_wants->select(DB::raw('count(*) as want_count'));
        /*$query_wants = $query_wants->where('brand_id', '1');
        $query_wants = $query_wants->where('created_at', '<=', $end_date);
        $query_wants = $query_wants->where('created_at', '>=', $begin_date);

        $wants_nums = $query_wants->select($select_columns_want)->get();*/
        //品牌分析
        foreach ($all_top_brands as $key => $value) {

            $wants_nums = DB::table('tcl_want')
                             ->join('tcl_brand', 'tcl_want.brand_id', '=', 'tcl_brand.id')
                             ->select(DB::raw('count(*) as want_count, brand_id, tcl_brand.name as bname'))
                             ->where('brand_id', $value->id)
                             ->where('tcl_want.created_at', '<=', $end_date)
                             ->where('tcl_want.created_at', '>=', $begin_date)
                             ->groupBy('brand_id')
                             ->get();

            if(!collect($wants_nums)->isEmpty()){
                $nums[] = $wants_nums[0];
            }
            
        }

        $s_num = collect($nums)->sortByDesc('want_count')->chunk(20); //前20品牌
        $numus = 0;
        
        foreach ($s_num[0] as $key => $value) {
            $numus += $value->want_count;
            $s_num[0][$key]->bili =  $value->want_count / 3438;
        }
        // dd($s_num);
        //车型分析
        $category_list = DB::table('tcl_want')
                             ->where('tcl_want.created_at', '<=', $end_date)
                             ->where('tcl_want.created_at', '>=', $begin_date)
                             ->groupBy('categorey_id')
                             ->get();

        foreach ($category_list as $key => $value) {
            $list_a[] = $value->categorey_id;
        }

        foreach ($list_a as $key => $value) {

            $wants_nums = DB::table('tcl_want')
                             ->join('tcl_brand', 'tcl_want.categorey_id', '=', 'tcl_brand.id')
                             ->select(DB::raw('count(*) as want_count, categorey_id, tcl_brand.name as bname'))
                             ->where('categorey_id', $value)
                             ->where('tcl_want.creater_id', '!=', '1')
                             ->where('tcl_want.created_at', '<=', $end_date)
                             ->where('tcl_want.created_at', '>=', $begin_date)
                             ->get();

            if(!collect($wants_nums)->isEmpty()){
                $cate_nums[] = $wants_nums[0];
            }
            
        }

        // dd($list_a);
        $cate_num = collect($cate_nums)->sortByDesc('want_count')->chunk(20); //前20车型
        $cate_numus = 0;
        
        foreach ($cate_num[0] as $key => $value) {
            $cate_numus += $value->want_count;
            $cate_num[0][$key]->bili =  $value->want_count / 3438;
        }


        // dd($cate_num);
        
        //排量
        $capacity = config('tcl.capacity'); //获取配置文件排量
        $capacity_list = DB::table('tcl_want')
                             ->where('tcl_want.created_at', '<=', $end_date)
                             ->where('tcl_want.created_at', '>=', $begin_date)
                             ->groupBy('capacity')
                             ->get();

        foreach ($capacity_list as $key => $value) {
            $list_c[] = $value->capacity;
        }
        // dd($list_c);
        foreach ($list_c as $key => $value) {

            $wants_nums = DB::table('tcl_want')
                             ->select(DB::raw('count(*) as want_count, capacity'))
                             ->where('capacity', $value)
                             ->where('tcl_want.created_at', '<=', $end_date)
                             ->where('tcl_want.created_at', '>=', $begin_date)
                             ->get();
            // dd($wants_nums);                 
            if(!collect($wants_nums)->isEmpty()){
                $capacity_num[] = $wants_nums[0];
            }
        }

        // dd($capacity_num);
        $capa_num = collect($capacity_num)->sortByDesc('want_count')->chunk(10); //前20车型
        $capa_numus = 0;
        
        foreach ($capa_num[0] as $key => $value) {
            $capa_numus += $value->want_count;
            $capa_num[0][$key]->bili =  $value->want_count / 3438;
            $capa_num[0][$key]->capa_name =  $capacity[$value->capacity];
        }

        
        // dd($capa_num);
        // 
        //颜色
        $out_color = config('tcl.out_color'); //获取配置文件颜色
        $out_color_list = DB::table('tcl_want')
                             ->where('tcl_want.created_at', '<=', $end_date)
                             ->where('tcl_want.created_at', '>=', $begin_date)
                             ->groupBy('out_color')
                             ->get();
        // dd($out_color_list);
        foreach ($out_color_list as $key => $value) {
            $list_color[] = $value->out_color;
        }
        // dd($list_color);
        foreach ($list_color as $key => $value) {

            $wants_nums = DB::table('tcl_want')
                             ->select(DB::raw('count(*) as want_count, out_color'))
                             ->where('out_color', $value)
                             ->where('tcl_want.created_at', '<=', $end_date)
                             ->where('tcl_want.created_at', '>=', $begin_date)
                             ->get();
            // dd($wants_nums);                 
            if(!collect($wants_nums)->isEmpty()){
                $out_color_num[] = $wants_nums[0];
            }
        }

        // dd($out_color_num);
        $color_num = collect($out_color_num)->sortByDesc('want_count')->chunk(5); //前20车型
        $color_numus = 0;
        
        foreach ($color_num[0] as $key => $value) {
            $color_numus += $value->want_count;
            $color_num[0][$key]->bili =  $value->want_count / 3438;
            $color_num[0][$key]->capa_name =  $out_color[$value->out_color];
        }

        // dd($color_num);

        //车龄分析
        $age = config('tcl.age'); //获取配置文件车龄
        $age_list = DB::table('tcl_want')
                             ->where('tcl_want.created_at', '<=', $end_date)
                             ->where('tcl_want.created_at', '>=', $begin_date)
                             ->groupBy('age')
                             ->get();
        // dd($age_list);
        foreach ($age_list as $key => $value) {
            $list_age[] = $value->age;
        }
        // dd($list_age);
        foreach ($list_age as $key => $value) {

            $wants_nums = DB::table('tcl_want')
                             ->select(DB::raw('count(*) as want_count, age'))
                             ->where('age', $value)
                             ->where('tcl_want.created_at', '<=', $end_date)
                             ->where('tcl_want.created_at', '>=', $begin_date)
                             ->get();
            // dd($wants_nums);                 
            if(!collect($wants_nums)->isEmpty()){
                $age_num[] = $wants_nums[0];
            }
        }

        // dd($age_num);
        $age_num = collect($age_num)->sortByDesc('want_count')->chunk(5); //前20车型
        $age_numus = 0;
        
        foreach ($age_num[0] as $key => $value) {
            $age_numus += $value->want_count;
            $age_num[0][$key]->bili =  $value->want_count / 3438;
            $age_num[0][$key]->capa_name =  $age[$value->age];
        }
        // dd($age_num);
        
        //行驶里程分析
        $mileage = config('tcl.mileage'); //获取配置文件车龄
        $mileage_list = DB::table('tcl_want')
                             ->where('tcl_want.created_at', '<=', $end_date)
                             ->where('tcl_want.created_at', '>=', $begin_date)
                             ->groupBy('mileage')
                             ->get();
        // dd($mileage_list);
        foreach ($mileage_list as $key => $value) {
            $list_mileage[] = $value->mileage;
        }
        // dd($list_mileage);
        foreach ($list_mileage as $key => $value) {

            $wants_nums = DB::table('tcl_want')
                             ->select(DB::raw('count(*) as want_count, mileage'))
                             ->where('mileage', $value)
                             ->where('tcl_want.created_at', '<=', $end_date)
                             ->where('tcl_want.created_at', '>=', $begin_date)
                             ->get();
            // dd($wants_nums);                 
            if(!collect($wants_nums)->isEmpty()){
                $mileage_num[] = $wants_nums[0];
            }
        }

        // dd($mileage_num);
        $mileage_num = collect($mileage_num)->sortByDesc('want_count')->chunk(5); //前20车型
        $mileage_numus = 0;
        
        foreach ($mileage_num[0] as $key => $value) {
            $mileage_numus += $value->want_count;
            $mileage_num[0][$key]->bili =  $value->want_count / 3438;
            $mileage_num[0][$key]->capa_name =  $mileage[$value->mileage];
        }
        // dd($mileage_num);
        // dd($wants_nums_milimileage);

        //价格分析
        $wants_nums_price = DB::table('tcl_want')
                             ->select(DB::raw('count(*) as want_count'))
                             ->where('top_price', '>=', '0')
                             ->where('top_price', '<=', '5')
                             ->where('tcl_want.created_at', '<=', $end_date)
                             ->where('tcl_want.created_at', '>=', $begin_date)
                             ->get();
        $want_price_bili = $wants_nums_price[0]->want_count / 3438;
        $wants_nums_price[0]->bili = $want_price_bili;
        // dd($wants_nums_price);

        //月份分析
        $wants_nums_month = DB::table('tcl_want')
                             ->select(DB::raw('count(*) as want_count'))
                             ->where('creater_id', '!=', '1')
                             ->where('name', '!=', '')
                             ->where('tcl_want.created_at', '>=', '2017-12-01')
                             ->where('tcl_want.created_at', '<=', '2017-12-31')
                             ->get();
        $want_month_bili = $wants_nums_month[0]->want_count / 3438;
        // dd($wants_nums_month[0]->want_count  / 3688);
        $wants_nums_month[0]->bili = $want_month_bili;
        dd($wants_nums_month);
    }
}
