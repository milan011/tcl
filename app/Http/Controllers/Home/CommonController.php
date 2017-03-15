<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use DB;
use Debugbar;
use Session;
use View;
use Carbon;
use App\Http\Requests;
use App\Area;
use App\Http\Controllers\Controller;

class CommonController extends Controller
{   
    public function __construct(

        Request $request
    ) {

        $this->request = $request;
        // $this->middleware('brand.create', ['only' => ['create']]);

        $current_ip = $request->getClientIp();
        $current_ip = '106.117.13.179';
        $city_info  = getCurrentCityByIp($current_ip);

        $current_city = Area::where('name', substr($city_info, 0, (strlen($city_info)-3)))->first();

        // dd(lastSql());
        // dd($current_city);
        session(['current_city' => $current_city->id]); //当前城市存入session
        session(['current_city_name' => $current_city->name]); //当前城市存入session

        // dd(Session::all());
    }
}
