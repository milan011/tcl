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
    protected $brand;

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
        return view('admin.brand.create');
    }

    /**
     * Store a newly created resource in storage.
     * 存储品牌
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
        //
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
        //
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