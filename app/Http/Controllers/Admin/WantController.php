<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Auth;
use Gate;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Repositories\Brand\BrandRepositoryContract;
use App\Repositories\Want\WantRepositoryContract;
use App\Repositories\Shop\ShopRepositoryContract;
use App\Http\Requests\want\UpdateWantRequest;
use App\Http\Requests\want\StoreWantRequest;

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
/*
        $gearbox             = config('tcl.gearbox'); //获取配置文件中变速箱类别
        $out_color           = config('tcl.out_color'); //获取配置文件中外观颜色
        $want_stauts_config  = config('tcl.want_stauts'); //获取配置文件中车源状态
        $capacity            = config('tcl.capacity'); //获取配置文件排量*/
        $want_status_current = '1';
        /*p(lastSql());
        dd($wants);*/
        return view('admin.want.index', compact('wants', 'want_status_current'));
    }

    /**
     * Display a listing of the resource.
     * 我的客源列表
     * @return \Illuminate\Http\Response
     */
    public function selfwant(Request $request)
    {
        // dd($request->all());
        $wants = $this->want->getAllWants($request, true);
        /*p(lastSql());
        dd($wants);*/
        /*$gearbox            = config('tcl.gearbox'); //获取配置文件中变速箱类别
        $out_color          = config('tcl.out_color'); //获取配置文件中外观颜色
        $want_stauts_config = config('tcl.want_stauts'); //获取配置文件中车源状态
        $capacity           = config('tcl.capacity'); //获取配置文件排量*/
        // dd($request->method());
        if($request->method() == 'POST'){
            //初始搜索条件
            $select_conditions  = $request->all();
        }else{
            $select_conditions['want_status'] = '';
        }
        
        // dd($car_status);

        return view('admin.want.self', compact('wants',  'want_stauts_config', 'select_conditions'));
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

        return response()->json(array(
            'status' => 1,
            'msg' => 'ok',
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
            'msg' => 'ok',
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
        
        // dd($want);
        return response()->json(array(
            'status' => 1,
            'msg' => 'ok',
            'data' => $want->toJson(),
        ));      
    }
}
