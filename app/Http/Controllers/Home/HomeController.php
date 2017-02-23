<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use DB;
use Debugbar;
use View;
use Carbon;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Repositories\Car\CarRepositoryContract;
use App\Repositories\Brand\BrandRepositoryContract;

class HomeController extends Controller
{   
    protected $car;
    protected $brand;

    public function __construct(
        CarRepositoryContract $car,
        BrandRepositoryContract $brand
    ) {
        $this->brand = $brand;
        $this->car   = $car;
        // $this->middleware('brand.create', ['only' => ['create']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // dd($request->all());
        // dd($request->method());

        $request['car_status'] = '1';
        $request['home']       = '1';

        $cars = $this->car->getAllcars($request);

        // 推荐品牌
        $recomment_brands = $this->brand->getRecommentBrandsWithBefore();
        // dd($recomment_brands);
        // dd($cars);
        /*foreach ($cars as $key => $value) {
            p($value->id);
            dd($value->hasOneImagesOnFirst->filename);
        }
        exit;*/

        return view('home.home.index', compact('cars', 'recomment_brands'));
    }
}
