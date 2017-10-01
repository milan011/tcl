<?php
namespace App\Repositories\Sale;

use App\CustomerCar;
use Session;
use Illuminate\Http\Request;
use Gate;
use Datatables;
use Carbon;
use PHPZen\LaravelRbac\Traits\Rbac;
use Auth;
use Illuminate\Support\Facades\Input;
use DB;
use Debugbar;

class SaleRepository implements SaleRepositoryContract
{

    // 根据ID获得客户车源信息信息
    public function find($id)
    {
        return CustomerCar::select(['id', 'name', 'mobile'])
                       ->findOrFail($id);
    }

    // 获得客户车源信息列表
    public function getAllCustomersCars($request)
    {   
        $query = new CustomerCar();       // 返回的是一个CustomerCar实例,两种方法均可

        $query = $query->addCondition($request->all()); //根据条件组合语句

        return $query->orderBy('created_at', 'desc')
                     ->paginate(12);

        // return CustomerCar::paginate(10);
    }

    // 创建客户车源信息
    public function create($requestData)
    {          
        // 添加信息
        $customerCar = new CustomerCar();

        $requestData['category_id'] = empty($requestData->type) ? '' : $requestData->type;
        $requestData['brand_id'] = empty($requestData->brand) ? '' : $requestData->brand;
        $requestData['car_factory'] = empty($requestData->company) ? '' : $requestData->company;

        // dd($requestData->all());
        $input =  array_replace($requestData->all());
        $customerCar->fill($input);
        $customerCar  = $customerCar->create($input);             

        return $customerCar;
    }
}
