<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Session;
use App\Http\Requests;
use App\Area;
use App\Http\Controllers\Controller;

class AreaController extends Controller
{   
    
    /**
     * Display a listing of the resource.
     * 
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
       
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
    public function store(StoreShopRequest $ShopRequest)
    {
        
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
     * 编辑门店
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {       
        
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
        
    }

    /**
     * Remove the specified resource from storage.
     * 删除门店
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {    
               
    }

    /**
     * ajax获得城市信息
     * @return \Illuminate\Http\Response
     */
    public function getAreaInfo(Request $request)
    {    
        // dd($request->all());
        $area = Area::withTrashed()
                    ->where('pid', $request->provence_id)
                    ->where('status', '1')
                    ->get();
        
        // dd($area);
        return response()->json(array(
            'status' => 1,
            'msg' => 'ok',
            'data' => $area,
        ));      
    }
}
