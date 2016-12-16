<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Auth;
use Gate;
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
    public function index()
    {
        //
        return view('admin.car.index', compact('cars'));
    }

    /**
     * Display a listing of the resource.
     * 我的车源列表
     * @return \Illuminate\Http\Response
     */
    public function carself(Request $request)
    {
        // dd(array_filter($request->all()));
        $cars = $this->car->getAllcars($request);
        /*p(lastSql());
        dd($cars);*/
        $gearbox            = config('tcl.gearbox'); //获取配置文件中变速箱类别
        $out_color          = config('tcl.out_color'); //获取配置文件中外观颜色
        $car_stauts_config  = config('tcl.car_stauts'); //获取配置文件中车源状态
        // dd($request->method());
        if($request->method() == 'POST'){
            $car_status_current = $request->input('car_status', ''); //当前查询的车源状态
        }else{
            $car_status_current = $request->input('car_status', '1'); //当前查询的车源状态
        }
        
        // dd($car_status);

        return view('admin.car.index', compact('cars', 'gearbox', 'out_color', 'car_status_current', 'car_stauts_config'));
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
        return view('admin.car.create',compact(
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
     * Store a newly created resource in storage.
     * ajax存储车源
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function ajaxAdd(StoreCarsRequest $carRequest)
    {
        // p($carRequest->all());exit;
        $car = $this->car->create($carRequest);

        return response()->json($car); 
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
        $cars = $this->car->find($id);

        $gearbox        = config('tcl.gearbox'); //获取配置文件中车型类别
        $out_color      = config('tcl.out_color'); //获取配置文件中外观颜色
        $inside_color   = config('tcl.inside_color'); //获取配置文件中内饰颜色
        $sale_number    = config('tcl.sale_number'); //获取配置文件中过户次数
        $car_type       = config('tcl.car_type'); //获取配置文件车源类型
        $customer_res   = config('tcl.customer_res'); //获取配置文件客户来源
        $safe_type      = config('tcl.safe_type'); //获取配置文件保险类别
        $capacity       = config('tcl.capacity'); //获取配置文件排量
        
        if (Gate::denies('update', $cars)) {
            //不允许编辑,基于Policy
            dd('no no');
        }

        // dd($cars);
        return view('admin.car.edit', compact(
            'cars',
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
    public function update(UpdateCarsRequest $carRequest, $id)
    {
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
        }
        p($request->input('id'));
        p($request->input('status'));
        p($request->method());exit;*/

        /*$car = $this->car->find($request->id);

        $car->status = $request->input('status');

        $car->save();*/

        $this->car->statusChange($request, $request->input('id'));

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
        $this->car->quicklyFollow($request->input('id'));

        return response()->json(array(
            'status' => 1,
            'msg' => 'ok',
        ));      
    }
}
