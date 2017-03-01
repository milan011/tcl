<?php

namespace App\Http\Controllers\Home;

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

class CarController extends CommonController
{   
    protected $car;
    protected $request;

    public function __construct(
        CarRepositoryContract $car,
        Request $request
    ) {
        
        $this->car     = $car;
        $this->request = $request;
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
        // 车源详情
        $cars = $this->car->find($id);
        // dd($cars);
        // p('xixi');
        // dd(Session::all());
        // 推荐车源
        $recommend_cars = $this->car->getRecommendCars($cars->top_price);
        // dd(lastsql());
        // dd($recommend_cars[0]);

        $gearbox        = config('tcl.gearbox'); //获取配置文件中变速箱类别
        $out_color      = config('tcl.out_color'); //获取配置文件中外观颜色
        $capacity       = config('tcl.capacity'); //获取配置文件排量
        $category_type  = config('tcl.category_type'); //获取配置文件中车型类别
        $sale_number    = config('tcl.sale_number'); //获取配置文件中车型类别

        return view('home.car.index', compact('cars', 'gearbox', 'out_color', 'capacity', 'category_type', 'sale_number', 'recommend_cars'));
    }
}
