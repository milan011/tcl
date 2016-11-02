<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTclBrandTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {   
        //品牌表
        Schema::create('tcl_brand', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name', 10)->comment('品牌名称');
            $table->string('logo_img', 50)->default('')->comment('品牌LOGO');
            $table->tinyInteger('sort')->unsigned()->default(10)->comment('品牌排序');
            $table->char('status', 1)->comment('品牌状态0:废弃1:正常')->default(1);
            $table->char('recommend', 1)->comment('是否推荐')->default(0);
            $table->integer('creater_id')->unsigned()->comment('创建者ID');          
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
