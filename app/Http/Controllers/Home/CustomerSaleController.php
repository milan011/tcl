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
use App\Http\Requests\CustomerSale\StoreCustomerSaleRequest;

class CustomerSaleController extends CommonController
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
     * Store a newly created resource in storage.
     * 客户卖车信息登记
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCustomerSaleRequest $customerSaleRequest)
    {
        p($customerSaleRequest->all());
        $current_ip = $customerSaleRequest->getClientIp();
        $current_ip = '106.117.13.179';
        $city_info  = getCurrentCityByIp($current_ip);

        $current_city = Area::where('name', substr($city_info, 0, (strlen($city_info)-3)))->first();

        dd($current_city);
        // dd($transcationRequest->all());
        $getInsertedId = $this->transcation->create($transcationRequest);
        // p(lastSql());exit;
        /*if(!$getInsertedId){
            // dd('hehe sb');
            return redirect()->route('admin.transcation.edit', ['transcation'=>'1'])->withInput();
        }*/
        return redirect()->route('admin.transcation.self')->withInput();
    }
}
