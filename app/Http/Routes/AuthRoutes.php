<?php
/**
 * 前端路由
 * User: 王晨光
 * Date: 2017/10/12
 * Time: 18:07
 */
namespace App\Http\Routes;

use Illuminate\Contracts\Routing\Registrar;

class AuthRoutes
{
    public function map(Registrar $router)
    {
        $router->group(['middleware' => 'web'], function ($router) {
            $router->get('admin/login', 'Auth\AuthController@showLoginForm');
            $router->post('admin/login', 'Auth\AuthController@login');
            $router->get('admin/logout', 'Auth\AuthController@logout');
            $router->get('admin/resetPassword', 'Admin\UserController@resetPassword')->name('admin.user.resetPass');
            $router->post('admin/resetPass', 'Admin\UserController@resetPass')->name('admin.user.reset');
            $router->auth();
        });
    }
}