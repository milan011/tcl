<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTclWantFollowTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //求购信息追踪表
        Schema::create('tcl_want_follow', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id'); 
            $table->integer('want_id')->unsigned()->comment('求购信息ID');
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
