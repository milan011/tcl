<?php
/**
 * 前端路由
 * User: 王晨光
 * Date: 2017/10/12
 * Time: 18:07
 */
Route::group(['middleware' => ['web', 'auth'], 'prefix' => 'admin', 'namespace' => 'Admin'], function () {

    Route::get('/', 'HomeController@index')->name('admin.index');     
    Route::match(['get', 'post'], 'car/index', 'CarController@index')->name('admin.car.index'); 
    Route::match(['get', 'post'], 'car/carAnalysed', 'CarController@carAnalysed')->name('admin.car.carAnalysed'); 
    Route::match(['get', 'post'], 'appraiser/index', 'AppraiserController@index')->name('admin.appraiser.index'); 
    Route::match(['get', 'post'], 'insurance/index', 'InsuranceController@index')->name('admin.insurance.index');
    Route::match(['get', 'post'], 'loan/index', 'LoanController@index')->name('admin.loan.index');
    Route::match(['get', 'post'], 'customer/index', 'CustomerController@index')->name('admin.customer.index');
    Route::match(['get', 'post'], 'selfcar', 'CarController@carself')->name('admin.car.self'); 
    Route::match(['get', 'post'], 'showHidden', 'CarController@showHidden')->name('admin.car.showHidden'); 
    Route::match(['get', 'post'], 'want/index', 'WantController@index')->name('admin.want.index'); 
    Route::match(['get', 'post'], 'want/wantAnalysed', 'WantController@wantAnalysed')->name('admin.want.carAnalysed');
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
    Route::get('insurance/editImg/{insurance}', 'InsuranceController@editImg')->name('admin.insurance.editImg');
    Route::post('loan/changeStatus', 'LoanController@changeStatus')->name('admin.loan.changeStatus');
    Route::get('loan/editImg/{loan}', 'LoanController@editImg')->name('admin.loan.editImg');
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
    //车源图片处理
    Route::post('imgUpload', 'ImageController@postUpload')->name('admin.image.upload');
    Route::post('imgUpload/delete', 'ImageController@deleteUpload')->name('admin.image.delete');
    //贷款图片处理
    Route::post('imgLoanUpload', 'ImageLoanController@postUpload')->name('admin.imageLoan.upload');
    Route::post('imgLoanUpload/delete', 'ImageLoanController@deleteUpload')->name('admin.imageLoan.delete');
    //保险图片处理
    Route::post('imgInsuranceUpload', 'ImageInsuranceController@postUpload')->name('admin.imageInsurance.upload');
    Route::post('imgInsuranceUpload/delete', 'ImageInsuranceController@deleteUpload')->name('admin.imageInsurance.delete');
    Route::post('customer/ajaxStore', 'CustomerController@ajaxStore')->name('admin.customer.ajaxStore');
    Route::post('customer/ajaxStoreInsurance', 'CustomerController@ajaxStoreInsurance')->name('admin.customer.ajaxStoreInsurance');//保险客户添加
    Route::post('chance/store', 'ChanceController@store')->name('admin.chance.store');
    Route::post('car/ajaxAdd', 'CarController@ajaxAdd')->name('admin.car.ajaxAdd');
    Route::post('area/getAreaInfo', 'AreaController@getAreaInfo')->name('admin.area.getAreaInfo');
    Route::get('excel/export','ExcelController@export'); //导出车源,求购
    Route::match(['get', 'post'], 'excel/loanExport','ExcelController@loanExport')->name('admin.loan.export'); //导出贷款
    Route::match(['get', 'post'], 'excel/insuranceExport','ExcelController@insuranceExport')->name('admin.insurance.export'); //导出贷款
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