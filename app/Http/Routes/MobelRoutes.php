<?php
/**
 * 前端路由
 * User: 王晨光
 * Date: 2017/10/12
 * Time: 18:07
 */
/*namespace App\Http\Routes;

use Illuminate\Contracts\Routing\Registrar;

class MobelRoutes
{
    public function map(Registrar $router)
    {
        //手机端路由组
        $router->group(['domain' => 'm.sjztcl.com', 'middleware' => 'web', 'namespace' => 'Mobel'], function ($router) {
            $router->get('/car/{id}', 'CarController@index')->name('mobel.car.index');  
            $router->get( '/cate/{brand?}/{condition?}', 'CateController@index')->name('mobel.cate.index');
            $router->get('/', 'HomeController@index')->name('mobel.index');  
            $router->get('/changeCity/{city?}', 'HomeController@changeCity')->name('mobel.changeCity');  
            $router->get('/city/{city?}', 'HomeController@index')->name('mobel.indexWithCity');  
            $router->get('/join', 'JoinController@index')->name('mobel.join.index');  
            $router->get('/sale', 'SaleController@index')->name('mobel.sale.index');  
            $router->post('/sale/store', 'SaleController@store')->name('mobel.sale.store');  
            $router->post('sale/getChildBrand', 'SaleController@getChildBrand')->name('mobel.sale.getChildBrand');
            $router->post('cate/getChildCategory', 'CateController@getChildCategory')->name('mobel.cate.getChildCategory');
        });
    }
}*/

Route::group(['domain' => 'm.mytcl.net', 'middleware' => 'web', 'namespace' => 'Mobel'], function () {
    Route::get('/car/{id}', 'CarController@index')->name('mobel.car.index');  
    Route::get( '/cate/{brand?}/{condition?}', 'CateController@index')->name('mobel.cate.index');
    Route::get('/', 'HomeController@index')->name('mobel.index');  
    Route::get('/changeCity/{city?}', 'HomeController@changeCity')->name('mobel.changeCity');  
    Route::get('/city/{city?}', 'HomeController@index')->name('mobel.indexWithCity');  
    Route::get('/join', 'JoinController@index')->name('mobel.join.index');  
    Route::get('/sale', 'SaleController@index')->name('mobel.sale.index');  
    Route::post('/sale/store', 'SaleController@store')->name('mobel.sale.store');  
    Route::post('sale/getChildBrand', 'SaleController@getChildBrand')->name('mobel.sale.getChildBrand');
    Route::post('cate/getChildCategory', 'CateController@getChildCategory')->name('mobel.cate.getChildCategory');
});