<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Session;
use App\Http\Requests;
use App\Area;
use App\Http\Controllers\Controller;
use App\Http\Requests\Shop\UpdateShopRequest;
use App\Http\Requests\Shop\StoreShopRequest;
use App\Repositories\Shop\ShopRepositoryContract;

class ShopController extends Controller
{   
    protected $shop;

    public function __construct(
        ShopRepositoryContract $shop
    ) {
    
        $this->shop = $shop;
        // $this->middleware('shop.create', ['only' => ['create']]);
    }

    /**
     * Display a listing of the resource.
     * 门店列表
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        // throw new \App\Exceptions\ApiException("我故意的", 100);
        $shops = $this->shop->getAllShops();
        // dd($shops);
        /*p(lastSql());
        p($shops);exit;*/
        return view('admin.shop.index', compact(

            'shops'
        ));
    }

    /**
     * Show the form for creating a new resource.
     * 添加门店
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $area = Area::withTrashed()
                    ->where('pid', '1')
                    ->where('status', '1')
                    ->get();

        return view('admin.shop.create', compact('area'));
    }

    /**
     * Store a newly created resource in storage.
     * 添加门店
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreShopRequest $ShopRequest)
    {
        $getInsertedId = $this->shop->create($ShopRequest);
        // p(lastSql());exit;
        return redirect()->route('admin.shop.index')->withInput();
    }

    /**
     * Display the specified resource.
     * 显示门店详细信息
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     * 编辑门店
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {       

        $shop_info = $this->shop->find($id);

        $area = Area::withTrashed()
                    ->where('pid', '1')
                    ->where('status', '1')
                    ->get();

        $city_list = Area::withTrashed()
                    ->where('pid', $shop_info->provence_id)
                    ->where('status', '1')
                    ->get();
        // dd(lastSql());
        // dd($shop_info);
        // dd($city_list);
        return view('admin.shop.edit', compact(

            'shop_info',
            'area',
            'city_list'
        ));
    }

    /**
     * Update the specified resource in storage.
     * 修改门店
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateShopRequest $shopRequest, $id)
    {   
        $this->shop->update($shopRequest, $id);
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     * 删除门店
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {    
        $this->shop->destroy($id);        
        return redirect()->route('admin.shop.index');
    }

    /**
     * 修改门店状态
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

        $shop = $this->shop->find($request->id);

        $shop->status = $request->input('status');

        $shop->save();

        return response()->json(array(
            'status' => 1,
            'msg' => '修改成功',
        ));      
    }
}
