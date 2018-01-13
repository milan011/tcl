<?php

namespace App\Http\Controllers\Show;

use Illuminate\Http\Request;
use DB;
use Debugbar;
use View;
use Carbon;
use Session;
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
        if(isMobile()){
            return redirect()->route('mobel.index');
        }
        // $begin = $this->getCurrentTime();
        // p($this->request->method());exit;  //{品牌b，车系c}，{车辆类型t，门店s}，{车龄a，价格p}
        // dd('hh');
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
                case 'y':
                    # 颜色
                    $select_condition['color'] = getConditionContent($value);
                    $url_condition['y'] = getConditionContent($value);
                    break;
                case 'x':
                    # 变速箱
                    $select_condition['gearbox'] = getConditionContent($value);
                    $url_condition['x'] = getConditionContent($value);
                    break;
                default:
                    # code...
                    break;
            }
        }
        // dd($url_condition);
        // dd(Session('current_city'));
        
        $sel_city_id   = (null !==Session('chosen_city_id')) ? Session('chosen_city_id') : Session('current_city');

        // dd(Session::all());
        $sel_city = getSelCity($sel_city_id, $this->shop); //车源来自城市信息

        $show_city_name = $sel_city['show_city_name'];       
        $chosen_city_selection = Session('chosen_city_id');
        
        // dd($chosen_city_selection);
        // dd($sel_city);

        if(!empty($select_condition['shop_id'])){
            //有门店选择条件,门店是否为县级门店,若真则显示该门店的下级门店
            if($this->shop->isXianJiMenDian($select_condition['shop_id'])){
                //获取该门店下级列表,并删除门店条件,增加shop_list条件
                $shops = $this->shop->getShopsBelongs($select_condition['shop_id']);

                foreach ($shops as $key => $value) {
                    $shop_list[] = $value->id;
                }

                $select_condition['shop_list'] = $shop_list;
                // unset($select_condition['shop_id']);
            }       
        }else{
            //无门店选择,则获取该城市所有门店
           $select_condition['shop_list'] = $sel_city['shop_list']; 
        }

        $select_condition['plate_city'] = $sel_city['show_city_id'];
        
        // dd($select_condition);
        // 符合条件车源
        $cars = $this->car->getAllCarsWithBefore($select_condition);
        // dd(lastSql());
        //p($cars->total());
        //p($cars->count());
        //dd($cars); 
        // dd($cars[0]->hasOneImagesOnFirst);

        // 推荐品牌
        $recomment_brands    = $this->brand->getRecommentBrandsWithBefore();
        //推荐车型
        // $recomment_categorys = $this->brand->getRecommentCategorysWithBefore();
        //门店列表
        $all_shop = $this->shop->getAllshopsWithBefore();
        // dd($all_shop[37]);

        //根据首字母取得所有品牌分类列表
        $letter_list               = collect($this->brand->getBransLetter())->chunk(8)->toArray();
        // $letter_list_with_no_group = $this->brand->getBransLetter();
        // $brand_letter_list = collect($this->brand->getBransWithLetter())->chunk(8)->toArray();
        $brand_letter_list = $this->brand->getBransWithLetter();
        $brand_letter_list_with_no_chunk = $this->brand->getBransWithLetter();
        // dd($letter_list);
        // dd($brand_letter_list_with_no_chunk);

        //当前车型信息
        $current_cate = $this->brand->getCurrentBrand($select_condition);
        
        $current_category = $current_cate['category'];
        // dd($current_category);
        $current_brand    = $current_cate['brand'];

        $gearbox         = config('tcl.gearbox'); //获取配置文件中变速箱类别
        $out_color       = config('tcl.out_color'); //获取配置文件中外观颜色
        $out_color_mobel = config('tcl.out_color_mobel'); //获取配置文件中外观颜色
        $capacity        = config('tcl.capacity'); //获取配置文件排量
        $category_type   = config('tcl.category_type'); //获取配置文件中车型类别
        $sale_number     = config('tcl.sale_number'); //获取配置文件中车型类别
        $price_interval  = config('tcl.price_interval'); //获取配置文件中价格区间
        $age             = config('tcl.age'); //获取配置文件中车龄区间

        // dd($out_color_mobel);

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
        
        $brand_letter_list = collect($brand_letter_list)->chunk(8);
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
        // dd($url_condition);
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
        // dd($category_type);
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

        foreach ($gearbox as $key => $value) { //变速箱添加筛选超链接
            // dd($url_condition);
            $url_condition_x      = $url_condition;
            $url_condition_x['x'] = $key;
            $select_url = getSelectUrl($url_condition_x);
            $gearbox_with_url[$key]['content'] = $value;
            $gearbox_with_url[$key]['url']     = $select_url;
        }

        // 清除变速箱筛选超链接
        foreach ($url_condition_x as $key => $value) {
            unset($url_condition_x['x']);
            $clean_gearbox_interval_url = $select_url = getSelectUrl($url_condition_x);
        }

        $gearbox_with_url[0]['url'] = $clean_gearbox_interval_url;
        // dd($gearbox_with_url);
        foreach ($out_color_mobel as $key => $value) { //颜色添加筛选超链接
            // dd($url_condition);
            $url_condition_y      = $url_condition;
            $url_condition_y['y'] = $key;
            $select_url = getSelectUrl($url_condition_y);
            $color_with_url[$key]['content'] = $value['name'];
            $color_with_url[$key]['url']     = $select_url;
            $color_with_url[$key]['des']     = $value['des'];
        }
        // 清除颜色筛选超链接
        foreach ($url_condition_y as $key => $value) {
            unset($url_condition_y['y']);
            $clean_color_interval_url = $select_url = getSelectUrl($url_condition_y);
        }

        $color_with_url[0]['url'] = $clean_color_interval_url;
        // dd($color_with_url);

        //已选条件处理
        $current_condition = [];

        if(!empty($url_condition['b'])){ //当前品牌
            $brand = $this->brand->find($url_condition['b']);
            $current_condition['brand']['content'] = '品牌：'.$brand->name;
            $current_condition['brand']['selected'] = $brand->name;
            $current_condition['brand']['url'] = $clean_recomment_brands_url;
        }

        if(!empty($url_condition['c'])){ //当前车型
            $brand = $this->brand->find($url_condition['c']);
            $current_condition['category']['content'] = '车系：'.$brand->name;
            $current_condition['category']['selected'] = $brand->name;
            $current_condition['category']['url'] = $clean_current_category_url;
        }

        if(!empty($url_condition['s'])){ //当前门店
            // dd($url_condition['s']);
            $shop = $this->shop->find($url_condition['s']);
            // dd(lastsql());
            // dd($shop);
            $current_condition['shop']['content'] = '门店：'.$shop->name;
            $current_condition['shop']['selected'] = $shop->name;
            $current_condition['shop']['url'] = $clean_shop_url;
        }

        if(!empty($url_condition['t'])){ //当前车辆类型

            $current_condition['category_type']['content'] = '类型：'.$category_type[$url_condition['t']];
            $current_condition['category_type']['selected'] = $category_type[$url_condition['t']];
            $current_condition['category_type']['url']     = $clean_category_type_url;
        }

        if(!empty($url_condition['a'])){ //当前车龄区间

            $current_condition['age']['content']  = '车龄：'.$age[$url_condition['a']];
            $current_condition['age']['selected'] = $age[$url_condition['a']];
            $current_condition['age']['url']     = $clean_age_url;
        }

        if(!empty($url_condition['p'])){ //当前价格区间

            $current_condition['price']['content'] = '价格：'.$price_interval[$url_condition['p']];
            $current_condition['price']['selected'] = $price_interval[$url_condition['p']];
            $current_condition['price']['url']     = $clean_price_interval_url;
        }

        if(!empty($url_condition['x'])){ //当前变速箱条件

            $current_condition['gearbox']['content'] = '变速箱：'.$gearbox[$url_condition['x']];
            $current_condition['gearbox']['selected'] = $gearbox[$url_condition['x']];
            $current_condition['gearbox']['url']     = $clean_gearbox_interval_url;
        }

        if(!empty($url_condition['y'])){ //当前颜色条件
            // dd($out_color_mobel);
            $current_condition['color']['content'] = '颜色：'.$out_color_mobel[$url_condition['y']]['name'];
            $current_condition['color']['selected'] = $out_color_mobel[$url_condition['y']]['name'];
            $current_condition['color']['url']     = $clean_color_interval_url;
        }

        // dd($current_condition);

        $current_page   = 'cate';
        $title          = '【淘车乐_二手车_二手车交易市场_二手车网上交易平台_石家庄二手车交易平台】_淘车乐二手车交易网';
        // dd($cars->links());
        /*$end = $this->getCurrentTime();
        $spend = $end - $begin;
    
        echo "脚本执行时间为:".$spend."\n";*/
        return view('show.cate.index', compact(
            'cars', 
            'gearbox', 
            'out_color',
            'capacity', 
            'category_type_with_url',
            'sale_number',
            'recomment_brands',
            'price_with_url', 
            'age_with_url', 
            'gearbox_with_url',
            'color_with_url',
            'all_shop', 
            'letter_list', 
            'brand_letter_list',
            'brand_letter_list_with_no_chunk',
            'current_category',
            'clean_price_interval_url',
            'clean_age_url',
            'clean_category_type_url',
            'clean_recomment_brands_url',
            'clean_shop_url',
            'current_brand',
            'clean_current_category_url',
            'current_condition',
            'show_city_name',
            'current_page',
            'title',
            'chosen_city_selection'
        ));
    }

    /*public function getCurrentTime ()  {  
        list ($msec, $sec) = explode(" ", microtime());  
        return (float)$msec + (float)$sec;  
    }*/
}
