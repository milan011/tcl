<?php

namespace App\Policies;

use App\User;
use App\Cars;

class CarsPolicy{

    //超级管理员拥有所有权限
    /*public function before(User $user){

        if($user->isSuperAdmin()) {

            return true;
        }
    }*/


    /**
     * 判断给定车源是否可以被给定用户更新
     *
     * @param  \App\User  $user
     * @param  \App\Cars  $car
     * 首先判断是否为用户自己添加的车源，再判断该用户是否为车源所属门店店长
     * @return bool
     */
    public function update(User $user, Cars $cars)
    {
        /*p($cars->shop_id);
        p($cars->creater_id);
        dd($user);*/
        $user_id        = $user->id; //用户id
        $car_creater_id = $cars->creater_id; //车源创建者id
        $car_shop_id    = $cars->shop_id;    //车源门店id
        $user_shop_id   = $user->shop_id;    //用户门店ID
        $user_role_id   = $user->hasManyUserRole[0]->role_id; //用户角色id

        /*p($user_id);
        p($car_creater_id);
        p($car_shop_id);
        p($user_shop_id);
        p($user_role_id);
        p(config('tcl.user_role_type')['门店店长']);exit;*/

        if($user_id == $car_creater_id){
            // 自己添加的车源
            return true;
        }

        if(($user_role_id == config('tcl.user_role_type')['门店店长']) && ($user_shop_id = $car_shop_id)){

            // 车源所属门店店长
            return true;
        }

        return false;
    }
}