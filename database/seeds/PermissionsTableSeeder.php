<?php

use Illuminate\Database\Seeder;
use App\Permissions;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /**
         * User Permissions
         */
        
        $createUser = new Permissions;
        $createUser->name = 'Create user';
        $createUser->slug = 'user.create';
        $createUser->description = 'Permission to create user';
        $createUser->save();

        $updateUser = new Permissions;
        $updateUser->name = 'Update user';
        $updateUser->slug = 'user.update';
        $updateUser->description = 'Permission to update user';
        $updateUser->save();

        $deleteUser = new Permissions;
        $deleteUser->name = 'Delete user';
        $deleteUser->slug = 'user.delete';
        $deleteUser->description = 'Permission to update delete';
        $deleteUser->save();


         /**
         * Client Permissions
         */
        
        $createClient = new Permissions;
        $createClient->name = 'Create client';
        $createClient->slug = 'client.create';
        $createClient->description = 'Permission to create client';
        $createClient->save();

        $updateClient = new Permissions;
        $updateClient->name = 'Update client';
        $updateClient->slug = 'client.update';
        $updateClient->description = 'Permission to update client';
        $updateClient->save();

        $deleteClient = new Permissions;
        $deleteClient->name = 'Delete client';
        $deleteClient->slug = 'client.delete';
        $deleteClient->description = 'Permission to delete client';
        $deleteClient->save();

         /**
         * Tasks Permissions
         */
        
        $createTask = new Permissions;
        $createTask->name = 'Create task';
        $createTask->slug = 'task.create';
        $createTask->description = 'Permission to create task';
        $createTask->save();

        $updateTask = new Permissions;
        $updateTask->name = 'Update task';
        $updateTask->slug = 'task.update';
        $updateTask->description = 'Permission to update task';
        $updateTask->save();

         /**
         * Leads Permissions
         */
        
        $createLead = new Permissions;
        $createLead->name = 'Create lead';
        $createLead->slug = 'lead.create';
        $createLead->description = 'Permission to create lead';
        $createLead->save();

        $updateLead = new Permissions;
        $updateLead->name = 'Update lead';
        $updateLead->slug = 'lead.update';
        $updateLead->description = 'Permission to update lead';
        $updateLead->save();

        $updateLead = new Permissions;
        $updateLead->name = '创建门店';
        $updateLead->slug = 'shop.create';
        $updateLead->description = '创建门店权限';
        $updateLead->save();

        $updateLead = new Permissions;
        $updateLead->name = '修改门店';
        $updateLead->slug = 'shop.update';
        $updateLead->description = '修改门店权限';
        $updateLead->save();

        $updateLead = new Permissions;
        $updateLead->name = '查看门店';
        $updateLead->slug = 'shop.check';
        $updateLead->description = '查看门店权限';
        $updateLead->save();

        $updateLead = new Permissions;
        $updateLead->name = '删除门店';
        $updateLead->slug = 'shop.delete';
        $updateLead->description = '删除门店权限';
        $updateLead->save();

        $updateLead = new Permissions;
        $updateLead->name = '创建用户';
        $updateLead->slug = 'tcl_user.create';
        $updateLead->description = '创建用户权限';
        $updateLead->save();

        $updateLead = new Permissions;
        $updateLead->name = '查看用户';
        $updateLead->slug = 'tcl_user.check';
        $updateLead->description = '查看用户权限';
        $updateLead->save();

        $updateLead = new Permissions;
        $updateLead->name = '修改用户';
        $updateLead->slug = 'tcl_user.update';
        $updateLead->description = '修改用户权限';
        $updateLead->save();

        $updateLead = new Permissions;
        $updateLead->name = '删除用户';
        $updateLead->slug = 'tcl_user.delete';
        $updateLead->description = '删除用户权限';
        $updateLead->save();

        $updateLead = new Permissions;
        $updateLead->name = '创建公告';
        $updateLead->slug = 'notice.create';
        $updateLead->description = '创建公告权限';
        $updateLead->save();

        $updateLead = new Permissions;
        $updateLead->name = '修改公告';
        $updateLead->slug = 'notice.update';
        $updateLead->description = '修改公告权限';
        $updateLead->save();

        $updateLead = new Permissions;
        $updateLead->name = '删除公告';
        $updateLead->slug = 'notice.delete';
        $updateLead->description = '删除公告权限';
        $updateLead->save();

        $updateLead = new Permissions;
        $updateLead->name = '查看公告';
        $updateLead->slug = 'notice.check';
        $updateLead->description = '查看公告权限';
        $updateLead->save();
        
        $updateLead = new Permissions;
        $updateLead->name = '查看车源信息';
        $updateLead->slug = 'car.check';
        $updateLead->description = '查看车源信息权限';
        $updateLead->save();

        $updateLead = new Permissions;
        $updateLead->name = '创建车源信息';
        $updateLead->slug = 'car.create';
        $updateLead->description = '创建车源信息权限';
        $updateLead->save();

        $updateLead = new Permissions;
        $updateLead->name = '修改车源信息';
        $updateLead->slug = 'car.update';
        $updateLead->description = '修改车源信息权限';
        $updateLead->save();

        $updateLead = new Permissions;
        $updateLead->name = '删除车源信息';
        $updateLead->slug = 'car.delete';
        $updateLead->description = '删除车源信息权限';
        $updateLead->save();

        $updateLead = new Permissions;
        $updateLead->name = '查看求购信息';
        $updateLead->slug = 'want.check';
        $updateLead->description = '查看求购信息权限';
        $updateLead->save();

        $updateLead = new Permissions;
        $updateLead->name = '创建求购信息';
        $updateLead->slug = 'want.create';
        $updateLead->description = '创建求购信息权限';
        $updateLead->save();

        $updateLead = new Permissions;
        $updateLead->name = '修改求购信息';
        $updateLead->slug = 'want.update';
        $updateLead->description = '修改求购信息权限';
        $updateLead->save();

        $updateLead = new Permissions;
        $updateLead->name = '删除求购信息';
        $updateLead->slug = 'want.delete';
        $updateLead->description = '删除求购信息权限';
        $updateLead->save();

        $updateLead = new Permissions;
        $updateLead->name = '查看销售机会';
        $updateLead->slug = 'chance.check';
        $updateLead->description = '查看销售机会权限';
        $updateLead->save();

        $updateLead = new Permissions;
        $updateLead->name = '创建销售机会';
        $updateLead->slug = 'chance.create';
        $updateLead->description = '创建销售机会权限';
        $updateLead->save();

        $updateLead = new Permissions;
        $updateLead->name = '修改销售机会';
        $updateLead->slug = 'chance.update';
        $updateLead->description = '修改销售机会权限';
        $updateLead->save();

        $updateLead = new Permissions;
        $updateLead->name = '删除销售机会';
        $updateLead->slug = 'chance.delete';
        $updateLead->description = '删除销售机会权限';
        $updateLead->save();

        $updateLead = new Permissions;
        $updateLead->name = '查看约车信息';
        $updateLead->slug = 'plan.check';
        $updateLead->description = '查看约车信息权限';
        $updateLead->save();


        $updateLead = new Permissions;
        $updateLead->name = '创建约车信息';
        $updateLead->slug = 'plan.create';
        $updateLead->description = '创建约车信息权限';
        $updateLead->save();

        $updateLead = new Permissions;
        $updateLead->name = '删除约车信息';
        $updateLead->slug = 'plan.update';
        $updateLead->description = '删除约车信息权限';
        $updateLead->save();

        $updateLead = new Permissions;
        $updateLead->name = '修改约车信息';
        $updateLead->slug = 'plan.delete';
        $updateLead->description = '修改约车信息权限';
        $updateLead->save();

        $updateLead = new Permissions;
        $updateLead->name = '查看订车信息';
        $updateLead->slug = 'booking.check';
        $updateLead->description = '查看订车信息权限';
        $updateLead->save();

        $updateLead = new Permissions;
        $updateLead->name = '创建订车信息';
        $updateLead->slug = 'booking.create';
        $updateLead->description = '创建订车信息权限';
        $updateLead->save();

        $updateLead = new Permissions;
        $updateLead->name = '修改订车信息';
        $updateLead->slug = 'booking.update';
        $updateLead->description = '修改订车信息权限';
        $updateLead->save();

        $updateLead = new Permissions;
        $updateLead->name = '删除订车信息';
        $updateLead->slug = 'booking.delete';
        $updateLead->description = '删除订车信息权限';
        $updateLead->save();

        $updateLead = new Permissions;
        $updateLead->name = '查看交易信息';
        $updateLead->slug = 'transcation.check';
        $updateLead->description = '查看交易信息权限';
        $updateLead->save();

        $updateLead = new Permissions;
        $updateLead->name = '创建交易信息';
        $updateLead->slug = 'transcation.create';
        $updateLead->description = '创建交易信息权限';
        $updateLead->save();

        $updateLead = new Permissions;
        $updateLead->name = '修改交易信息';
        $updateLead->slug = 'transcation.update';
        $updateLead->description = '修改交易信息权限';
        $updateLead->save();

        $updateLead = new Permissions;
        $updateLead->name = '删除交易信息';
        $updateLead->slug = 'transcation.delete';
        $updateLead->description = '删除交易信息权限';
        $updateLead->save();

        $updateLead = new Permissions;
        $updateLead->name = '权限管理';
        $updateLead->slug = 'role.manage';
        $updateLead->description = '权限管理权限';
        $updateLead->save();
    }
}
