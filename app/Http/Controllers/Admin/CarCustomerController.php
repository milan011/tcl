<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Auth;
use Gate;
use DB;
use App\Area;
use App\Image;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Repositories\Sale\SaleRepositoryContract;

class CarCustomerController extends Controller
{   
    protected $customerCar;


    public function __construct(

        SaleRepositoryContract $customerCar
    ) {
    
        $this->customerCar = $customerCar;

        // $this->middleware('brand.create', ['only' => ['create']]);
    }

    /**
     * Display a listing of the resource.
     * 所有车源列表
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $all_customer_cars = $this->customerCar->getAllCustomersCars($request);
        // dd(lastSql());
        // dd($all_customer_cars[0]->belongsToBrand);
        
        return view('admin.carCustomer.index', compact('all_customer_cars'));
    }
}
