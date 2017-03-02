<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use DB;
use Debugbar;
use View;
use Carbon;
use Session;
use App\Area;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Repositories\Car\CarRepositoryContract;
use App\Repositories\Brand\BrandRepositoryContract;
use App\Repositories\Shop\ShopRepositoryContract;

class HomeController extends CommonController
{   
    protected $car;
    protected $brand;
    protected $request;
    protected $shop;

    public function __construct(
        CarRepositoryContract $car,
        BrandRepositoryContract $brand,
        ShopRepositoryContract $shop,
        Request $request
    ) {
        $this->brand = $brand;
        $this->car   = $car;
        $this->shop  = $shop;
        $this->request = $request;
        // $this->middleware('brand.create', ['only' => ['create']]);
        parent::__construct($request);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, $city='')
    {
        // dd($city);
        // dd($request->method());

        if(!empty($city)){

            $city_id = getConditionContent($city);
            $city_shops = $this->shop->getShopsInCity($city_id);
            $city_name = Area::select('name')->find($city_id)->name;

            $current_city_name = $city_name;
            $chose_city = $city_id;
        }else{
            $current_city_name = Session('current_city_name');
            $city_shops = $this->shop->getShopsInCity(Session('current_city'));
        }
        // dd(count($city_shops));

        $shop_list = [];

        if(count($city_shops) == 0 ){

            $city_shops = $this->shop->getShopsInCity('138');
        }

        foreach ($city_shops as $key => $value) {
            $shop_list[] = $value->id;
        }


        // dd($shop_list);
        // dd($current_city_name);

        $select_condition['car_status'] = '1';
        $select_condition['shop_list']  = $shop_list;

        // dd($select_condition);

        $cars = $this->car->getAllCarsWithBefore($select_condition);
        // dd(lastSql());
        // 推荐品牌
        $recomment_brands = $this->brand->getRecommentBrandsWithBefore();

        $category_type   = config('tcl.category_type'); //获取配置文件中车型类别
        $sale_number     = config('tcl.sale_number'); //获取配置文件中车型类别
        $price_interval  = config('tcl.price_interval'); //获取配置文件中价格区间
        $age             = config('tcl.age'); //获取配置文件中车龄区间
        $age_begin_end   = config('tcl.age_begin_end'); //获取配置文件中车龄区间起始
        $price_begin_end = config('tcl.price_begin_end'); //获取配置文件中价格区间起始

        // dd($recomment_brands);
        // dd($cars);
        /*foreach ($cars as $key => $value) {
            p($value->id);
            dd($value->hasOneImagesOnFirst->filename);
        }
        exit;*/

        return view('home.home.index', compact('cars', 'recomment_brands','age','price_interval','category_type','current_city_name','chose_city'));
    }
}
