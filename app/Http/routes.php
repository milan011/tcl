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
/*Route::get('/', function(){

        return 'hehe';
});

Route::get('haha', function(){

        return 'hehe1';
});*/

Route::group(['middleware' => 'web'], function () {
    Route::auth();
});

Route::group(['middleware' => 'web', 'prefix' => 'home', 'namespace' => 'Home'], function () {
    Route::get('/', function(){

        return view('home.home');
    });  
});

Route::group(['middleware' => ['web', 'auth'], 'prefix' => 'admin', 'namespace' => 'Admin'], function () {
    Route::get('/', 'HomeController@index')->name('admin.index');     
    Route::match(['get', 'post'], 'car/index', 'CarController@index')->name('admin.car.index'); 
    // Route::post('car', 'CarController@list')->name('admin.car.list'); 
    Route::match(['get', 'post'], 'selfcar', 'CarController@carself')->name('admin.car.self'); 
    Route::match(['get', 'post'], 'want/index', 'WantController@index')->name('admin.want.index'); 
    Route::match(['get', 'post'], 'selfwant', 'WantController@selfwant')->name('admin.want.self'); 
    Route::match(['get', 'post'], 'chance/index', 'ChanceController@index')->name('admin.chance.index');  
    Route::post('chance/create', 'ChanceController@create')->name('admin.chance.create');  
    Route::post('plan/create', 'PlanController@create')->name('admin.plan.create');  
    Route::post('shop/changeStatus', 'ShopController@changeStatus')->name('shop.changeStatus');
    Route::post('car/changeStatus', 'CarController@changeStatus')->name('admin.car.changeStatus');
    Route::post('want/follwQuickly', 'wantController@follwQuickly')->name('admin.want.follwQuickly');
    Route::post('want/changeStatus', 'wantController@changeStatus')->name('admin.want.changeStatus');
    Route::post('want/follwQuickly', 'wantController@follwQuickly')->name('admin.want.follwQuickly');
    Route::post('brand/getChildBrand', 'BrandController@getChildBrand')->name('brand.getChildBrand');
    Route::post('brand/changeStatus', 'brandController@changeStatus')->name('brand.changeStatus');
    Route::post('category/getChildCategory', 'CategoryController@getChildCategory')->name('admin.category.getChildCategory');
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
    Route::resource('booking', 'BookingController');  
    Route::resource('transcation', 'TranscationController');  
});

Route::group(['middleware' => ['web', 'auth']], function () {
        Route::get('/', 'PagesController@dashboard');           
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
});
