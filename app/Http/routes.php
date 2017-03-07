<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => 'web'], function () {
    Route::get('admin/login', 'Auth\AuthController@showLoginForm');
    Route::post('admin/login', 'Auth\AuthController@login');
    Route::get('admin/logout', 'Auth\AuthController@logout');
    Route::get('admin/resetPassword', 'Admin\UserController@resetPassword')->name('admin.user.resetPass');
    Route::post('admin/resetPass', 'Admin\UserController@resetPass')->name('admin.user.reset');
    Route::auth();
});

Route::group(['middleware' => 'web', 'namespace' => 'Home'], function () {
       
    Route::get('car/{id}', 'CarController@index')->name('home.car.index');  
    Route::get( 'cate/{brand?}/{condition?}', 'CateController@index')->name('home.cate.index');
    Route::get('/', 'HomeController@index')->name('home.index');  
    Route::get('/city/{city?}', 'HomeController@index')->name('home.indexWithCity');  
    Route::get('/join', 'JoinController@index')->name('home.join.index');  
});

/*Route::group(['middleware' => 'web', 'prefix' => 'home1', 'namespace' => 'Home'], function () {
    
    Route::get('/', 'HomeController@index')->name('home.index'); 
    Route::get('car/{id}', 'CarController@index')->name('home.car.index'); 
    Route::get( 'cate/{brand?}/{condition?}', 'CateController@index')->name('home.cate.index');  
});*/

Route::group(['middleware' => ['web', 'auth'], 'prefix' => 'admin', 'namespace' => 'Admin'], function () {

    Route::get('/', 'HomeController@index')->name('admin.index');     
    Route::match(['get', 'post'], 'car/index', 'CarController@index')->name('admin.car.index'); 
    // Route::post('car', 'CarController@list')->name('admin.car.list'); 
    Route::match(['get', 'post'], 'selfcar', 'CarController@carself')->name('admin.car.self'); 
    Route::match(['get', 'post'], 'want/index', 'WantController@index')->name('admin.want.index'); 
    Route::match(['get', 'post'], 'transcation/index', 'TranscationController@index')->name('admin.transcation.index'); 
    Route::match(['get', 'post'], 'selfwant', 'WantController@selfwant')->name('admin.want.self'); 
    Route::match(['get', 'post'], 'chance/index', 'ChanceController@index')->name('admin.chance.index');  
    Route::match(['get', 'post'], 'selfChance', 'ChanceController@selfChance')->name('admin.chance.self');  
    Route::match(['get', 'post'], 'plan/index', 'PlanController@index')->name('admin.plan.index');
    Route::match(['get', 'post'], 'selfPlan', 'PlanController@selfPlan')->name('admin.plan.self'); 
    Route::match(['get', 'post'], 'transcation/index', 'TranscationController@index')->name('admin.transcation.index');
    Route::match(['get', 'post'], 'selfTranscation', 'TranscationController@selfTranscation')->name('admin.transcation.self');  
    Route::post('chance/create', 'ChanceController@create')->name('admin.chance.create'); 
    Route::post('chance/changeStatus', 'ChanceController@changeStatus')->name('admin.chance.changeStatus');
    Route::match(['get', 'post'], 'plan/create', 'PlanController@create')->name('admin.plan.create'); 
    Route::post('plan/planLaunch', 'PlanController@planLaunch')->name('admin.plan.planLaunch');    
    Route::post('transcation/create', 'TranscationController@create')->name('admin.transcation.create');
    Route::post('transcation/changeStatus', 'TranscationController@changeStatus')->name('admin.transcation.changeStatus');    
    Route::match(['get', 'post'],'transcation/complete', 'TranscationController@complete')->name('admin.transcation.complete');    
    Route::post('transcation/completeDel/{transcation}', 'TranscationController@completeDel')->name('admin.transcation.completeDel');    
    Route::post('shop/changeStatus', 'ShopController@changeStatus')->name('admin.shop.changeStatus');
    Route::post('car/changeStatus', 'CarController@changeStatus')->name('admin.car.changeStatus');
    Route::post('car/follwQuickly', 'CarController@follwQuickly')->name('admin.car.follwQuickly');
    Route::post('car/interactiveAdd', 'CarController@interactiveAdd')->name('admin.car.interactiveAdd');  
    Route::post('car/getCarInfo', 'CarController@getCarInfo')->name('admin.car.getCarInfo');
    Route::post('car/changeFristImg', 'CarController@changeFristImg')->name('admin.car.changeFristImg');
    Route::get('car/editImg/{car}', 'CarController@editImg')->name('admin.car.editImg');
    Route::post('want/interactiveAdd', 'WantController@interactiveAdd')->name('admin.want.interactiveAdd');
    Route::post('want/getWantInfo', 'WantController@getWantInfo')->name('admin.want.getWantInfo');
    Route::post('want/changeStatus', 'WantController@changeStatus')->name('admin.want.changeStatus');
    Route::post('want/follwQuickly', 'WantController@follwQuickly')->name('admin.want.follwQuickly');
    Route::post('brand/getChildBrand', 'BrandController@getChildBrand')->name('admin.brand.getChildBrand');
    Route::post('brand/changeStatus', 'BrandController@changeStatus')->name('admin.brand.changeStatus');
    Route::post('category/getChildCategory', 'CategoryController@getChildCategory')->name('admin.category.getChildCategory');
    Route::post('category/checkRepeat', 'CategoryController@checkRepeat')->name('admin.category.checkRepeat');
    Route::get('role/{id}/editPermission', 'RoleController@editPermission')->name('admin.role.editPermission');    
    Route::put('role/updatePermission', 'RoleController@updatePermission')->name('admin.role.updatePermission');
    // 文件、图片上传路由
    Route::get('upload', 'UploadController@index');
    Route::post('upload/file', 'UploadController@uploadFile')->name('upload.uploadFile');
    Route::delete('aupload/file', 'UploadController@deleteFile');
    Route::post('upload/folder', 'UploadController@createFolder');
    Route::delete('upload/folder', 'UploadController@deleteFolder');
    Route::post('imgUpload', 'ImageController@postUpload')->name('admin.image.upload');
    Route::post('imgUpload/delete', 'ImageController@deleteUpload')->name('admin.image.delete');
    Route::post('customer/ajaxStore', 'CustomerController@ajaxStore')->name('admin.customer.ajaxStore');
    Route::post('chance/store', 'ChanceController@store')->name('admin.chance.store');
    Route::post('car/ajaxAdd', 'CarController@ajaxAdd')->name('admin.car.ajaxAdd');
    Route::post('area/getAreaInfo', 'AreaController@getAreaInfo')->name('admin.area.getAreaInfo');
    Route::resource('user', 'UserController'); 
    Route::resource('car', 'CarController');  
    Route::resource('want', 'WantController');  
    Route::resource('shop', 'ShopController');  
    Route::resource('role', 'RoleController');  
    Route::resource('permission', 'PermissionController');  
    Route::resource('notice', 'NoticeController');  
    Route::resource('customer', 'CustomerController');  
    Route::resource('category', 'CategoryController');  
    Route::resource('brand', 'BrandController');  
    Route::resource('chance', 'ChanceController');  
    Route::resource('plan', 'PlanController');    
    Route::resource('transcation', 'TranscationController');  
});

