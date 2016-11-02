<?php

use Illuminate\Database\Seeder;
use App\Role;

class RolesTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $adminRole = new Role;
        $adminRole->name = '超级管理员';
        $adminRole->slug = 'administrator';
        $adminRole->description = '超级管理员';
        $adminRole->save();

        $editorRole = new Role;
        $editorRole->name = 'Manager';
        $editorRole->slug = 'Manager';
        $editorRole->description = 'System Manager';
        $editorRole->save();

        $employeeRole = new Role;
        $employeeRole->name = 'Employee';
        $employeeRole->slug = 'Employee';
        $employeeRole->description = 'Employee';
        $employeeRole->save();

        $adminRole = new Role;
        $adminRole->name = '总部编辑';
        $adminRole->slug = 'hq_editer';
        $adminRole->description = '总部编辑';
        $adminRole->save();

        $adminRole = new Role;
        $adminRole->name = '总部推广';
        $adminRole->slug = 'hq_spread';
        $adminRole->description = '总部推广';
        $adminRole->save();

        $adminRole = new Role;
        $adminRole->name = '总部客服';
        $adminRole->slug = 'hq_customer';
        $adminRole->description = '总部客服';
        $adminRole->save();

        $adminRole = new Role;
        $adminRole->name = '总部财务';
        $adminRole->slug = 'hq_finance';
        $adminRole->description = '总部财务';
        $adminRole->save();

        $adminRole = new Role;
        $adminRole->name = '门店店长';
        $adminRole->slug = 'shop_master';
        $adminRole->description = '门店店长';
        $adminRole->save();

        $adminRole = new Role;
        $adminRole->name = '门店店员';
        $adminRole->slug = 'shop_staff';
        $adminRole->description = '门店店员';
        $adminRole->save();

        $adminRole = new Role;
        $adminRole->name = '总部管理员';
        $adminRole->slug = 'hq_manager';
        $adminRole->description = '总部管理员';
        $adminRole->save();
               
    }
}
