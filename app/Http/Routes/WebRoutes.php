<?php

Route::group(['middleware' => 'web'], function () {
    Route::get('admin/login', 'Auth\AuthController@showLoginForm');
    Route::post('admin/login', 'Auth\AuthController@login');
    Route::get('admin/logout', 'Auth\AuthController@logout');
    Route::get('admin/resetPassword', 'Admin\UserController@resetPassword')->name('admin.user.resetPass');
    Route::post('admin/resetPass', 'Admin\UserController@resetPass')->name('admin.user.reset');
    Route::auth();
});