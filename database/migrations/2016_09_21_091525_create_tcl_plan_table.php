<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTclPlanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {   
        //约车记录表
        Schema::create('tcl_plan', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id'); 
            $table->integer('chance_id')->unsigned()->comment('求购机会ID');
            $table->integer('user_id')->unsigned()->comment('创建者ID');
            $table->dateTime('plan_time')->comment('看车时间');
            $table->string('plan_address',20)->default('')->comment('看车地点');
            $table->char('plan_del',1)->default(0)->comment('是否看车');
            $table->char('status',1)->default(1)->comment('约车状态'); 
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
