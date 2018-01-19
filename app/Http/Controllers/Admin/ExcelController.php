<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
//use Auth;
//use Gate;
//use App\Http\Requests;
use App\Http\Controllers\Controller;
use Carbon;
use App\Cars;
use App\Want;
use App\User;
use App\Loan;
use App\Insurance;

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

        $begin_date = '2017-12-01';
        $end_date   = '2018-01-01';
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


        /*$excels = Excel::create('车源统计',function($excel) use ($cars_info_content){
            $excel->sheet('score', function($sheet) use ($cars_info_content){
                $sheet->rows($cars_info_content);
            });
        });*/

        $excels = Excel::create('求购统计',function($excel) use ($wants_info_content){
            $excel->sheet('score', function($sheet) use ($wants_info_content){
                $sheet->rows($wants_info_content);
            });
        });
        // dd($excels->save());
        $excels->export('xls');
    }

    //导出贷款
    public function loanExport(Request $request){
        // dd('hehe');

        //贷款搜索内容列
        $select_columns_car = ['id', 'loan_code', 'name', 'card', 'bill_day', 'telephone', 'car_name', 'cate_id', 'category_id', 'appraiser_price', 'loan_price', 'insurance_loan', 'orther_loan', 'total_loan', 'loan_phase', 'loan_date', 'repayment_frist', 'repayment_everymonth', 'loan_begin_date', 'car_plate_old', 'car_plate_new', 'other_contact1', 'other_contact2', 'other_contact1_phone', 'other_contact2_phone', 'recognizor', 'recognizor_adress', 'recognizor_phone', 'plate_date', 'appraiser_cost', 'poundage', 'qm_profits', 'loan_profits', 'visits_profits', 'loan_channels', 'customer_sorcue', 'customer_id','loan_status', 'insurance_status', 'remark', 'creater_id', 'insurance_provence', 'insurance_city', 'created_at'];


        // p($request->all());
        // p(Carbon::today());
        $now         = Carbon::today();  //当前日期对象
        $waster_date = $now->modify('-7 days');

        /*p($waster_date->toDateString());
        dd($now->toDateString());*/
        /*p($now);
        p($now->toDateString());*/

        $begin_date = !empty($request->begin_date) ? $request->begin_date : $waster_date->toDateString();
        $end_date   = !empty($request->end_date) ? $request->end_date : Carbon::today()->toDateString();
        $loan_channels  = config('tcl.loan_channels'); //获取配置文件中贷款渠道

        /*p($begin_date);
        dd($end_date);*/
        // $creater_list = ['64', '65', '78', '89', '36', '4', '105', '114',
            // '116', '117', '118'];
        //车源搜索条件
        $query_loans = new Loan();
        // $query_loans = $query_loans->whereIn('creater_id', $creater_list);
        $query_loans = $query_loans->where('created_at', '<=', $end_date);
        $query_loans = $query_loans->where('created_at', '>=', $begin_date);       
        $query_loans = $query_loans->where('creater_id', '!=', '1');       
        $query_loans = $query_loans->where('loan_status', '=', '1');       

        $loans_info = $query_loans->select($select_columns_car)
                     ->orderBy('creater_id', 'asc')
                     ->orderBy('updated_at', 'desc')
                     ->get();

        // dd(lastSql());
        // dd($loans_info[2]->card);

        /*$card_info = $loans_info[2]->card;
        echo nl2br($card_info);
        $card_info = str_replace("\r", '', $card_info);
        dd($card_info);*/
        // p($loans_info[0]->belongsToCustomer->customer_indentily_card);exit;

        $loans_info_content = [];
        foreach ($loans_info as $key => $value){

            $loans_info_content[] =  array(
                $value->name,
                $value->belongsToCustomer->customer_indentily_card."\t",
                $value->card."\t",
                $value->bill_day,
                $value->telephone,
                $value->car_name,
                $value->appraiser_price,
                $value->loan_price,
                $value->insurance_loan,
                $value->orther_loan,
                $value->total_loan,
                $value->loan_phase,
                $value->loan_date,
                $value->repayment_frist,
                $value->repayment_everymonth,
                $value->loan_begin_date,
                $value->car_plate_old,
                $value->car_plate_new,
                $value->belongsToCustomer->customer_address,
                $value->other_contact1_phone,
                $value->recognizor,
                $value->recognizor_phone,
                $value->recognizor_adress,
                $value->plate_date,
                $value->poundage,
                $value->qm_profits,
                $value->loan_profits,
                $value->visits_profits,
                '',
                $loan_channels[$value->loan_channels],
                $value->customer_sorcue,
                $value->remark,
                $value->belongsToUser->nick_name,
                substr($value->created_at, 0 ,10),
            );
        }

        array_unshift($loans_info_content, ['客户姓名','身份证号码','客户卡号','账单日','电话','车辆名称','评估价(万)','车贷金额(万)','保险贷款(万)','其他衍生贷款(万)','总贷款(万)','期数(月)','刷卡日期','首月还款','每月还款','次年续保起始日期','旧车牌号','新车牌号','家庭住址','其他联系人电话','担保人','担保人电话','担保人地址','车辆初次登记日期','手续费（元）','汽贸利润（元）','贷款部利润（元）','家访费','家访','贷款渠道','客户渠道','备注', '贷款顾问','创建日期']);

        // dd($loans_info_content);
        $file_name = '贷款统计(';
        $file_name .= $begin_date;
        $file_name .= '至';
        $file_name .= $end_date;
        $file_name .= ')';
        // dd($file_name);
        $excels = Excel::create($file_name,function($excel) use ($loans_info_content){
            $excel->sheet('score', function($sheet) use ($loans_info_content){
                $sheet->setWidth('B', 30);
                $sheet->setWidth('C', 30);
                $sheet->setWidth('E', 20);
                $sheet->setWidth('F', 50);
                $sheet->setWidth('P', 20);
                $sheet->setWidth('Q', 20);
                $sheet->setWidth('R', 20);
                $sheet->setWidth('S', 60);
                $sheet->setWidth('T', 20);
                $sheet->setWidth('X', 20);
                $sheet->setWidth('AE', 20);
                $sheet->setWidth('AF', 40);
                $sheet->rows($loans_info_content);
            });
        });

        // dd($excels->save());
        $excels->export('xls');
    }

    //导出保险
    public function insuranceExport(Request $request){
        // dd('hehe');

        //贷款搜索内容列
        $select_columns_car = ['id', 'insurance_code', 'name', 'company_commercial', 'company_interest', 'car_plate', 'telephone','categorey_id', 'source', 'traffic_date', 'vehicle_date', 'traffic_price', 'vehicle_price', 'vehicle_tax', 'total_price', 'detail', 'interest_rate', 'commercial_rate', 'rebeat', 'royalty_ratio', 'commercial_ratio', 'royalty', 'profit', 'need_pay', 'salesman', 'insurance_status', 'remark', 'customer_id', 'remark', 'creater_id', 'insurance_provence', 'insurance_city', 'created_at'];


        // p($request->all());
        // p(Carbon::today());
        $now         = Carbon::today();  //当前日期对象
        $waster_date = $now->modify('-7 days');

        /*p($waster_date->toDateString());
        dd($now->toDateString());*/
        /*p($now);
        p($now->toDateString());*/

        $begin_date = !empty($request->begin_date) ? $request->begin_date : $waster_date->toDateString();
        $end_date   = !empty($request->end_date) ? $request->end_date : Carbon::today()->toDateString();
        $insurance_company_interest   = config('tcl.insurance_company_interest'); //获取配置文件中商险公司
        $insurance_company_commercial = config('tcl.insurance_company_commercial'); //获取配置文件中交强公司
        $insurance_sor                = config('tcl.insurance_sor'); //获取配置文件中保险来源

        /*p($begin_date);
        dd($end_date);*/
        // $creater_list = ['64', '65', '78', '89', '36', '4', '105', '114',
            // '116', '117', '118'];
        //车源搜索条件
        $query_insurances = new Insurance();
        // $query_insurances = $query_insurances->whereIn('creater_id', $creater_list);
        $query_insurances = $query_insurances->where('created_at', '<=', $end_date);
        $query_insurances = $query_insurances->where('created_at', '>=', $begin_date);       
        $query_insurances = $query_insurances->where('creater_id', '!=', '1');       
        $query_insurances = $query_insurances->where('insurance_status', '=', '1');       

        $insurances_info = $query_insurances->select($select_columns_car)
                     ->orderBy('creater_id', 'asc')
                     ->orderBy('updated_at', 'desc')
                     ->get();

        // dd(lastSql());
        // dd($insurances_info[0]);

        /*$card_info = $insurances_info[2]->card;
        echo nl2br($card_info);
        $card_info = str_replace("\r", '', $card_info);
        dd($card_info);*/
        // p($insurances_info[0]->belongsToCustomer->customer_indentily_card);exit;

        $insurances_info_content = [];
        foreach ($insurances_info as $key => $value){

            $insurances_info_content[] =  array(
                $value->insurance_code,
                $insurance_company_commercial[$value->company_commercial].'/'.$insurance_company_interest[$value->company_interest],
                $value->name,
                $value->car_plate,
                $value->telephone."\t",
                $value->belongsToBrand->brand_name,
                $insurance_sor[$value->source],
                '',
                '',
                $value->traffic_date,
                $value->vehicle_date,
                $value->traffic_price,
                $value->vehicle_tax,
                $value->vehicle_price,
                $value->total_price,
                $value->commercial_rate.'%/'.$value->interest_rate.'%',
                $value->rebeat,
                $value->commercial_ratio.'%/'.$value->royalty_ratio.'%',
                $value->royalty,
                '',
                '',
                $value->profit,
                '',
                $value->need_pay,
                '',
                $value->salesman,
                substr($value->created_at, 0 ,10),
                $value->remark,
            );
        }

        // array_unshift($insurances_info_content, ['客户姓名','身份证号码','客户卡号','账单日','电话','车辆名称','评估价(万)','车贷金额(万)','保险贷款(万)','其他衍生贷款(万)','总贷款(万)','期数(月)','刷卡日期','首月还款','每月还款','次年续保起始日期','旧车牌号','新车牌号','家庭住址','其他联系人电话','担保人','担保人电话','担保人地址','车辆初次登记日期','手续费（元）','汽贸利润（元）','贷款部利润（元）','家访费','家访','贷款渠道','客户渠道','备注', '贷款顾问','创建日期']);
        // 
        array_unshift($insurances_info_content, ['序号','保险公司(商险/交强)','被保人','车牌号','电话','车型','来源','介绍人','联系电话','交强到期日期','商业到期日期','交强','车船税','商业','总保费','利率(商险/交强)','返点','提成比例(商险/交强)','提成','应发工资','实收','利润','快递','需支付','加盟店是否结费','业务员','上传日期','备注']);

        // dd($insurances_info_content);
        $file_name = '保险统计(';
        $file_name .= $begin_date;
        $file_name .= '至';
        $file_name .= $end_date;
        $file_name .= ')';
        // dd($file_name);
        $excels = Excel::create($file_name,function($excel) use ($insurances_info_content){
            $excel->sheet('score', function($sheet) use ($insurances_info_content){
                $sheet->setWidth('B', 20);
                $sheet->setWidth('C', 10);
                $sheet->setWidth('D', 30);
                $sheet->setWidth('E', 20);
                $sheet->setWidth('F', 30);
                $sheet->setWidth('J', 20);
                $sheet->setWidth('K', 20);
                $sheet->setWidth('P', 20);
                $sheet->setWidth('Q', 20);
                $sheet->setWidth('R', 20);
                $sheet->setWidth('S', 10);
                $sheet->setWidth('T', 20);
                $sheet->setWidth('X', 20);
                $sheet->setWidth('Y', 20);
                $sheet->setWidth('AA', 30);
                $sheet->setWidth('AB', 60);
                $sheet->rows($insurances_info_content);
            });
        });

        // dd($excels->save());
        $excels->export('xls');
    }
}
