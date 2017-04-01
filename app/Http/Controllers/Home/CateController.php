<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use DB;
use Debugbar;
use View;
use Carbon;
use App\Shop;
use App\Area;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Repositories\Car\CarRepositoryContract;
use App\Repositories\Brand\BrandRepositoryContract;
use App\Repositories\Shop\ShopRepositoryContract;


class CateController extends CommonController
{   
    protected $car;
    protected $brand;
    protected $shop;
    protected $request;

    public function __construct(
        CarRepositoryContract $car,
        BrandRepositoryContract $brand,
        ShopRepositoryContract $shop,
        Request $request
    ) {
        $this->car = $car;
        $this->brand = $brand;
        $this->shop = $shop;
        $this->request = $request;
        // $this->middleware('brand.create', ['only' => ['create']]);
        parent::__construct($request);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($brand='', $condition='')
    {

        // $begin = $this->getCurrentTime();
        //p($conditon);exit;  //{品牌b，车系c}，{车辆类型t，门店s}，{车龄a，价格p}

        $conditions = $brand .'-'. $condition;

        if(!empty($conditions)){
            // dd($conditons);
            $condition_arr = explode('-', $conditions);
        }

        /*if(starts_with($brand, 'b')){
            dd('品牌');
        }elseif(starts_with($brand, 'c')){
            dd('车系');
        }*/

        //两个参数均为可选，当参数2为空，判断筛选条件是品牌或者车辆类型、门店等，字符串以‘b’或者‘c’开始为品牌，否则为其他

        //$value = str_contains($conditon, '-'); //字符串是否包含给定值
        //$conditon = explode('-', $conditon);

        // dd(array_filter($condition_arr));

        $select_condition = []; //筛选条件数组
        $url_condition    = []; //url处理数组

        foreach (array_filter($condition_arr) as $key => $value) {
            switch (getConditionType($value)) {
                case 'b':
                    # 品牌
                    $select_condition['brand_id'] = getConditionContent($value);
                    $url_condition['b'] = getConditionContent($value);
                break;
                case 'c':
                    # 车系
                    $select_condition['category_id'] = getConditionContent($value);
                    $url_condition['c'] = getConditionContent($value);
                break;
                case 't':
                    # 车型类别(轿车、皮卡等)
                    $select_condition['category_type'] = getConditionContent($value);
                    $url_condition['t'] = getConditionContent($value);
                break;
                case 's':
                    # 门店
                    $select_condition['shop_id'] = getConditionContent($value);
                    $url_condition['s'] = getConditionContent($value);
                break;
                case 'p':
                    # 价格
                    $select_condition['price'] = getConditionContent($value);
                    $url_condition['p'] = getConditionContent($value);
                break;
                case 'a':
                    # 车龄
                    $select_condition['age'] = getConditionContent($value);
                    $url_condition['a'] = getConditionContent($value);
                    break;
                case 'd':
                    # 城市
                    $select_condition['city'] = getConditionContent($value);
                    $url_condition['d'] = getConditionContent($value);
                    break;
                default:
                    # code...
                    break;
            }
        }
        // dd($url_condition);
        // dd(Session('current_city'));
        // dd($select_condition);

        if(!empty($select_condition['city'])){
            // 选择城市，筛选该城市所有门店
            $city_shops = $this->shop->getShopsInCity($select_condition['city']);

            $city_name = Area::select('name')->find($select_condition['city'])->name;

            // $current_city_name = $city_name;
            session(['chosen_city_name' => $city_name]);
            $chose_city = $select_condition['city'];

        }else{
            //未选择城市，默认为用户所在城市
            $city_shops = $this->shop->getShopsInCity(Session('current_city'));
            session(['chosen_city_name' => NULL]);
            $current_city_name = Session('current_city_name');
        }
        // dd($current_city_name);
        if(count($city_shops) == 0 ){

            $city_shops = $this->shop->getShopsInCity('138');
        }
        
        foreach ($city_shops as $key => $value) {
            $shop_list[] = $value->id;
        }

        $select_condition['shop_list'] = $shop_list;
        // 符合条件车源
        $cars = $this->car->getAllCarsWithBefore($select_condition);
        // dd($cars); 
        // dd($cars[0]->hasOneImagesOnFirst);

        // 推荐品牌
        $recomment_brands = $this->brand->getRecommentBrandsWithBefore();
        // dd(lastsql());
        // dd($recomment_brands);
        //门店列表
        $all_shop = Shop::where('status', '1')->get();
        // dd($all_shop);

        //根据首字母取得所有品牌分类列表
        $letter_list       = $this->brand->getBransLetter();
        $brand_letter_list = $this->brand->getBransWithLetter();
        // p(lastsql());
        // dd($brand_letter_list);

        //当前车型信息
        $current_cate = $this->brand->getCurrentBrand($select_condition);
        
        $current_category = $current_cate['category'];
        $current_brand    = $current_cate['brand'];

        $gearbox        = config('tcl.gearbox'); //获取配置文件中变速箱类别
        $out_color      = config('tcl.out_color'); //获取配置文件中外观颜色
        $capacity       = config('tcl.capacity'); //获取配置文件排量
        $category_type  = config('tcl.category_type'); //获取配置文件中车型类别
        $sale_number    = config('tcl.sale_number'); //获取配置文件中车型类别
        $price_interval = config('tcl.price_interval'); //获取配置文件中价格区间
        $age            = config('tcl.age'); //获取配置文件中车龄区间

        // p($select_condition);

        // dd($current_category);
        // dd($url_condition);

        foreach ($all_shop as $key => $value) { //门店添加筛选超链接

            $url_condition_s      = $url_condition;
            $url_condition_s['s'] = $value->id;
            $select_url = getSelectUrl($url_condition_s);
            $value['url'] = $select_url;
        }

        // 清除门店筛选超链接
        foreach ($url_condition_s as $key => $value) {
            unset($url_condition_s['s']);
            $clean_shop_url = getSelectUrl($url_condition_s);
        }
        
        // dd($clean_shop_url);exit;

        foreach ($brand_letter_list as $key => $value) { //所有品牌字母分类筛选超链接

            foreach ($value as $k => $v) {
                $url_condition_b      = $url_condition;
                $url_condition_b['b'] = $v->id;
                $select_url = getSelectUrl($url_condition_b);
                $v['url'] = $select_url;
            }           
        }
        
        // dd($brand_letter_list);
        // dd($current_category);
        foreach ($current_category as $key => $value) { //车辆类型信息添加筛选超链接

            $url_condition_c      = $url_condition;
            $url_condition_c['c'] = $value['id'];
            // dd($url_condition_c);
            $select_url = getSelectUrl($url_condition_c);

            //$current_category_with_url[$key]['content'] = $value;
            //$current_category_with_url[$key]['url']     = $select_url;
            $current_category[$key]['url'] = $select_url;
        }
        // dd($current_category);
        // 清除车辆类型信超链接
        foreach ($url_condition_c as $key => $value) {
            unset($url_condition_c['c']);
            $clean_current_category_url =  getSelectUrl($url_condition_c);
        }
        
        // dd($current_category);

        foreach ($recomment_brands as $key => $value) { //品牌信息添加筛选超链接

            $url_condition_b      = $url_condition;
            $url_condition_b['b'] = $value->id;
            // dd($url_condition_b);
            unset($url_condition_b['c']);
            $select_url = getSelectUrl($url_condition_b);
            $value['url'] = $select_url;
        }

        // 清除品牌信息添加超链接
        foreach ($url_condition_b as $key => $value) {
            unset($url_condition_b['b']);
            $clean_recomment_brands_url =  getSelectUrl($url_condition_b);
        }
        // dd($url_condition_b);
        // dd($recomment_brands);
        
        foreach ($category_type as $key => $value) { //车辆类型信息添加筛选超链接

            $url_condition_t      = $url_condition;
            $url_condition_t['t'] = $key;
            $select_url = getSelectUrl($url_condition_t);
            $category_type_with_url[$key]['content'] = $value;
            $category_type_with_url[$key]['url']     = $select_url;
        }

        // 清除车辆类型信息添加超链接
        foreach ($url_condition_t as $key => $value) {
            unset($url_condition_t['t']);
            $clean_category_type_url = getSelectUrl($url_condition_t);
        }

        // dd($category_type_with_url);

        foreach ($age as $key => $value) { //车龄信息添加筛选超链接
            // dd($url_condition);
            $url_condition_a      = $url_condition;
            $url_condition_a['a'] = $key;
            $select_url = getSelectUrl($url_condition_a);
            $age_with_url[$key]['content'] = $value;
            $age_with_url[$key]['url']     = $select_url;
        }

        // 清除车龄信息添加超链接
        foreach ($url_condition_a as $key => $value) {
            unset($url_condition_a['a']);
            $clean_age_url = $select_url = getSelectUrl($url_condition_a);
        }

        $age_with_url[1]['url'] = $clean_age_url;
        /*dd($age_with_url);
        dd($clean_age_url);*/

        foreach ($price_interval as $key => $value) { //价格区间添加筛选超链接
            // dd($url_condition);
            $url_condition_p      = $url_condition;
            $url_condition_p['p'] = $key;
            $select_url = getSelectUrl($url_condition_p);
            $price_with_url[$key]['content'] = $value;
            $price_with_url[$key]['url']     = $select_url;
        }

        // 清除价格筛选超链接
        foreach ($url_condition_p as $key => $value) {
            unset($url_condition_p['p']);
            $clean_price_interval_url = $select_url = getSelectUrl($url_condition_p);
        }

        $price_with_url[1]['url'] = $clean_price_interval_url;
        // dd($price_with_url);

        //已选条件处理
        $current_condition = [];

        if(!empty($url_condition['b'])){ //当前品牌
            $brand = $this->brand->find($url_condition['b']);
            $current_condition['brand']['content'] = '品牌：'.$brand->name;
            $current_condition['brand']['url'] = $clean_recomment_brands_url;
        }

        if(!empty($url_condition['c'])){ //当前车型
            $brand = $this->brand->find($url_condition['c']);
            $current_condition['category']['content'] = '车系：'.$brand->name;
            $current_condition['category']['url'] = $clean_current_category_url;
        }

        if(!empty($url_condition['s'])){ //当前门店
            // dd($url_condition['s']);
            $shop = $this->shop->find($url_condition['s']);
            // dd(lastsql());
            // dd($shop);
            $current_condition['shop']['content'] = '门店：'.$shop->name;
            $current_condition['shop']['url'] = $clean_shop_url;
        }

        if(!empty($url_condition['t'])){ //当前车辆类型

            $current_condition['category_type']['content'] = '级别：'.$category_type[$url_condition['t']];
            $current_condition['category_type']['url']     = $clean_category_type_url;
        }

        if(!empty($url_condition['a'])){ //当前车龄区间

            $current_condition['age']['content'] = '车龄：'.$age[$url_condition['a']];
            $current_condition['age']['url']     = $clean_age_url;
        }

        if(!empty($url_condition['p'])){ //当前价格区间

            $current_condition['price']['content'] = '价格：'.$price_interval[$url_condition['p']];
            $current_condition['price']['url']     = $clean_price_interval_url;
        }

        // dd($current_condition);

        $current_page   = 'cate';
        $title          = '【淘车乐_二手车_二手车交易市场_二手车网上交易平台_石家庄二手车交易平台】_淘车乐二手车交易网';

        /*$end = $this->getCurrentTime();
        $spend = $end - $begin;

        echo "脚本执行时间为:".$spend."\n";*/
        return view('home.cate.index', compact(
            'cars', 
            'gearbox', 
            'out_color',
            'capacity', 
            'category_type_with_url',
            'sale_number',
            'recomment_brands',
            'price_with_url', 
            'age_with_url', 
            'all_shop', 
            'letter_list', 
            'brand_letter_list',
            'current_category',
            'clean_price_interval_url',
            'clean_age_url',
            'clean_category_type_url',
            'clean_recomment_brands_url',
            'clean_shop_url',
            'current_brand',
            'clean_current_category_url',
            'current_condition',
            'current_city_name',
            'chose_city',
            'current_page',
            'title'
        ));
    }

    /*public function getCurrentTime ()  {  
        list ($msec, $sec) = explode(" ", microtime());  
        return (float)$msec + (float)$sec;  
    }*/
}
