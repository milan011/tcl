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

        return view('home.sale.index');
    }
}
