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
    public function index()
    {
        //
        return view('admin.want.index', compact('wants'));
    }

    /**
     * Display a listing of the resource.
     * 我的客源列表
     * @return \Illuminate\Http\Response
     */
    public function selfwant(Request $request)
    {
        // dd($request->all());
        $wants = $this->want->getAllWants($request);
        /*p(lastSql());
        dd($wants);*/
        $gearbox            = config('tcl.gearbox'); //获取配置文件中变速箱类别
        $out_color          = config('tcl.out_color'); //获取配置文件中外观颜色
        $want_stauts_config  = config('tcl.want_stauts'); //获取配置文件中车源状态
        $capacity       = config('tcl.capacity'); //获取配置文件排量
        // dd($request->method());
        if($request->method() == 'POST'){
            $want_status_current = $request->input('want_status', ''); //当前查询的车源状态
        }else{
            $want_status_current = $request->input('want_status', '1'); //当前查询的车源状态
        }
        
        // dd($car_status);

        return view('admin.want.index', compact('wants', 'gearbox', 'out_color', 'want_status_current', 'want_stauts_config', 'capacity'));
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
        $year_type      = config('tcl.year_type'); //获取配置文件中所有车款年份
        $category_type  = config('tcl.category_type'); //获取配置文件中车型类别
        $gearbox        = config('tcl.gearbox'); //获取配置文件中车型类别
        $out_color      = config('tcl.out_color'); //获取配置文件中外观颜色
        $inside_color   = config('tcl.inside_color'); //获取配置文件中内饰颜色
        $sale_number    = config('tcl.sale_number'); //获取配置文件中过户次数
        $customer_res   = config('tcl.customer_res'); //获取配置文件客户来源
        $safe_type      = config('tcl.safe_type'); //获取配置文件保险类别
        $capacity       = config('tcl.capacity'); //获取配置文件排量
        $city_id        = $this->shop->find(Auth::user()->shop_id)->city_id; //车源所在城市
        $provence_id    = $this->shop->find(Auth::user()->shop_id)->provence_id; //车源所在省份
        // dd($city_id);
        return view('admin.want.create',compact(
            'all_top_brands', 
            'year_type', 
            'category_type', 
            'gearbox',
            'out_color',
            'inside_color',
            'sale_number',
            'city_id',
            'provence_id',
            'safe_type',
            'capacity',
            'customer_res'
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
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        $gearbox        = config('tcl.gearbox'); //获取配置文件中车型类别
        $out_color      = config('tcl.out_color'); //获取配置文件中外观颜色
        $inside_color   = config('tcl.inside_color'); //获取配置文件中内饰颜色
        $sale_number    = config('tcl.sale_number'); //获取配置文件中过户次数
        $customer_res   = config('tcl.customer_res'); //获取配置文件客户来源
        $capacity       = config('tcl.capacity'); //获取配置文件排量
        
        /*if (Gate::denies('update', $wants)) {
            //不允许编辑,基于Policy
            dd('no no');
        }*/
        return view('admin.want.edit', compact(
            'wants',
            'gearbox',
            'out_color',
            'inside_color',
            'sale_number',
            'customer_res',
            'capacity'
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
}
