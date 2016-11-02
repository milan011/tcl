<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Session;
use App\Http\Requests;
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
     *
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
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.shop.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreShopRequest $ShopRequest)
    {
        $sucessed = $this->shop->create($ShopRequest);

        if($sucessed){
            
            Session::flash('sucess', '添加门店成功');
            // dd($ShopRequest->session()->all());
            return redirect()->route('admin.shop.index')->withInput();
        }else{

            return back();
        }
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
        $shop_info = $this->shop->find($id);
        // p($shop_info);exit;
        return view('admin.shop.edit', compact(

            'shop_info'
        ));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateShopRequest $shopRequest, $id)
    {   
        $sucessed = $this->shop->update($shopRequest, $id);

        if($sucessed){
            
            Session::flash('sucess', '修改门店成功');
            // dd($ShopRequest->session()->all());
            return redirect()->route('admin.shop.index')->withInput();
        }else{
            Session::flash('faill', '修改门店失败');
            return back();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
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
            'msg' => 'ok',
        ));      
    }
}
