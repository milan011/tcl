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
//手机端路由组
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

/*Route::group(['middleware' => 'web', 'namespace' => 'Home'], function () {
       
    Route::get('car/{id}', 'CarController@index')->name('home.car.index');  
    Route::get( 'cate/{brand?}/{condition?}', 'CateController@index')->name('home.cate.index');
    Route::get('/', 'HomeController@index')->name('home.index');  
    Route::get('/city/{city?}', 'HomeController@index')->name('home.indexWithCity');  
    Route::get('/join', 'JoinController@index')->name('home.join.index');  
    Route::get('/sale', 'SaleController@index')->name('home.sale.index');  
    Route::post('/sale/store', 'SaleController@store')->name('home.sale.store');  
    Route::post('sale/getChildBrand', 'SaleController@getChildBrand')->name('home.sale.getChildBrand');    
});*/



Route::group(['middleware' => 'web', 'namespace' => 'Show'], function () {
       
    Route::get('car/{id}', 'CarController@index')->name('show.car.index');  
    Route::get( 'cate/{brand?}/{condition?}', 'CateController@index')->name('show.cate.index');
    Route::get('/', 'HomeController@index')->name('show.index');  
    Route::get('/city/{city?}', 'HomeController@index')->name('show.indexWithCity');  
    Route::get('/join', 'JoinController@index')->name('show.join.index');  
    Route::get('/sale', 'SaleController@index')->name('show.sale.index');  
    Route::post('/sale/store', 'SaleController@store')->name('show.sale.store');  
    Route::match(['get', 'post'], '/sale/store', 'SaleController@store')->name('show.sale.store');
    Route::post('sale/getChildBrand', 'SaleController@getChildBrand')->name('show.sale.getChildBrand');  
});



/*Route::group(['middleware' => ['web', 'auth'], 'prefix' => 'admin', 'namespace' => 'Admin'], function () {

    Route::any('/', function(){

        return '系统维护,请稍后登录';
    }); 

    Route::any('/car/index', function(){

        return '系统维护,请稍后登录';
    });

    Route::any('/selfcar', function(){

        return '系统维护,请稍后登录';
    });  

    Route::any('/want/index', function(){

        return '系统维护,请稍后登录';
    }); 

    Route::any('/selfwant', function(){

        return '系统维护,请稍后登录';
    });   

    Route::any('/selfChance', function(){

        return '系统维护,请稍后登录';
    });

    Route::any('/chance/index', function(){

        return '系统维护,请稍后登录';
    });

    Route::any('/selfPlan', function(){

        return '系统维护,请稍后登录';
    });

    Route::any('/plan/index', function(){

        return '系统维护,请稍后登录';
    });

    Route::any('/selfTranscation', function(){

        return '系统维护,请稍后登录';
    });

    Route::any('/transcation/index', function(){

        return '系统维护,请稍后登录';
    });

    Route::any('/user', function(){

        return '系统维护,请稍后登录';
    });

    Route::any('/shop', function(){

        return '系统维护,请稍后登录';
    });

    Route::any('/notice', function(){

        return '系统维护,请稍后登录';
    });

    Route::any('/brand', function(){

        return '系统维护,请稍后登录';
    });

    Route::any('/category', function(){

        return '系统维护,请稍后登录';
    });
     
});*/

Route::group(['middleware' => ['web', 'auth'], 'prefix' => 'admin', 'namespace' => 'Admin'], function () {

    Route::get('/', 'HomeController@index')->name('admin.index');     
    Route::match(['get', 'post'], 'car/index', 'CarController@index')->name('admin.car.index'); 
    Route::match(['get', 'post'], 'appraiser/index', 'AppraiserController@index')->name('admin.appraiser.index'); 
    Route::match(['get', 'post'], 'insurance/index', 'InsuranceController@index')->name('admin.insurance.index');
    Route::match(['get', 'post'], 'loan/index', 'LoanController@index')->name('admin.loan.index');
    Route::match(['get', 'post'], 'customer/index', 'CustomerController@index')->name('admin.customer.index');
    Route::match(['get', 'post'], 'selfcar', 'CarController@carself')->name('admin.car.self'); 
    Route::match(['get', 'post'], 'showHidden', 'CarController@showHidden')->name('admin.car.showHidden'); 
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
    Route::match(['get', 'post'], 'carCustomer/index', 'CarCustomerController@index')->name('admin.carCustomer.index');
    Route::post('transcation/completeDel/{transcation}', 'TranscationController@completeDel')->name('admin.transcation.completeDel');    
    Route::match(['get', 'post'], 'transcation/complete', 'TranscationController@complete')->name('admin.transcation.complete');    
    // Route::post('transcation/complete', 'TranscationController@complete')->name('admin.transcation.complete');    
        
    Route::post('shop/changeStatus', 'ShopController@changeStatus')->name('admin.shop.changeStatus');
    Route::post('car/changeStatus', 'CarController@changeStatus')->name('admin.car.changeStatus');
    Route::post('car/follwQuickly', 'CarController@follwQuickly')->name('admin.car.follwQuickly');
    Route::post('car/interactiveAdd', 'CarController@interactiveAdd')->name('admin.car.interactiveAdd');  
    Route::post('car/getCarInfo', 'CarController@getCarInfo')->name('admin.car.getCarInfo');
    Route::post('car/changeFristImg', 'CarController@changeFristImg')->name('admin.car.changeFristImg');
    Route::get('car/editImg/{car}', 'CarController@editImg')->name('admin.car.editImg');
    Route::get('car/autoWasteCar', 'CarController@autoWasteCar')->name('admin.car.autoWasteCar');
    Route::get('car/checkCount', 'CarController@checkCount')->name('admin.car.checkCount');
    Route::post('want/interactiveAdd', 'WantController@interactiveAdd')->name('admin.want.interactiveAdd');
    Route::post('want/getWantInfo', 'WantController@getWantInfo')->name('admin.want.getWantInfo');
    Route::post('want/changeStatus', 'WantController@changeStatus')->name('admin.want.changeStatus');
    Route::get('want/autoWasteWant', 'WantController@autoWasteWant')->name('admin.want.autoWasteWant');
    Route::post('want/follwQuickly', 'WantController@follwQuickly')->name('admin.want.follwQuickly');
    Route::post('brand/getChildBrand', 'BrandController@getChildBrand')->name('admin.brand.getChildBrand');
    Route::post('brand/changeStatus', 'BrandController@changeStatus')->name('admin.brand.changeStatus');
    Route::post('insurance/changeStatus', 'InsuranceController@changeStatus')->name('admin.insurance.changeStatus');
    Route::post('loan/changeStatus', 'LoanController@changeStatus')->name('admin.loan.changeStatus');
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
    Route::get('excel/export','ExcelController@export'); //Excel路由
    Route::get('excel/import','ExcelController@import');
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
    Route::resource('carCustomer', 'CarCustomerController');   
    Route::resource('appraiser', 'AppraiserController');   
    Route::resource('insurance', 'InsuranceController');   
    Route::resource('loan', 'LoanController');    
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
