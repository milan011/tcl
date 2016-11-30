<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Repositories\Brand\BrandRepositoryContract;
use App\Repositories\Category\CategoryRepositoryContract;
use App\Http\Requests\Category\UpdateCategoryRequest;
use App\Http\Requests\Category\StoreCategoryRequest;

class CategoryController extends Controller
{
    protected $category;
    protected $brands;

    public function __construct(

        CategoryRepositoryContract $category,
        BrandRepositoryContract $brands
    ) {
    
        $this->category = $category;
        $this->brands = $brands;

        // $this->middleware('brand.create', ['only' => ['create']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categorys = $this->category->getAllcategory();
        // dd(lastSql());
        // dd($categorys[0]->belongsToBrand);
        /*foreach ($category as $key => $value) {
           dd($value->belongsToShop);
        }*/
        return view('admin.category.index', compact('categorys'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $all_top_brands = $this->brands->getChildBrand(0);
        return view('admin.category.create',compact('all_top_brands'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCategoryRequest $catgoryRequest)
    {
        // dd($catgoryRequest->all());
        $getInsertedId = $this->category->create($catgoryRequest);
        // p(lastSql());exit;
        return redirect()->route('admin.category.index')->withInput();    
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
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category_info = $this->category->find($id);
        
        dd($category_info);

        return view('admin.category.edit', compact('category_info'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCategoryRequest $catgoryRequest, $id)
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
