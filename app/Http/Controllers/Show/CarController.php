<?php

namespace App\Http\Controllers\Show;

use Illuminate\Http\Request;
use DB;
use Debugbar;
use Session;
use View;
use Carbon;
use App\Http\Requests;
use App\Area;
use App\Http\Controllers\Controller;
use App\Repositories\Car\CarRepositoryContract;
use App\Repositories\Shop\ShopRepositoryContract;

class CarController extends CommonController
{   
    protected $car;
    protected $request;
    protected $shop;

    public function __construct(
        CarRepositoryContract $car,
        ShopRepositoryContract $shop,
        Request $request
    ) {
        
        $this->car     = $car;
        $this->request = $request;
        $this->shop = $shop;
        // $this->middleware('brand.create', ['only' => ['create']]);
        parent::__construct($request);

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        if(isMobile()){
            return redirect()->route('mobel.index');
        }
        // 车源详情
        $cars = $this->car->find($id);
        // $cars->descsriptionsss = nl2br($cars->descsription);
        // dd(nl2br($cars->description));
        $cars->description = nl2br($cars->description);
        /*$cars->miaoshu = "
      【车型】 现代 ix35 两驱 6挡手自一体 </br>
      【新车裸车价格】 全款购车21.2万 </br>
      【配置】 定速巡航 倒车影像 全景电动天窗 无钥匙启动 无钥匙进入多功能方向盘 主驾驶电动座椅 导航 自动空调等 配置丰富 </br>
      【特点】 动力十足 空间十足 精品车源 约车方便 全车百分之八十原车漆 </br>
      【承诺】本公司承诺在售车辆无事故 无泡水 无火烧 支持分期购车 首付1-3成 利息低 手续简单 支持置换 代办过户
      ";*/
        // dd($cars);
        
        $img = $cars->hasOneImagesOnFirst;
        $images = $cars->hasManyImages; // 车源图片
        // dd(lastsql());
        // dd($cars);
        // dd(is_odd(10));
        // dd(is_odd(count($images)));
        
        if(is_odd(count($images))){
            //车源图片数目单数
            // dd($images->all());
            $images_arr = $images->all();
            // dd($images_arr);
            array_pop($images_arr);
            // dd($images_arr);
            $images = collect($images_arr);
        }

        // dd($images);
        $sel_city_id   = (null !==Session('chosen_city_id')) ? Session('chosen_city_id') : Session('current_city');

        // dd(Session::all());
        $sel_city = getSelCity($sel_city_id, $this->shop); //车源来自城市信息

        $show_city_name = $sel_city['show_city_name'];       
        $chosen_city_selection = Session('chosen_city_id');
        $show_city_name = $sel_city['show_city_name']; 
        // 推荐车源
        $recommend_cars = $this->car->getRecommendCars($cars->top_price);
        // dd(lastsql());
        // dd($recommend_cars[0]);

        $gearbox        = config('tcl.gearbox'); //获取配置文件中变速箱类别
        $out_color      = config('tcl.out_color'); //获取配置文件中外观颜色
        $capacity       = config('tcl.capacity'); //获取配置文件排量
        $category_type  = config('tcl.category_type'); //获取配置文件中车型类别
        $sale_number    = config('tcl.sale_number'); //获取配置文件中车型类别
        $current_page   = 'car';
        $title          = $cars->name.'_石家庄淘车乐真实车源';
        $meta_des       = $cars->name.'淘车乐为您提供最真实的二手车报价,最详细的二手车车源情况';

        return view('show.car.index', compact('cars', 'images', 'gearbox', 'out_color', 'capacity', 'category_type', 'sale_number', 'recommend_cars', 'current_page', 'title', 'meta_des', 'show_city_name'));
    }
}
