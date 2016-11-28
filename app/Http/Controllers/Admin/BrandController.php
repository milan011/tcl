<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\Brand\UpdateBrandRequest;
use App\Http\Requests\Brand\StoreBrandRequest;
use App\Repositories\Brand\BrandRepositoryContract;

class BrandController extends Controller
{
    protected $brands;

    public function __construct(

        BrandRepositoryContract $brands
    ) {
    
        $this->brands = $brands;

        // $this->middleware('brand.create', ['only' => ['create']]);
    }

    /**
     * Display a listing of the resource.
     * 品牌列表
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $brands = $this->brands->getAllBrands();
        // dd(lastSql());
        // dd($brands);
        /*foreach ($Brands as $key => $value) {
           dd($value->belongsToShop);
        }*/
        return view('admin.brand.index', compact('brands'));
    }

    /**
     * Show the form for creating a new resource.
     * 创建品牌
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $all_top_brands = $this->brands->getChildBrand(0);
        return view('admin.brand.create',compact('all_top_brands'));
    }

    /**
     * Store a newly created resource in storage.
     * 存储品牌
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBrandRequest $brandRequest)
    {
        // dd($brandRequest->all());
        $getInsertedId = $this->brands->create($brandRequest);
        // p(lastSql());exit;
        return redirect()->route('admin.brand.index')->withInput();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     * 编辑品牌
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $brand_info = $this->brands->find($id);
        $brand_tree = $this->brands->getBrandTree($id);
        // dd(lastSql());
        // dd($brand_info);exit;
        return view('admin.brand.edit', compact(

            'brand_info'
        ));
    }

    /**
     * Update the specified resource in storage.
     * 更新品牌
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        p($id);
        dd($request->all());
        $this->brands->update($request, $id);
        return redirect()->route('admin.brand.index')->withInput();
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

    //获得子品牌
    public function getChildBrand(Request $request){

        $brand_id = $request->input('pid');

        $brands = $this->brands->getChildBrand($brand_id);

        // p($brands->toJson());exit;
        if($brands->count() > 0){

            return response()->json(array(
                'status' => 1,
                'data'   => $brands,
                'message'   => '获取品牌列表成功'
            ));
        }else{

            return response()->json(array(
                'status' => 0,
                'message'   => '该品牌下无子品牌'
            ));
        }
         
    }
}
