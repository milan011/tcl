<?php
namespace App\Repositories\Shop;

use App\Shop;
use Session;
use Illuminate\Http\Request;
use Gate;
use Datatables;
use Carbon;
use PHPZen\LaravelRbac\Traits\Rbac;
use Auth;
use Illuminate\Support\Facades\Input;
use DB;
use Debugbar;

class ShopRepository implements ShopRepositoryContract
{

    // 根据ID获得门店信息
    public function find($id)
    {   
        return Shop::select(['id', 'pid', 'name', 'provence_id', 'city_id', 'telephone', 'address', 'qq_number', 'wx_number', 'email', 'status','user_id'])->findOrFail($id);
    }

    // 获得门店列表
    public function getAllShops()
    {   
        return Shop::paginate(10);
    }

    /**
     * 获得前端显示的门店,县级店只显示总店
     * @return [type] [description]
     */
    public function getAllshopsWithBefore(){

        return Shop::where('status', '1')
                   ->where('is_show', '1')
                   ->where('pid', '0')
                   ->orderBy('sort', 'desc')
                   ->get();
    }

    // 创建门店
    public function create($requestData)
    {   
        $requestData['user_id'] = Auth::id();
        // dd(Auth::user()->shop_id);
        $shop = new Shop();
        $input =  array_replace($requestData->all());
        $shop->fill($input);

        $shop = $shop->create($input);

        Session::flash('sucess', '添加门店成功');
        return $shop;
    }

    // 修改门店
    public function update($requestData, $id)
    {
        
        $shop  = Shop::findorFail($id);
        $input =  array_replace($requestData->all());
        $shop->fill($input)->save();
        // dd($shop->toJson());
        Session::flash('sucess', '修改门店成功');
        return $shop;
    }

    // 删除门店
    public function destroy($id)
    {
        try {
            $shop = Shop::findorFail($id);
            $shop->delete();
            Session::flash('sucess', '删除门店成功');
           
        } catch (\Illuminate\Database\QueryException $e) {
            Session()->flash('faill', '删除门店失败');
        }      
    }

    //获得城市所有门店
    public function getShopsInCity($city_id){

        return Shop::select('id', 'name')->where('city_id', $city_id)->get();
    }

    //获得河北省所有门店
    public function getShopsInProvence($provence_id){

        return Shop::select('id', 'name')->where('provence_id', $provence_id)->get();
    }

    // 门店是否县级门店
    public function isXianJiMenDian($shop_id){

        $shop = Shop::select('id', 'name', 'pid', 'type')->find($shop_id);
        // dd($shop->type == '2');
        return ($shop->type == '3');       
    }

    //获得下级门店
    public function getShopsBelongs($ship_id){

        return Shop::select('id', 'name')->where('pid', $ship_id)->get();
    }
}
