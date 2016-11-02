<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTclNoticeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //公告表
        Schema::create('tcl_notice', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('title', 20)->default('')->公告表comment('标题');
            $table->string('content', 1000)->default('')->comment('公告内容');
            $table->char('type', 1)->comment('类型')->default(1);
            $table->integer('creater_id')->unsigned()->comment('创建者ID');
            $table->tinyInteger('sort')->default(10)->comment('排序');
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
