<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use DB;
use Debugbar;
use Session;
use View;
use Carbon;
use Ip2Region;
use App\Http\Requests;
use App\Area;
use App\Http\Controllers\Controller;

class CommonController extends Controller
{   
    protected $request;

    public function __construct(

        Request $request
    ) {

        // if(empty(Session('current_city')) || empty(Session('current_city_name'))){
            //若session没有当前城市id或名称,则根据客户ip获得所在城市并写入session
            $this->request = $request;
            $current_ip = $request->getClientIp(); //获取ip
            // dd($current_ip);
            // $current_ip = '106.117.13.179';
            // $current_ip = '219.148.74.209';
            $city_info  = getCurrentCityByIp($current_ip); //根据ip获取城市信息

            // p(($city_info));

            if(isset($city_info)){
                //获取正确的城市信息,存入session
                session(['current_city' => $city_info->id]); //当前城市存入session
                session(['current_city_name' => $city_info->name]); //当前城市存入session
            }else{
                //没有获取城市,则默认为石家庄
                session(['current_city' => '138']); 
                session(['current_city_name' => '石家庄']);
            }
        // }
    }
}
