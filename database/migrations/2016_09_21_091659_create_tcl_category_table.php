<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTclCategoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {   
        //车型表
        Schema::create('tcl_category', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id'); 
            $table->string('name',10)->comment('品牌名称');
            $table->string('logo_img',50)->default('')->comment('品牌logo');
            $table->tinyInteger('sort')->default(10)->comment('品牌排序');
            $table->char('status',1)->default(1)->comment('品牌状态');
            $table->char('recommend',1)->default(0)->comment('是否推荐');
             $table->integer('user_id')->unsigned()->comment('创建者ID');
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
