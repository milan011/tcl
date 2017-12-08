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
use App\Repositories\Brand\BrandRepositoryContract;
use App\Repositories\Car\CarRepositoryContract;
use App\Repositories\Shop\ShopRepositoryContract;
use App\Repositories\Insurance\InsuranceRepositoryContract;
use App\Http\Requests\Insurance\UpdateInsuranceRequest;
use App\Http\Requests\Insurance\StoreInsuranceRequest;

class InsuranceController extends Controller
{   
    protected $brands;
    protected $shop;
    protected $insurance;

    public function __construct(

        BrandRepositoryContract $brands,
        ShopRepositoryContract $shop,
        InsuranceRepositoryContract $insurance
    ) {
    
        $this->brands    = $brands;
        $this->shop      = $shop;
        $this->insurance = $insurance;


        // $this->middleware('brand.create', ['only' => ['create']]);
    }

    /**
     * Display a listing of the resource.
     * 所有车源列表
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // dd($request->method());
        $all_top_brands = $this->brands->getChildBrand(0);
        //$request['car_status']   = '1';

        // dd($request->all());
        if($request->method() == 'POST'){
            //初始搜索条件
            $select_conditions  = $request->all();
            // dd($request->all());
        }else{
            $select_conditions['insurance_status'] = '1';
        }

        // dd($select_conditions);

        $insurances = $this->insurance->getAllInsurances($request);
        // dd(lastSql());
        // dd($insurances);
        $shops = $this->shop->getShopsInProvence('10');

        $insurance_status_current = '1';
        
        return view('admin.insurance.index', compact('insurances','insurance_status_current', 'all_top_brands', 'select_conditions','shops'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // dd('呵呵');
        $car_code       = getCarCode('insurance');
        $all_top_brands = $this->brands->getChildBrand(0);
        //$city_id        = $this->shop->find(Auth::user()->shop_id)->city_id; //车源所在城市
        //$provence_id    = $this->shop->find(Auth::user()->shop_id)->provence_id; //车源所在省份

        $area = Area::withTrashed()
                    ->where('pid', '1')
                    ->where('status', '1')
                    ->get();

        // dd($city_id);
        return view('admin.insurance.create',compact(
            'all_top_brands',           
            'city_id',
            'provence_id',
            'area'
        ));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreInsuranceRequest $insuranceRequest)
    {
        //p('xixi');
        dd($insuranceRequest->all());
        $getInsertedId = $this->insurance->create($insuranceRequest);
        // p(lastSql());exit;
        return redirect('admin/insurance/index')->withInput();
    }  

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $insurance = $this->insurance->find($id);
        
        // dd($insurance);

        return view('admin.insurance.show', compact('insurance'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $insurance = $this->insurance->find($id);

        // dd($insurance);
        $area = Area::withTrashed()
                    ->where('pid', '1')
                    ->where('status', '1')
                    ->get();
        $citys = Area::withTrashed()
                     ->where('pid', $insurance->insurance_provence)
                     ->where('status', '1')
                    ->get();
        /*if (Gate::denies('update', $cars)) {
            //不允许编辑,基于Policy
            dd('no no');
        }*/

        // dd($area);
        // dd($insurance->insurance_provence);

        foreach ($area as $key => $value) {
            if($insurance->insurance_provence == $value->id){
                $provence =  $value;
            }
        }

        foreach ($citys as $key => $value) {
            if($insurance->insurance_city == $value->id){
                $city =  $value;
            }
        }
        // dd($cars);
        // dd($provence);
        // dd($city);
        return view('admin.insurance.edit', compact(
            'insurance','provence','city','area'
        ));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateInsuranceRequest $insuranceRequest, $id)
    {
        // p($id);
        // dd($insuranceRequest->all());

        $this->insurance->update($insuranceRequest, $id);
        return redirect('admin/insurance/index')->withInput();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    /**
     * 修改保险状态
     * 暂时只有激活-废弃转换
     * @return \Illuminate\Http\Response
     */
    public function changeStatus(Request $request)
    {    
        /*if($request->ajax()){
            echo "zhen de shi AJAX";
        }
        p($request->input('id'));
        p($request->input('status'));
        p($request->method());exit;*/

        $insurance = $this->insurance->find($request->id);

        // $is_repeat = $this->insurance->isRepeat($insurance->vin_code);

        if($request->input('status') == '0'){
            //激活保险          
            $this->insurance->statusChange($request, $request->input('id'));
            $msg = '保险已经激活';       
        }else{
            //废弃保险
            $this->insurance->statusChange($request, $request->input('id'));
            $msg = '保险已经废弃';
        }
        
        return response()->json(array(
            'status' => 1,
            'msg' => $msg,
        ));      
    }
}
