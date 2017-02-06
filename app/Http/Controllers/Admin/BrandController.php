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

        foreach ($brands as $key => $value) {
            $parent_brand = $this->brands->getBrandTree($value->id);
            // dd($parent_brand['parent']);
            switch (count($parent_brand['parent'])) {
                case '0':
                    $brands[$key]['brand_level'] = '顶级品牌';
                    break;
                case '1':
                    $brands[$key]['brand_level'] = '一级品牌';
                    break;
                case '2':
                    $brands[$key]['brand_level'] = '车系';
                    break;
                default:
                    $brands[$key]['brand_level'] = '未知';
                    break;
            }
        }

        // dd($brands[0]);
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
        $brand_parents = $brand_tree['parent'];
        // dd(lastSql());
        // dd(($brand_parents));exit;
        switch (count($brand_parents)) {
            case '0':
                # 顶级品牌
                $pid_info['name'] = '顶级品牌';
                $pid_info['pid']  = '0';
                $pid_info['top_name']  = $brand_info['name'];
                break;
            case '1':
                # 一级品牌
                $pid_info['name']      = '一级品牌';
                $pid_info['pid']       = $brand_parents[0]['id'];
                $pid_info['top_name']  = $brand_parents[0]['name'];
                break;
            case '2':
                # 二级品牌
                $pid_info['name'] = '二级品牌';
                $pid_info['pid']       = $brand_parents[0]['id'];
                $pid_info['perv_name'] = $brand_parents[0]['name'];
                $pid_info['top_name']  = $brand_parents[1]['name'];
                break;
            default:
                # code...
            break;
        }
        // dd($pid_info);

        return view('admin.brand.edit', compact(

            'brand_info',
            'pid_info'
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
        // p($id);
        // dd($request->all());
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
        $this->brands->destroy($id);        
        return redirect()->route('admin.brand.index');
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

    /**
     * 修改品牌状态
     *
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

        $brand = $this->brands->find($request->id);

        $brand->status = $request->input('status');

        $brand->save();

        return response()->json(array(
            'status' => 1,
            'msg' => '修改成功',
        ));      
    }
}
