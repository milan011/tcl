<?php

namespace App\Http\Controllers\Show;

use App\Repositories\Brand\BrandRepositoryContract;
use App\Repositories\Car\CarRepositoryContract;
use App\Repositories\Shop\ShopRepositoryContract;
use App\Repositories\Want\WantRepositoryContract;
use Illuminate\Http\Request;
use View;

class HomeController extends CommonController {
	protected $car;
	protected $brand;
	protected $request;
	protected $shop;
	protected $want;

	public function __construct(
		CarRepositoryContract $car,
		BrandRepositoryContract $brand,
		ShopRepositoryContract $shop,
		WantRepositoryContract $want,
		Request $request
	) {
		$this->brand = $brand;
		$this->car = $car;
		$this->shop = $shop;
		$this->want = $want;
		$this->request = $request;
		// $this->middleware('brand.create', ['only' => ['create']]);
		parent::__construct($request);
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index(Request $request, $city = '') {

		if(isMobile()){
            return redirect()->route('mobel.index');
        }

		$sel_city = getSelCity($city, $this->shop); //车源来自城市信息

		// dd($sel_city);

		// dd($shop_list);
		// dd($current_city_name);
		$show_city_name = $sel_city['show_city_name'];

		$select_condition['car_status'] = '1';
		$select_condition['shop_list'] = $sel_city['shop_list'];
		$select_condition['plate_city'] = $sel_city['show_city_id'];
		// dd($select_condition);
		//车源和求购总量
		$nums_car = $this->car->getAllCarsNum();
		$nums_want = $this->want->getAllWantsNum();
		
		$all_nums = $nums_want + $nums_car;

		$cars = $this->car->getAllCarsWithBefore($select_condition);

		// 推荐品牌
		$recomment_brands = $this->brand->getRecommentBrandsWithBefore();
		$all_top_brands = $this->brand->getChildBrand(0);
		$category_type = config('tcl.category_type'); //获取配置文件中车型类别
		$sale_number = config('tcl.sale_number'); //获取配置文件中车型类别
		$price_interval = config('tcl.price_interval'); //获取配置文件中价格区间
		$age = config('tcl.age'); //获取配置文件中车龄区间
		$age_begin_end = config('tcl.age_begin_end'); //获取配置文件中车龄区间起始
		$price_begin_end = config('tcl.price_begin_end'); //获取配置文件中价格区间起始
		$current_page = 'home';
		$title = '【淘车乐_二手车_二手车交易市场_二手车网上交易平台_石家庄二手车交易平台】_淘车乐二手车交易网';
		// dd($price_interval);
		return view('show.home.index', compact('cars', 'recomment_brands', 'age', 'price_interval', 'category_type', 'show_city_name', 'current_page', 'title', 'all_top_brands', 'all_nums'));
	}
}
