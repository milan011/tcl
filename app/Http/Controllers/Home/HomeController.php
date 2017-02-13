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

class HomeController extends Controller
{   
    protected $car;

    public function __construct(
        CarRepositoryContract $car
    ) {
        $this->car = $car;
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
        // dd(lastSql());
        // dd($cars);
        /*foreach ($cars as $key => $value) {
            p($value->id);
            dd($value->hasOneImagesOnFirst->filename);
        }
        exit;*/

        return view('home.home.index', compact('cars'));
    }
}
