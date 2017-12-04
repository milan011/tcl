<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
//use Auth;
//use Gate;
//use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Cars;
use App\Want;
use App\User;

use Excel;

class ExcelController extends Controller
{
    //Excel文件导出功能 By Laravel学院
    public function export(){
        //车源搜索内容列
        $select_columns_want = ['id', 'want_code', 'name', 'want_type', 'brand_id', 'categorey_id', 'car_factory', 'cate_id', 'capacity', 'gearbox', 'bottom_price', 'top_price', 'age', 'mileage', 'sale_number', 'out_color', 'inside_color', 'customer_id', 'creater_id', 'want_area', 'remark', 'want_status', 'shop_id', 'created_at', 'updated_at','recommend','is_top','xs_remark', 'alternate_car', 'alternate_car_another'];

        //求购搜索内容列
        $select_columns_car = ['id', 'name', 'car_code', 'vin_code', 'capacity', 'top_price', 'plate_date', 'plate_end', 'mileage', 'age', 'out_color', 'inside_color', 'gearbox', 'plate_provence', 'plate_city', 'safe_end', 'sale_number', 'categorey_type', 'shop_id', 'creater_id', 'created_at', 'updated_at', 'description', 'bottom_price', 'safe_type','recommend', 'is_top', 'car_type', 'car_status', 'customer_id', 'guide_price', 'pg_description','xs_description', 'cate_id', 'appraiser_price', 'is_appraiser', 'appraiser_at'];

        $users = User::select('id', 'name', 'nick_name')
                      ->whereIn('shop_id', ['2', '38'])
                      ->get();

        /*foreach ($users as $key => $value) {
            
            p($value->id);
            p($value->nick_name);
        }exit;*/

        $begin_date = '2017-11-01';
        $end_date   = '2017-12-01';
        $out_color  = config('tcl.out_color'); //获取配置文件中外观颜色

        $creater_list = ['64', '65', '78', '89', '36', '4', '105', '114',
            '116', '117', '118'];
        //车源搜索条件
        $query_cars = new Cars();
        $query_cars = $query_cars->whereIn('creater_id', $creater_list);
        $query_cars = $query_cars->where('created_at', '<=', $end_date);
        $query_cars = $query_cars->where('created_at', '>=', $begin_date);

        //求购搜索条件
        $query_wants = new Want();
        $query_wants = $query_wants->whereIn('creater_id', $creater_list);
        $query_wants = $query_wants->where('created_at', '<=', $end_date);
        $query_wants = $query_wants->where('created_at', '>=', $begin_date);       

        $cars_info = $query_cars->select($select_columns_car)
                     ->orderBy('creater_id', 'asc')
                     ->orderBy('updated_at', 'desc')
                     ->get();

        // dd(lastSql());
        // dd($cars_info[0]);

        $wants_info = $query_wants->select($select_columns_want)
                     ->orderBy('creater_id', 'asc')
                     ->orderBy('updated_at', 'desc')
                     ->get();

        $cars_info_content = [];
        foreach ($cars_info as $key => $value){

            $cars_info_content[] =  array(
                $value->name,                  
                $value->top_price,
                substr($value->plate_date, 0 ,10),
                $value->mileage,
                $out_color[$value->out_color],
                $value->belongsToUser->nick_name,
                $value->belongsToShop->shop_name,
                substr($value->created_at, 0 ,10),
            );
        }

        array_unshift($cars_info_content, ['车型','价格','上牌','里程','颜色','负责人','门店','上传日期']);

        // dd($cars_info_content);

        $wants_info_content = [];
        foreach ($wants_info as $key => $value){

            $wants_info_content[] =  array(
                $value->name,                  
                $value->top_price,
                $value->mileage,
                $out_color[$value->out_color],
                $value->belongsToUser->nick_name,
                $value->belongsToShop->shop_name,
                substr($value->created_at, 0 ,10),
            );
        }

        array_unshift($wants_info_content, ['车型','价格','里程','颜色','负责人', '门店','上传日期']);


        $excels = Excel::create('车源统计',function($excel) use ($cars_info_content){
            $excel->sheet('score', function($sheet) use ($cars_info_content){
                $sheet->rows($cars_info_content);
            });
        });

        /*$excels = Excel::create('求购统计',function($excel) use ($wants_info_content){
            $excel->sheet('score', function($sheet) use ($wants_info_content){
                $sheet->rows($wants_info_content);
            });
        });*/
        // dd($excels->save());
        $excels->export('xls');
    }
}
