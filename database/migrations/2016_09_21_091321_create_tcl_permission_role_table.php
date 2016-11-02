<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTclPermissionRoleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {   
        // 权限-角色对应表
        Schema::create('tcl_permission_role', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('permission_id')->index()->foreign()
            ->references('id')->on('tcl_permissions')->onDelete('cascade');
            $table->integer('role_id')->index()->foreign()
            ->references('id')->on('tcl_roles')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
