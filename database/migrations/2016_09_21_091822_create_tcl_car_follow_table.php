<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTclCarFollowTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {   
        // 车源跟踪表
        Schema::create('tcl_car_follow', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id'); 
            $table->integer('car_id')->unsigned()->comment('车源ID');
            $table->integer('user_id')->comment('跟进用户ID');
            $table->char('follow_type',1)->default(0)->comment('采用方式0系统，1记录，2电话，3拜访');
            $table->char('operate_type',1)->default(0)->comment('操作方式0创建，1修改，2删除');
            $table->string('description',500)->default('')->comment('跟进信息描述');          
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