/*Route::group(['middleware' => ['web', 'auth']], function () {                      
        // Route::get('/', 'PagesController@dashboard');           
        Route::get('/', 'HomeController@index');           
        Route::get('users/data', 'UsersController@anyData')->name('users.data');
        Route::get('users/taskdata/{id}', 'UsersController@taskData')->name('users.taskdata');
        Route::get('users/closedtaskdata/{id}', 'UsersController@closedTaskData')->name('users.closedtaskdata');
        Route::get('users/clientdata/{id}', 'UsersController@clientData')->name('users.clientdata');
        Route::get('clients/data', 'ClientsController@anyData')->name('clients.data');
        Route::get('tasks/data', 'TasksController@anyData')->name('tasks.data');
        Route::get('leads/data', 'LeadsController@anyData')->name('leads.data');
        Route::resource('users', 'UsersController');
        Route::post('clients/create/cvrapi', 'ClientsController@cvrapiStart');
        Route::post('clients/upload/{id}', 'DocumentsController@upload');
        
        Route::resource('clients', 'ClientsController');
        Route::get('settings', 'SettingsController@index')->name('settings.index');
        Route::patch('settings/permissionsUpdate', 'SettingsController@permissionsUpdate');
        Route::post('settings/stripe', 'SettingsController@stripe');
        Route::patch('settings/overall', 'SettingsController@updateOverall');
        Route::patch('tasks/updatestatus/{id}', 'TasksController@updateStatus');
        Route::patch('tasks/updateassign/{id}', 'TasksController@updateAssign');
        Route::post('tasks/updatetime/{id}', 'TasksController@updateTime');
        Route::post('tasks/invoice/{id}', 'TasksController@invoice');
        Route::patch('leads/updateassign/{id}', 'LeadsController@updateAssign');
        Route::resource('tasks', 'TasksController');
        Route::resource('leads', 'LeadsController');
        Route::post('tasks/comments/{id}', 'CommentController@store');
        Route::post('leads/notes/{id}', 'NotesController@store');
        Route::patch('leads/updatestatus/{id}', 'LeadsController@updateStatus');
        Route::patch('leads/updatefollowup/{id}', 'LeadsController@updateFollowup')->name('leads.followup');
        
        Route::resource('departments', 'DepartmentsController');
        Route::resource('roles', 'RolesController');
        
        Route::get('dashboard', 'PagesController@dashboard')->name('dashboard');
        Route::resource('integrations', 'IntegrationsController');
        
        //Notifications
        Route::get('notifications/getall', 'NotificationsController@getAll')->name('notifications.get');
        Route::post('notifications/markread', 'NotificationsController@markRead');
        Route::get('notifications/markall', 'NotificationsController@markAll');
        Route::resource('invoices', 'InvoicesController');
        Route::get('documents/import', 'DocumentsController@import');
        Route::post('invoice/updatepayment/{id}', 'InvoicesController@updatePayment')->name('invoice.payment.date');
        Route::post('invoice/reopenpayment/{id}', 'InvoicesController@reopenPayment')->name('invoice.payment.reopen');
        Route::post('invoice/sentinvoice/{id}', 'InvoicesController@updateSentStatus')->name('invoice.sent');
        Route::post('invoice/reopensentinvoice/{id}', 'InvoicesController@updateSentReopen')->name('invoice.sent.reopen');
        Route::post('invoice/newitem/{id}', 'InvoicesController@newItem')->name('invoice.new.item');
});*/
