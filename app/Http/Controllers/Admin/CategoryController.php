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
        $year_type = config('tcl.year_type'); //获取配置文件中所有车款年份

        return view('admin.category.create',compact('all_top_brands', 'year_type'));
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
        $brand_tree = $this->brands->getBrandTree($category_info->brand_id);
        $brand_parents = $brand_tree['parent'];
        $pid_info['perv_name'] = $brand_parents[0]['name'];
        $pid_info['top_name']  = $brand_parents[1]['name'];

        $year_type = config('tcl.year_type'); //获取配置文件中所有车款年份
        
        // dd(config('tcl.car_year'));
        /*p($pid_info);
        dd($brand_parents);
        dd($category_info);*/

        return view('admin.category.edit', compact('category_info', 'pid_info', 'year_type'));
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
        // dd($catgoryRequest->all());
        $this->category->update($catgoryRequest, $id);
        return redirect()->route('admin.category.index')->withInput();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->category->destroy($id);        
        return redirect()->route('admin.category.index');
    }

    //获得指定品牌下车型
    public function getChildCategory(Request $request){

        $brand_id = $request->input('pid');

        $category = $this->category->getChildCategoryByBrandId($brand_id);

        // p($category->toJson());exit;
        if($category->count() > 0){

            return response()->json(array(
                'status' => 1,
                'data'   => $category,
                'message'   => '获取品牌列表成功'
            ));
        }else{

            return response()->json(array(
                'status' => 0,
                'message'   => '该品牌下无子品牌'
            ));
        }        
    }

    //ajax判断车型是否重复
    public function checkRepeat(Request $request){

        // dd($request->all());
        if($this->category->isRepeat($request)){
            //车型重复
            return response()->json(array(
                'status' => 1,
                // 'data'   => $category,
                'message'   => '该车型已经添加'
            ));
        }else{
            //车型不重复
            return response()->json(array(
                'status' => 0,
                'message'   => '车型不重复'
            ));
        }
    }
}
