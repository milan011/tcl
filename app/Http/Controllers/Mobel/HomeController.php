<?php

namespace App\Http\Controllers\Mobel;

use App\Repositories\Brand\BrandRepositoryContract;
use App\Repositories\Car\CarRepositoryContract;
use App\Repositories\Shop\ShopRepositoryContract;
use App\Repositories\User\UserRepositoryContract;
use Illuminate\Http\Request;
use Auth;
use View;
use Session;

class HomeController extends CommonController {
	protected $car;
	protected $brand;
	protected $request;
	protected $user;
	protected $shop;

	public function __construct(
		CarRepositoryContract $car,
		BrandRepositoryContract $brand,
		UserRepositoryContract $user,
		ShopRepositoryContract $shop,

		Request $request
	) {
		$this->brand = $brand;
		$this->car = $car;
		$this->shop = $shop;
		$this->request = $request;
		$this->user = $user;
		// $this->middleware('brand.create', ['only' => ['create']]);
		parent::__construct($request);
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index(Request $request, $city = '') {

		// dd($request->getClientIp());
		$sel_city = getSelCity($city, $this->shop); //车源来自城市信息

		// $weiSdk = $this->getWeiSignPackage();
		$wxShouQuan = '';
		$wxShouQuanUrl = '';
		if(Auth::user()){ //授权用户
            $wxShouQuan = '?manager='.Auth::user()->id;
        }
        if(!empty($request->get('manager'))){
            // dd($this->user->find($request->get('manager'))->belongsToShop->name);
            $wxUserInfo = $this->user->findUsedUser($request->get('manager'));
            $wxShouQuanUrl = '?manager='.$wxUserInfo->id;
        }

        // dd($wxShouQuan);
		/*p('hehe');
		dd($weiSdk);*/
		// dd($jssdk->GetSignPackage());
		// dd(Session::all());
		$show_city_name = $sel_city['show_city_name'];

		$select_condition['car_status'] = '1';
		$select_condition['shop_list']  = $sel_city['shop_list'];
		$select_condition['plate_city'] = $sel_city['show_city_id'];

		// dd($select_condition);

		$cars = $this->car->getAllCarsWithBefore($select_condition);
		// dd(lastSql());
		// dd($cars);
		// 推荐品牌
		$recomment_brands      = $this->brand->getRecommentBrandsWithBefore();

		// dd($recomment_brands);
		$sale_number           = config('tcl.sale_number'); //获取配置文件中车型类别
		$price_interval_mobel  = config('tcl.price_interval_mobel'); //获取配置文件中价格区间
		$price_begin_end_mobel = config('tcl.price_begin_end_mobel'); //获取配置文件中价格区间起始
		$title = '【淘车乐_二手车_二手车交易市场_二手车网上交易平台_石家庄二手车交易平台】_淘车乐二手车交易网';

		return view('mobel.home.index', compact('cars', 'wxShouQuan','wxShouQuanUrl','recomment_brands', 'price_interval_mobel',  'show_city_name', 'title'));
	}

	public function changeCity(Request $request, $city = ''){

		/*$show_city_name = (null !==Session('chosen_city_name')) ? Session('chosen_city_name') : Session('current_city_name');
		dd(Session::all());
		dd($show_city_name);*/

		$sel_city = getSelCity($city, $this->shop); //车源来自城市信息

		$wxShouQuan = '';
		$wxShouQuanUrl = '';
		$managerId = '';
		if(Auth::user()){ //授权用户
            $wxShouQuan = '?manager='.Auth::user()->id;
        }
        if(!empty($request->get('manager'))){
            // dd($this->user->find($request->get('manager'))->belongsToShop->name);
            $wxUserInfo = $this->user->findUsedUser($request->get('manager'));
            $wxShouQuanUrl = '?manager='.$wxUserInfo->id;
            $managerId  = $this->request->get('manager');
        }

		// dd(Session::all());
		// dd($current_city_name);
		$show_city_name = $sel_city['show_city_name'];

		return view('mobel.home.changeCity', compact('cars', 'wxShouQuan','wxShouQuanUrl', 'managerId', 'show_city_name'));
	}
}
