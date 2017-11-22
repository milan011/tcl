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
use App\Http\Requests\Cars\UpdateCarsAppraiserRequest;
use App\Http\Requests\Cars\StoreCarsRequest;

class AppraiserController extends Controller
{   
    protected $car;
    protected $brands;
    protected $shop;

    public function __construct(

        CarRepositoryContract $car,
        BrandRepositoryContract $brands,
        ShopRepositoryContract $shop
    ) {
    
        $this->car    = $car;
        $this->brands = $brands;
        $this->shop   = $shop;


        // $this->middleware('brand.create', ['only' => ['create']]);
    }

    /**
     * Display a listing of the resource.
     * 所有车源列表
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // dd($request->all());
        $all_top_brands = $this->brands->getChildBrand(0);
        $request['car_status']   = '1';
        $request['is_show']      = '1';

        if(!$request->has('is_appraiser')){

            $request['is_appraiser'] = '2';
        }
        // dd($request->all());
        $select_conditions  = $request->all();
        // dd($select_conditions);
        $cars = $this->car->getAllcars($request);
        // dd(lastSql());
        $shops = $this->shop->getShopsInProvence('10');

        // dd($shops);
        // dd(lastSql());
        // dd($cars);
        /*foreach ($cars as $key => $value) {
            p($value->id);
            p($value->belongsToUser->nick_name);
        }
        exit;*/
        $car_status_current = '1';
        
        return view('admin.appraiser.index', compact('cars','car_status_current', 'all_top_brands', 'select_conditions','shops'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }  

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cars = $this->car->find($id);

        $area = Area::withTrashed()
                    ->where('pid', '1')
                    ->where('status', '1')
                    ->get();
        $citys = Area::withTrashed()
                     ->where('pid', $cars->plate_provence)
                     ->where('status', '1')
                    ->get();
        /*if (Gate::denies('update', $cars)) {
            //不允许编辑,基于Policy
            dd('no no');
        }*/

        foreach ($area as $key => $value) {
            if($cars->plate_provence == $value->id){
                $provence =  $value;
            }
        }

        foreach ($citys as $key => $value) {
            if($cars->plate_city == $value->id){
                $city =  $value;
            }
        }
        // dd($cars);
        // dd($area);
        // dd($city);
        return view('admin.appraiser.edit', compact(
            'cars','provence','city','area'
        ));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCarsAppraiserRequest $appraiserRequest, $id)
    {
        // p($id);
        // dd($appraiserRequest->all());

        $this->car->updateByAppraiser($appraiserRequest, $id);
        return redirect('admin/appraiser/index')->withInput();
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
}
