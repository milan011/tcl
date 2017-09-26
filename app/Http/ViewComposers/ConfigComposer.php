<?php
namespace App\Http\ViewComposers;

use Illuminate\Contracts\View\View;
/**
* 基于类的实现方式
*/
class ConfigComposer
{
    /**
     * 共享配置数据
     * @date   2017-01-06
     * @author wcg
     * @param  View       $view [description]
     * @return [type]           [description]
     */
    public function compose(View $view)
    {
        $year_type                 = config('tcl.year_type'); //获取配置文件中所有车款年份
        $category_type             = config('tcl.category_type'); //获取配置文件中车型类别
        $gearbox                   = config('tcl.gearbox'); //获取配置文件中变速箱类别
        $out_color                 = config('tcl.out_color'); //获取配置文件中外观颜色
        $inside_color              = config('tcl.inside_color'); //获取配置文件中内饰颜色
        $sale_number               = config('tcl.sale_number'); //获取配置文件中过户次数
        $car_type                  = config('tcl.car_type'); //获取配置文件车源类型
        $customer_res              = config('tcl.customer_res'); //获取配置文件客户来源
        $safe_type                 = config('tcl.safe_type'); //获取配置文件保险类别
        $capacity                  = config('tcl.capacity'); //获取配置文件排量
        $mileage_config            = config('tcl.mileage'); //获取配置文件中车源状态
        $car_age                   = config('tcl.age'); //获取配置文件中车源年龄
        $want_stauts_config        = config('tcl.want_stauts'); //获取配置文件中求购信息状态
        $chance_status             = config('tcl.chance_status'); //获取配置文件中销售机会状态
        $car_stauts_config         = config('tcl.car_stauts'); //获取配置文件中车源状态
        $plan_stauts_config        = config('tcl.plan_status'); //获取配置文件中约车状态
        $transcation_stauts_config = config('tcl.transcation_status'); //获取配置文件中交易状态
        $sale_number_config        = config('tcl.want_sale_number'); //获取配置文件中求购信息过户配置
        $follow_type               = config('tcl.follow_type'); //获取配置文件中跟踪类别
        $age                       = config('tcl.age'); //获取配置文件中车龄
        $loan_channels             = config('tcl.loan_channels'); //获取配置文件中贷款渠道
        $loan_stauts_config        = config('tcl.loan_stauts'); //获取配置文件中贷款状态
        $insurance_sor             = config('tcl.insurance_sor'); //获取配置文件中保险来源
        $insurance_company         = config('tcl.insurance_company'); //获取配置文件中保险公司列表
        $price_interval_mobel      = config('tcl.price_interval_mobel'); //获取配置文件中前端价格区间

        $view->with('year_type', $year_type);
        $view->with('category_type', $category_type);
        $view->with('gearbox', $gearbox);
        $view->with('out_color', $out_color);
        $view->with('inside_color', $inside_color);
        $view->with('sale_number', $sale_number);
        $view->with('car_type', $car_type);
        $view->with('customer_res', $customer_res);
        $view->with('safe_type', $safe_type);
        $view->with('capacity', $capacity);
        $view->with('mileage_config', $mileage_config);
        $view->with('car_age', $car_age);
        $view->with('want_stauts_config', $want_stauts_config);
        $view->with('chance_status', $chance_status);
        $view->with('car_stauts_config', $car_stauts_config);
        $view->with('sale_number_config', $sale_number_config);
        $view->with('follow_type', $follow_type);
        $view->with('age', $age);
        $view->with('plan_stauts_config', $plan_stauts_config);
        $view->with('transcation_stauts_config', $transcation_stauts_config);
        $view->with('loan_channels', $loan_channels);
        $view->with('loan_stauts_config', $loan_stauts_config);
        $view->with('insurance_sor', $insurance_sor);
        $view->with('insurance_company', $insurance_company);
        $view->with('price_interval_mobel', $price_interval_mobel);
        
    }
}