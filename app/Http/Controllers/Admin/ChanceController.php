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
use App\Repositories\Want\WantRepositoryContract;
use App\Repositories\Shop\ShopRepositoryContract;
use App\Http\Requests\Chance\UpdateChanceRequest;
use App\Http\Requests\Chance\StoreChanceRequest;

class ChanceController extends Controller
{   
    protected $car;
    protected $brands;
    protected $shop;
    protected $want;
    protected $chance;

    public function __construct(

        CarRepositoryContract $car,
        BrandRepositoryContract $brands,
        ShopRepositoryContract $shop,
        WantRepositoryContract $want,
        ChanceRepositoryContract $chance
    ) {
    
        $this->car    = $car;
        $this->want    = $want;
        $this->brands = $brands;
        $this->shop   = $shop;
        $this->chance = $chance;


        // $this->middleware('brand.create', ['only' => ['create']]);
    }

    /**
     * Display a listing of the resource.
     * 用户参与的销售机会列表
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        
        $request['participate'] = true;
        
        /*p($request->method());
        dd($request->all());*/
        $chances = $this->chance->getAllChances($request);
        /*p(lastSql());
        dd($chances);*/
        $select_conditions  = $request->all();
        $chance_launch = isset($request->chance_launch) ? $request->chance_launch : '1';
        // $chance_status = config('tcl.chance_status'); //获取配置文件中销售机会状态

        return view('admin.chance.index', compact('chances', 'chance_launch','select_conditions'));
    }

    /**
     * Display a listing of the resource.
     * 用户发起的销售机会列表
     * @return \Illuminate\Http\Response
     */
    public function selfChance(Request $request)
    {
        // p($request->method());
        // dd($request->all());
        $request['participate'] = false;
        $chances = $this->chance->getAllChances($request);
        /*dd(lastSql());
        dd($chances);*/
        $select_conditions  = $request->all();
        $chance_launch = isset($request->chance_launch) ? $request->chance_launch : '1';


        return view('admin.chance.self', compact('chances', 'chance_launch','select_conditions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        // dd($request->all());
        $request['os_recommend'] = 'yes';
        $is_self = $request->has('is_self');
  
        /*$gearbox        = config('tcl.gearbox'); //获取配置文件中车型类别
        $out_color      = config('tcl.out_color'); //获取配置文件中外观颜色
        $inside_color   = config('tcl.inside_color'); //获取配置文件中内饰颜色
        $sale_number    = config('tcl.sale_number'); //获取配置文件中过户次数
        $car_type       = config('tcl.car_type'); //获取配置文件车源类型
        $customer_res   = config('tcl.customer_res'); //获取配置文件客户来源
        $safe_type      = config('tcl.safe_type'); //获取配置文件保险类别
        $capacity       = config('tcl.capacity'); //获取配置文件排量  
        $category_type  = config('tcl.category_type'); //获取配置文件中车型类别
        $car_stauts_config  = config('tcl.car_stauts'); //获取配置文件中车源状态
        $mileage_config  = config('tcl.mileage'); //获取配置文件中车源状态
        $sale_number_config  = config('tcl.want_sale_number'); //获取配置文件中车源状态
        $follow_type     = config('tcl.follow_type'); //获取配置文件中车源状态
        $age            = config('tcl.age'); //获取配置文件中车源状态*/

        if($request->has('want_id')){
            //匹配求购信息
            $waited_info = $this->want->find($request->want_id);
            $request['top_price']    = $waited_info->top_price;          
            $request['bottom_price'] = $waited_info->bottom_price;
            
            $match_info = $this->car->getAllcars($request, $is_self);
            $createBy   = 'want';

            $follow_info = $waited_info->hasManyFollow;
            // dd($match_info);
            foreach ($follow_info as $key => $value) {
                
                $follow_info[$key]['description'] = json_decode($value->description);
            }

            // dd($waited_info);
            /*p(lastSql());
            dd($match_info);*/
             return view('admin.chance.createByWant',compact(
                'waited_info', 
                'match_info',             
                'follow_info'
            )); 
        
        }else{
            // 匹配车源信息
            $waited_info = $this->car->find($request->car_id);
            $request['top_price']    = $waited_info->top_price;          
            $request['bottom_price'] = $waited_info->bottom_price;
            
            $match_info = $this->want->getAllWants($request, $is_self);
            $createBy   = 'car';
            // dd($waited_info->categorey_type);
            $img_info = $waited_info->hasManyImages;
            $follow_info = $waited_info->hasManyFollow;
            // dd($img_info);
            foreach ($follow_info as $key => $value) {
                
                $follow_info[$key]['description'] = json_decode($value->description);
            }
            // dd($follow_info);
            // dd(json_decode($follow_info[8]->description));
            // dd(decodeUnicode(json_decode($follow_info[1]->description)));
            // dd(json_decode($follow_info[0]->description->toJson()));
            // dd($img_info->toArray());
             return view('admin.chance.createByCar',compact(
                'waited_info', 
                'match_info',
                'createBy',
                'img_info',
                'follow_info'
            )); 
        }        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $want_info = $this->want->find($request->pipei_want_id);
        $car_info  = $this->car->find($request->pipei_car_id);

        /*dd($request->all());
        dd($want_info->id);
        dd($want_info);*/
        // dd($want_info->belongsToCustomer->customer_name);
        // dd($car_info->id);
        // dd($car_info->customer_id);
        // dd($car_info->belongsToCustomer->customer_name);

        $request['want_id']          = $want_info->id;
        $request['want_customer_id'] = $want_info->customer_id;
        $request['car_id']           = $car_info->id;
        $request['car_customer_id']  = $car_info->customer_id;
        $request['car_creater']      = $car_info->belongsToUser->user_id;
        $request['want_creater']     = $want_info->belongsToUser->user_id;
        $request['shop_id']          = Auth::user()['shop_id'];

        // dd($request->all());

        $chance = $this->chance->create($request);

        // dd($chance->toJson());
        return redirect()->route('admin.chance.self')->withInput();     
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $chances   = $this->chance->find($id);
        $car_info  = $this->car->find($chances->car_id); //车源信息
        $want_info = $this->want->find($chances->want_id); //求购信息
        // dd($chances);
        // dd($car_info);
        // dd($want_info);
        /*$gearbox        = config('tcl.gearbox'); //获取配置文件中变速箱类别
        $out_color      = config('tcl.out_color'); //获取配置文件中外观颜色
        $capacity       = config('tcl.capacity'); //获取配置文件排量
        $category_type  = config('tcl.category_type'); //获取配置文件中车型类别
        $mileage        = config('tcl.mileage'); //获取配置文件中车型类别
*/
        // dd($chances->hasManyImages()->get());
        return view('admin.chance.show', compact('chances',  'car_info', 'want_info'));
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

        /*$gearbox        = config('tcl.gearbox'); //获取配置文件中车型类别
        $out_color      = config('tcl.out_color'); //获取配置文件中外观颜色
        $inside_color   = config('tcl.inside_color'); //获取配置文件中内饰颜色
        $sale_number    = config('tcl.sale_number'); //获取配置文件中过户次数
        $car_type       = config('tcl.car_type'); //获取配置文件车源类型
        $customer_res   = config('tcl.customer_res'); //获取配置文件客户来源
        $safe_type      = config('tcl.safe_type'); //获取配置文件保险类别
        $capacity       = config('tcl.capacity'); //获取配置文件排量
        */
        /*if (Gate::denies('update', $chances)) {
            //不允许编辑,基于Policy
            dd('no no');
        }*/

        // dd($chances);
        return view('admin.chance.edit', compact(
            'chances'
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
