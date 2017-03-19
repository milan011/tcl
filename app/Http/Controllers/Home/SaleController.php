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

class SaleController extends CommonController
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
    public function index()
    {
        $all_top_brands = $this->brand->getChildBrand(0);
        $current_page   = 'sale';
        $title           = '免费卖车【淘车乐_二手车_二手车交易市场_二手车网上交易平台_石家庄二手车交易平台】_淘车乐二手车交易网';
        // dd($all_top_brands);
        return view('home.sale.index', compact('all_top_brands', 'current_page', 'title'));
    }
}
