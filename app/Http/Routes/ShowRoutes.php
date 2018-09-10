<?php
/**
 * 前端路由
 * User: 王晨光
 * Date: 2017/10/12
 * Time: 18:07
 */
/*namespace App\Http\Routes;

use Illuminate\Contracts\Routing\Registrar;

class ShowRoutes
{
    public function map(Registrar $router)
    {
        $router->group(['middleware' => 'web', 'namespace' => 'Show'], function ($router) {
       
            $router->get('car/{id}', 'CarController@index')->name('show.car.index');  
            $router->get( 'cate/{brand?}/{condition?}', 'CateController@index')->name('show.cate.index');
            $router->get('/', 'HomeController@index')->name('show.index');  
            $router->get('/city/{city?}', 'HomeController@index')->name('show.indexWithCity');  
            $router->get('/join', 'JoinController@index')->name('show.join.index');  
            $router->get('/sale', 'SaleController@index')->name('show.sale.index');  
            // $router->post('/sale/store', 'SaleController@store')->name('show.sale.store');  
            $router->match(['get', 'post'], '/sale/store', 'SaleController@store')->name('show.sale.store');
            $router->post('sale/getChildBrand', 'SaleController@getChildBrand')->name('show.sale.getChildBrand');  
        });
    }
}*/
Route::group(['middleware' => 'web', 'namespace' => 'Show'], function () {
       
    Route::get('car/{id}', 'CarController@index')->name('show.car.index');  
    Route::get( 'cate/{brand?}/{condition?}', 'CateController@index')->name('show.cate.index');
    Route::get('/', 'HomeController@index')->name('show.index');  
    Route::get('/city/{city?}', 'HomeController@index')->name('show.indexWithCity');  
    Route::get('/join', 'JoinController@index')->name('show.join.index');
    Route::get('/about', 'AboutController@index')->name('show.about.index');    
    Route::get('/sale', 'SaleController@index')->name('show.sale.index');  
    Route::post('/sale/store', 'SaleController@store')->name('show.sale.store');  
    Route::match(['get', 'post'], '/sale/store', 'SaleController@store')->name('show.sale.store');
    Route::post('sale/getChildBrand', 'SaleController@getChildBrand')->name('show.sale.getChildBrand');  
    Route::post('sale/getChildCategory', 'SaleController@getChildCategory')->name('show.sale.getChildCategory');

    Route::get('/dpx', function () {

        // return 'hehe';
        return view('show.dpx.index');
    });

    Route::get('/zhaosheng', function () {

        // return 'hehe';
        return view('show.zhaosheng.index', ['current_page' => '']);
    });
});