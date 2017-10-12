<?php
/**
 * 前端路由
 * User: 王晨光
 * Date: 2017/10/12
 * Time: 18:07
 */
namespace App\Http\Routes;

use Illuminate\Contracts\Routing\Registrar;
use Illuminate\Routing\Router;

class AdminRoutes
{
    public function map(Registrar $router)
    {
        $router->group(['middleware' => ['web', 'auth'], 'prefix' => 'admin', 'namespace' => 'Admin'], function ($router) {
            
            $router->get('/', 'HomeController@index')->name('admin.index');     
            $router->match(['get', 'post'], 'car/index', 'CarController@index')->name('admin.car.index'); 
            $router->match(['get', 'post'], 'appraiser/index', 'AppraiserController@index')->name('admin.appraiser.index'); 
            $router->match(['get', 'post'], 'insurance/index', 'InsuranceController@index')->name('admin.insurance.index');
            $router->match(['get', 'post'], 'loan/index', 'LoanController@index')->name('admin.loan.index');
            $router->match(['get', 'post'], 'customer/index', 'CustomerController@index')->name('admin.customer.index');
            $router->match(['get', 'post'], 'selfcar', 'CarController@carself')->name('admin.car.self'); 
            $router->match(['get', 'post'], 'want/index', 'WantController@index')->name('admin.want.index'); 
            $router->match(['get', 'post'], 'transcation/index', 'TranscationController@index')->name('admin.transcation.index'); 
            $router->match(['get', 'post'], 'selfwant', 'WantController@selfwant')->name('admin.want.self'); 
            $router->match(['get', 'post'], 'chance/index', 'ChanceController@index')->name('admin.chance.index');  
            $router->match(['get', 'post'], 'selfChance', 'ChanceController@selfChance')->name('admin.chance.self');  
            $router->match(['get', 'post'], 'plan/index', 'PlanController@index')->name('admin.plan.index');
            $router->match(['get', 'post'], 'selfPlan', 'PlanController@selfPlan')->name('admin.plan.self'); 
            $router->match(['get', 'post'], 'transcation/index', 'TranscationController@index')->name('admin.transcation.index');
            $router->match(['get', 'post'], 'selfTranscation', 'TranscationController@selfTranscation')->name('admin.transcation.self');   
            $router->post('chance/create', 'ChanceController@create')->name('admin.chance.create'); 
            $router->post('chance/changeStatus', 'ChanceController@changeStatus')->name('admin.chance.changeStatus');
            $router->match(['get', 'post'], 'plan/create', 'PlanController@create')->name('admin.plan.create'); 
            $router->post('plan/planLaunch', 'PlanController@planLaunch')->name('admin.plan.planLaunch');    
            $router->post('transcation/create', 'TranscationController@create')->name('admin.transcation.create');
            $router->post('transcation/changeStatus', 'TranscationController@changeStatus')->name('admin.transcation.changeStatus');    
            $router->match(['get', 'post'], 'carCustomer/index', 'CarCustomerController@index')->name('admin.carCustomer.index');
            $router->post('transcation/completeDel/{transcation}', 'TranscationController@completeDel')->name('admin.transcation.completeDel');    
            $router->match(['get', 'post'], 'transcation/complete', 'TranscationController@complete')->name('admin.transcation.complete');    
            // $router->post('transcation/complete', 'TranscationController@complete')->name('admin.transcation.complete');    
        
            $router->post('shop/changeStatus', 'ShopController@changeStatus')->name('admin.shop.changeStatus');
            $router->post('car/changeStatus', 'CarController@changeStatus')->name('admin.car.changeStatus');
            $router->post('car/follwQuickly', 'CarController@follwQuickly')->name('admin.car.follwQuickly');
            $router->post('car/interactiveAdd', 'CarController@interactiveAdd')->name('admin.car.interactiveAdd');  
            $router->post('car/getCarInfo', 'CarController@getCarInfo')->name('admin.car.getCarInfo');
            $router->post('car/changeFristImg', 'CarController@changeFristImg')->name('admin.car.changeFristImg');
            $router->get('car/editImg/{car}', 'CarController@editImg')->name('admin.car.editImg');
            $router->get('car/autoWasteCar', 'CarController@autoWasteCar')->name('admin.car.autoWasteCar');
            $router->get('car/checkCount', 'CarController@checkCount')->name('admin.car.checkCount');
            $router->post('want/interactiveAdd', 'WantController@interactiveAdd')->name('admin.want.interactiveAdd');
            $router->post('want/getWantInfo', 'WantController@getWantInfo')->name('admin.want.getWantInfo');
            $router->post('want/changeStatus', 'WantController@changeStatus')->name('admin.want.changeStatus');
            $router->get('want/autoWasteWant', 'WantController@autoWasteWant')->name('admin.want.autoWasteWant');
            $router->post('want/follwQuickly', 'WantController@follwQuickly')->name('admin.want.follwQuickly');
            $router->post('brand/getChildBrand', 'BrandController@getChildBrand')->name('admin.brand.getChildBrand');
            $router->post('brand/changeStatus', 'BrandController@changeStatus')->name('admin.brand.changeStatus');
            $router->post('insurance/changeStatus', 'InsuranceController@changeStatus')->name('admin.insurance.changeStatus');
            $router->post('loan/changeStatus', 'LoanController@changeStatus')->name('admin.loan.changeStatus');
            $router->post('category/getChildCategory', 'CategoryController@getChildCategory')->name('admin.category.getChildCategory');
            $router->post('category/checkRepeat', 'CategoryController@checkRepeat')->name('admin.category.checkRepeat');
            $router->get('role/{id}/editPermission', 'RoleController@editPermission')->name('admin.role.editPermission');    
            $router->put('role/updatePermission', 'RoleController@updatePermission')->name('admin.role.updatePermission');
            // 文件、图片上传路由
            $router->get('upload', 'UploadController@index');
            $router->post('upload/file', 'UploadController@uploadFile')->name('upload.uploadFile');
            $router->delete('aupload/file', 'UploadController@deleteFile');
            $router->post('upload/folder', 'UploadController@createFolder');
            $router->delete('upload/folder', 'UploadController@deleteFolder');
            $router->post('imgUpload', 'ImageController@postUpload')->name('admin.image.upload');
            $router->post('imgUpload/delete', 'ImageController@deleteUpload')->name('admin.image.delete');
            $router->post('customer/ajaxStore', 'CustomerController@ajaxStore')->name('admin.customer.ajaxStore');
            $router->post('chance/store', 'ChanceController@store')->name('admin.chance.store');
            $router->post('car/ajaxAdd', 'CarController@ajaxAdd')->name('admin.car.ajaxAdd');
            $router->post('area/getAreaInfo', 'AreaController@getAreaInfo')->name('admin.area.getAreaInfo');
            $router->get('excel/export','ExcelController@export'); //Excel路由
            $router->get('excel/import','ExcelController@import');
            $router->resource('user', 'UserController'); 
            $router->resource('car', 'CarController');  
            $router->resource('want', 'WantController');  
            $router->resource('shop', 'ShopController');  
            $router->resource('role', 'RoleController');  
            $router->resource('permission', 'PermissionController');  
            $router->resource('notice', 'NoticeController');  
            $router->resource('customer', 'CustomerController');  
            $router->resource('category', 'CategoryController');  
            $router->resource('brand', 'BrandController');  
            $router->resource('chance', 'ChanceController');  
            $router->resource('plan', 'PlanController');    
            $router->resource('transcation', 'TranscationController');   
            $router->resource('carCustomer', 'CarCustomerController');   
            $router->resource('appraiser', 'AppraiserController');   
            $router->resource('insurance', 'InsuranceController');   
            $router->resource('loan', 'LoanController');    
        });
    }
}