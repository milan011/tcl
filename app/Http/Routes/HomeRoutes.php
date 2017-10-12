<?php
/**
 * 前端路由
 * User: 王晨光
 * Date: 2017/10/12
 * Time: 18:07
 */
namespace App\Http\Routes;

use Illuminate\Contracts\Routing\Registrar;

class HomeRoutes
{
    public function map(Registrar $router)
    {
        /*$router->group(['domain' => 'www.tanteng.me', 'middleware' => 'web'], function ($router) {
            $router->auth();
            $router->get('/', ['as' => 'home', 'uses' => 'IndexController@index']);
            $router->get('/blog', ['as' => 'index.blog', 'uses' => 'BlogController@index']);
            $router->get('/resume', ['as' => 'index.resume', 'uses' => 'IndexController@resume']);
            $router->get('/post', ['name' => 'post.show', 'uses' => 'ArticleController@show']);
            $router->get('/contact', ['as' => 'index.contact', 'uses' => 'IndexController@contact']);
            $router->post('/contact/comment', ['uses' => 'IndexController@postComment']);
            $router->get('/travel', ['as' => 'index.travel', 'uses' => 'TravelController@index']);
            $router->get('/travel/latest', ['as' => 'travel.latest', 'uses' => 'TravelController@latest']);
            $router->get('/travel/{destination}/list', ['as' => 'travel.destination', 'uses' => 'TravelController@travelList']);
            $router->get('/travel/{slug}', ['uses' => 'TravelController@travelDetail']);
            $router->get('/sitemap.xml', ['as' => 'index.sitemap', 'uses' => 'IndexController@sitemap']);
        });*/

        $router->group(['middleware' => 'web', 'namespace' => 'Home'], function ($router) {
       
            $router->get('car/{id}', 'CarController@index')->name('home.car.index');  
            $router->get( 'cate/{brand?}/{condition?}', 'CateController@index')->name('home.cate.index');
            $router->get('/', 'HomeController@index')->name('home.index');  
            $router->get('/city/{city?}', 'HomeController@index')->name('home.indexWithCity');  
            $router->get('/join', 'JoinController@index')->name('home.join.index');  
            $router->get('/sale', 'SaleController@index')->name('home.sale.index');  
            $router->post('/sale/store', 'SaleController@store')->name('home.sale.store');  
            $router->post('sale/getChildBrand', 'SaleController@getChildBrand')->name('home.sale.getChildBrand');    
        });
    }
}