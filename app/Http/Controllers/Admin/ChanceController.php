<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Auth;
use Gate;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Repositories\Brand\BrandRepositoryContract;
use App\Repositories\Car\CarRepositoryContract;
use App\Repositories\Chance\ChanceRepositoryContract;
use App\Repositories\Shop\ShopRepositoryContract;
use App\Http\Requests\Chance\UpdateChanceRequest;
use App\Http\Requests\Chance\StoreChanceRequest;

class ChanceController extends Controller
{   
    protected $car;
    protected $brands;
    protected $shop;
    protected $chance;

    public function __construct(

        CarRepositoryContract $car,
        BrandRepositoryContract $brands,
        ShopRepositoryContract $shop,
        ChanceRepositoryContract $chance
    ) {
    
        $this->car    = $car;
        $this->brands = $brands;
        $this->shop   = $shop;
        $this->chance = $chance;


        // $this->middleware('brand.create', ['only' => ['create']]);
    }

    /**
     * Display a listing of the resource.
     * 销售机会列表
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // dd($request->method());
        $chances = $this->chance->getAllChances($request, true);
        /*p(lastSql());
        dd($chances);*/

        $chance_status_current = '1';

        return view('admin.chance.index', compact('chances', 'chance_status_current'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        dd($request->has('is_self'));

        if($request->has('is_self')){
            //自己管理的车源或客源发起
        }

        $car_code = getCarCode();
        $all_top_brands = $this->brands->getChildBrand(0);
        $year_type      = config('tcl.year_type'); //获取配置文件中所有车款年份
        $category_type  = config('tcl.category_type'); //获取配置文件中车型类别
        $gearbox        = config('tcl.gearbox'); //获取配置文件中车型类别
        $out_color      = config('tcl.out_color'); //获取配置文件中外观颜色
        $inside_color   = config('tcl.inside_color'); //获取配置文件中内饰颜色
        $sale_number    = config('tcl.sale_number'); //获取配置文件中过户次数
        $car_type       = config('tcl.car_type'); //获取配置文件车源类型
        $customer_res   = config('tcl.customer_res'); //获取配置文件客户来源
        $safe_type      = config('tcl.safe_type'); //获取配置文件保险类别
        $capacity       = config('tcl.capacity'); //获取配置文件排量
        $city_id        = $this->shop->find(Auth::user()->shop_id)->city_id; //车源所在城市
        $provence_id    = $this->shop->find(Auth::user()->shop_id)->provence_id; //车源所在省份
        // dd($city_id);
        return view('admin.chance.create',compact(
            'all_top_brands', 
            'year_type', 
            'category_type', 
            'gearbox',
            'out_color',
            'inside_color',
            'sale_number',
            'car_type',
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $chances = $this->chance->find($id);

        $gearbox        = config('tcl.gearbox'); //获取配置文件中变速箱类别
        $out_color      = config('tcl.out_color'); //获取配置文件中外观颜色
        $capacity       = config('tcl.capacity'); //获取配置文件排量
        $category_type  = config('tcl.category_type'); //获取配置文件中车型类别

        // dd($chances->hasManyImages()->get());
        return view('admin.chance.show', compact('chances', 'gearbox', 'out_color', 'capacity', 'category_type'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $chances = $this->chance->find($id);

        $gearbox        = config('tcl.gearbox'); //获取配置文件中车型类别
        $out_color      = config('tcl.out_color'); //获取配置文件中外观颜色
        $inside_color   = config('tcl.inside_color'); //获取配置文件中内饰颜色
        $sale_number    = config('tcl.sale_number'); //获取配置文件中过户次数
        $car_type       = config('tcl.car_type'); //获取配置文件车源类型
        $customer_res   = config('tcl.customer_res'); //获取配置文件客户来源
        $safe_type      = config('tcl.safe_type'); //获取配置文件保险类别
        $capacity       = config('tcl.capacity'); //获取配置文件排量
        
        /*if (Gate::denies('update', $chances)) {
            //不允许编辑,基于Policy
            dd('no no');
        }*/

        // dd($chances);
        return view('admin.chance.edit', compact(
            'chances',
            'gearbox',
            'out_color',
            'inside_color',
            'sale_number',
            'car_type',
            'customer_res',
            'safe_type',
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
    public function update(UpdatechanceRequest $chanceRequest, $id)
    {
        $this->chance->update($chanceRequest, $id);
        return redirect()->route('admin.chance.self')->withInput();
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
        }
        p($request->input('id'));
        p($request->input('status'));
        p($request->method());exit;*/

        /*$car = $this->car->find($request->id);

        $car->status = $request->input('status');

        $car->save();*/

        $this->chance->statusChange($request, $request->input('id'));

        return response()->json(array(
            'status' => 1,
            'msg' => 'ok',
        ));      
    }
}
