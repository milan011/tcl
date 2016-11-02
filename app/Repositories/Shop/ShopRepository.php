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

class ShopRepository implements ShopRepositoryContract
{

    public function find($id)
    {
        return Shop::findOrFail($id);
    }

    public function getAllShops()
    {   
        // $status = '1';
        /*$shop = new Shop();

        if(isset($status)){

            $shop = $shop->where('status', '!=', $status);
        }
        
        $shop = $shop->where('type', '=', '1');

        return $shop->get()->toArray();*/

        return Shop::paginate(10);
    }

    public function getAllUsersWithDepartments()
    {
        return  User::select(array
            ('users.name', 'users.id',
                DB::raw('CONCAT(users.name, " (", departments.name, ")") AS full_name')))
        ->join('department_user', 'users.id', '=', 'department_user.user_id')
        ->join('departments', 'department_user.department_id', '=', 'departments.id')
        ->lists('full_name', 'id');
    }



    public function create($requestData)
    {   
        $requestData['user_id'] = Auth::id();
        // dd($requestData->all());
        $shop = new Shop();
        $input =  array_replace($requestData->all());
        $shop->fill($input);

        $shop = $shop->create($input);

        // $shop = $shop->save();

        /*p(lastSql());
        dd($shop->id);*/

        if($shop){

            
            return $shop;
        }else{

            return false;
        }

        /*try {

            Shop::create($input);

        } catch (Illuminate\Database\QueryException $e) {

            return Redirect::to('/login-me')->with('msg', ' Sorry something went worng. Please try again.');
        }*/

        /*if(Shop::create($input)){

            // $shop->save();
            Session::flash('flash_message', '添加门店成功');
            return $shop;
        }else{

            p('hehe');exit;
        }*/
    }

    public function update($requestData, $id)
    {
        
        $shop  = Shop::findorFail($id);

        $input =  array_replace($requestData->all());

        $shop->fill($input)->save();

        dd($shop->toJson());

        if($shop){
           
            return $shop;
        }else{

            return false;
        }
    }

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
}
