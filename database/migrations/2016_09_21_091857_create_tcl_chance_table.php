<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTclChanceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {   
        // 销售机会表
        Schema::create('tcl_chance', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('car_id')->unsigned()->comment('车源ID');
            $table->integer('want_id')->unsigned()->comment('求购信息ID');
            $table->integer('car_customer_id')->unsigned()->comment('车源用户ID');
            $table->integer('want_customer_id')->unsigned()->comment('求购信息用户ID');
            $table->integer('car_creater')->unsigned()->comment('车源创建者ID');
            $table->integer('want_creater')->unsigned()->comment('求购信息创建者ID');
            $table->integer('creater')->unsigned()->comment('销售机会创建者ID');
            $table->char('status',1)->default(1)->comment('机会状态0：废弃1：正常2：约车3：订车4：交易');          
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
