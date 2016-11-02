<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTclSelectCarTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {   
        //车辆检测表
        Schema::create('tcl_select_car', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('car_id')->unsigned()->comment('车源ID');
            $table->char('accdent',1)->default(0)->comment('重大事故'); 
            $table->char('sweemed',1)->default(0)->comment('水淹');
            $table->string('fineness',10)->default('')->comment('成色'); 
            $table->string('engine',20)->default('')->comment('发动机情况'); 
            $table->string('description',200)->default('')->comment('检车结论');
            $table->integer('user_id')->comment('检测者');           
            $table->timestamps();
            $table->softDeletes();
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
