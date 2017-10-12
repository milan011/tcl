<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{   

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // 使用基于类的composers...第一个参数可以指定共享给那个视图,多个视图用数组，共享到全部视图可以用 * 
        $config_blade = array(   //需要配置变量的模板
            'admin.car.*',            
            'admin.chance.*',            
            'admin.want.*',            
            'admin.plan.*',            
            'admin.transcation.*',           
            'admin.appraiser.*',           
            'admin.insurance.*',           
            'admin.loan.*',           
            'admin.customer.*', 
            'home.*',
            'show.*',
            'mobel.*',       
        );

        view()->composer(
            $config_blade, 'App\Http\ViewComposers\ConfigComposer'
        );

        view()->composer(
            'home.*', 'App\Http\ViewComposers\CityComposer'
        );

        view()->composer(
            'show.*', 'App\Http\ViewComposers\CityComposer'
        );

        view()->composer(
            'mobel.*', 'App\Http\ViewComposers\CityComposer'
        );

        /*view()->composer(
            'mobel.*', 'App\Http\ViewComposers\WeiXinComposer'
        );*/
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
