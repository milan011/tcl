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
use App\Repositories\Loan\LoanRepositoryContract;
use App\Http\Requests\Loan\UpdateLoanRequest;
use App\Http\Requests\Loan\StoreLoanRequest;

class LoanController extends Controller
{   
    protected $brands;
    protected $shop;
    protected $loan;

    public function __construct(

        BrandRepositoryContract $brands,
        ShopRepositoryContract $shop,
        LoanRepositoryContract $loan
    ) {
    
        $this->brands    = $brands;
        $this->shop      = $shop;
        $this->loan      = $loan;


        // $this->middleware('brand.create', ['only' => ['create']]);
    }

    /**
     * Display a listing of the resource.
     * 所有保险列表
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
            $select_conditions['loan_status'] = '1';
        }

        // dd($select_conditions);

        $loans = $this->loan->getAllLoans($request);
        /*dd(lastSql());
        dd($loans);*/
        $shops = $this->shop->getShopsInProvence('10');

        $loan_status_current = '1';
        
        return view('admin.loan.index', compact('loans','loan_status_current', 'all_top_brands', 'select_conditions','shops'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $car_code       = getCarCode('loan');
        $all_top_brands = $this->brands->getChildBrand(0);
        //$city_id        = $this->shop->find(Auth::user()->shop_id)->city_id; //车源所在城市
        //$provence_id    = $this->shop->find(Auth::user()->shop_id)->provence_id; //车源所在省份

        $area = Area::withTrashed()
                    ->where('pid', '1')
                    ->where('status', '1')
                    ->get();

        // dd($city_id);
        return view('admin.loan.create',compact(
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
    public function store(StoreLoanRequest $loanRequest)
    {
        //
        // dd($loanRequest->all());
        $getInsertedId = $this->loan->create($loanRequest);
        // p(lastSql());exit;
        // return redirect()->route('admin.loan.index')->withInput();
        return redirect('admin/loan/index')->withInput();

    }  

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       
        $loan = $this->loan->find($id);
        $imgs = $loan->hasManyImages;
        
        // dd($loan);

        return view('admin.loan.show', compact('loan', 'imgs'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $loan = $this->loan->find($id);

        // dd($loan);
        $area = Area::withTrashed()
                    ->where('pid', '1')
                    ->where('status', '1')
                    ->get();
        $citys = Area::withTrashed()
                     ->where('pid', $loan->insurance_provence)
                     ->where('status', '1')
                    ->get();
        /*if (Gate::denies('update', $cars)) {
            //不允许编辑,基于Policy
            dd('no no');
        }*/

        // dd($area);
        // dd($loan->insurance_provence);

        foreach ($area as $key => $value) {
            if($loan->insurance_provence == $value->id){
                $provence =  $value;
            }
        }

        foreach ($citys as $key => $value) {
            if($loan->insurance_city == $value->id){
                $city =  $value;
            }
        }
        // dd($cars);
        // dd($provence);
        // dd($city);
        return view('admin.loan.edit', compact(
            'loan','provence','city','area'
        ));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateLoanRequest $loanRequest, $id)
    {
        // p($id);
        // dd($loanRequest->all());

        $this->loan->update($loanRequest, $id);
        // return redirect()->route('admin.loan.index')->withInput();
        return redirect('admin/loan/index')->withInput();
    }

    /**
     * Show the form for editing the specified resource.
     * 图片编辑
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editImg($id)
    {
        $loan =  $this->loan->find($id);
        $imgs = $loan->hasManyImages;

        /*$out_color      = config('tcl.out_color'); //获取配置文件中外观颜色
        $inside_color   = config('tcl.inside_color'); //获取配置文件中内饰颜色
        $sale_number    = config('tcl.sale_number'); //获取配置文件中过户次数
        $car_type       = config('tcl.car_type'); //获取配置文件车源类型
        $customer_res   = config('tcl.customer_res'); //获取配置文件客户来源
        $safe_type      = config('tcl.safe_type'); //获取配置文件保险类别
        $capacity       = config('tcl.capacity'); //获取配置文件排量*/
        
        /*if (Gate::denies('update', $cars)) {
            //不允许编辑,基于Policy
            dd('no no');
        }*/
        /*dd(lastSql());
        dd($imgs);*/
        return view('admin.loan.editImg', compact(
            'imgs','loan'
        ));
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
     * 修改贷款状态
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

        $loan = $this->loan->find($request->id);

        // $is_repeat = $this->loan->isRepeat($loan->vin_code);

        if($request->input('status') == '2'){
            //激活贷款          
            $this->loan->statusChange($request, $request->input('id'));
            $msg = '贷款已经还原';       
        }else{
            //废弃贷款
            $this->loan->statusChange($request, $request->input('id'));
            $msg = '贷款已经完结';
        }
        
        return response()->json(array(
            'status' => 1,
            'msg' => $msg,
        ));      
    }
}
