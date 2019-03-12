<?php

namespace App\Http\Controllers\Mobel;

use Illuminate\Http\Request;
use DB;
use App\PaiMai;
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
// use App\Http\Requests\CustomerSale\StoreCustomerSaleRequest;
use App\Repositories\Sale\SaleRepositoryContract;

class SaleController extends CommonController
{   
    protected $car;
    protected $brand;
    protected $request;
    protected $shop;
    protected $sale;

    public function __construct(
        CarRepositoryContract $car,
        BrandRepositoryContract $brand,
        ShopRepositoryContract $shop,
        SaleRepositoryContract $sale,
        Request $request
    ) {
        $this->brand = $brand;
        $this->car   = $car;
        $this->shop  = $shop;
        $this->request = $request;
        $this->sale = $sale;
        // $this->middleware('brand.create', ['only' => ['create']]);
        parent::__construct($request);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $sel_city_id   = (null !==Session('chosen_city_id')) ? Session('chosen_city_id') : Session('current_city');
        // dd($request->get('type'));

        $type = 0;
        if(!empty($request->get('type'))){ //报名类型
            $type = $request->get('type');
        }
        // dd(Session::all());
        $sel_city = getSelCity($sel_city_id, $this->shop); //车源来自城市信息

        $show_city_name = $sel_city['show_city_name'];       
        $chosen_city_selection = Session('chosen_city_id');
        $show_city_name = $sel_city['show_city_name']; 

        $all_top_brands = $this->brand->getChildBrand(0);
        $current_page   = 'sale';
        $title           = '免费卖车【淘车乐_二手车_二手车交易市场_二手车网上交易平台_石家庄二手车交易平台】_淘车乐二手车交易网';
        // dd($all_top_brands);
        return view('mobel.sale.index', compact('all_top_brands', 'type', 'current_page', 'title', 'show_city_name'));
    }

    /**
     * Store a newly created resource in storage.
     * 客户卖车信息登记
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $customerSaleRequest)
    {   
        // p($request->all());exit;
        $current_ip = $customerSaleRequest->getClientIp();
        // $current_ip = '106.117.13.179';
        $city_info  = getCurrentCityByIp($current_ip);
        // dd('hehe');
        // dd($current_ip);
        // dd($city_info);
        // $current_city = Area::where('name', substr($city_info, 0, (strlen($city_info)-3)))->first();

        // dd($current_city);
        // p($customerSaleRequest->all());exit;
        $customerSaleRequest['city_id']   = $city_info->id;
        $customerSaleRequest['city_name'] = $city_info->name;
        $customerSaleRequest['source_type'] = '2';
        $customerSaleRequest['enroll_type'] = $customerSaleRequest->enroll_type;
        $getInsertedId = $this->sale->create($customerSaleRequest);
        // p(lastSql());exit;
        /*if(!$getInsertedId){
            // dd('hehe sb');
            return redirect()->route('admin.transcation.edit', ['transcation'=>'1'])->withInput();
        }*/
        return response()->json(array(
            'status' => 200,
            'msg'    => '您的信息已记录,销售顾问会尽快跟您联系',
        ));

        // return response()->json($getInsertedId);
    }

    /**
     * Store a newly created resource in storage.
     * 客户卖车信息登记
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storePaiMai(Request $request)
    {   
        // p($customerSaleRequest->all());exit;
        $current_ip = $request->getClientIp();
        $current_ip = '106.117.13.179';
        $city_info  = getCurrentCityByIp($current_ip);
        // dd('hehe');
        // dd($current_ip);
        // dd($city_info);
        // $current_city = Area::where('name', substr($city_info, 0, (strlen($city_info)-3)))->first();

        // dd($current_city);
        // p($request->all());exit;
        $request['city_id']   = $city_info->id;
        $request['city_name'] = $city_info->name;

        $customerPaiMai = new PaiMai();

        $telephoneRepeat = PaiMai::select(['id', 'name', 'telephone'])
                                 ->where('telephone', $request->telephone)
                                 ->first();

        if(!empty($telephoneRepeat)){
            return response()->json(array(
                'status' => 200,
                'msg'    => '您已报名成功,请勿重复报名',
            ));
        }
/*        $requestData['category_id'] = empty($requestData->type) ? '' : $requestData->type;
        $requestData['brand_id'] = empty($requestData->brand) ? '' : $requestData->brand;
        $requestData['car_factory'] = empty($requestData->company) ? '' : $requestData->company;*/

        // dd($requestData->all());
        $input =  array_replace($request->all());
        $customerPaiMai->fill($input);
        $newInfo  = $customerPaiMai->create($input); 

        // dd($newInfo);
        // p(lastSql());exit;
        /*if(!$getInsertedId){
            // dd('hehe sb');
            return redirect()->route('admin.transcation.edit', ['transcation'=>'1'])->withInput();
        }*/
        return response()->json(array(
            'status' => 200,
            'msg'    => '报名成功,淘车乐期待您的光临',
        ));

        // return response()->json($getInsertedId);
    }

    //获得子品牌
    public function getChildBrand(Request $request){

        // dd($request->all());
        $brand_id = $request->input('pid');

        $brands = $this->brand->getChildBrand($brand_id);

        // p($brands->toJson());exit;
        if($brands->count() > 0){

            return response()->json(array(
                'status' => 1,
                'data'   => $brands,
                'message'   => '获取品牌列表成功'
            ));
        }else{

            return response()->json(array(
                'status' => 0,
                'message'   => '该品牌下无子品牌'
            ));
        }        
    }
}
