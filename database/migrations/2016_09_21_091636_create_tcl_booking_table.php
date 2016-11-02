<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTclBookingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {   
        //订车记录表
        Schema::create('tcl_booking', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id'); 
            $table->integer('chance_id')->unsigned()->comment('销售机会ID');
            $table->decimal('deal_price', 6, 1)->comment('成交价格');
            $table->decimal('first_pay', 6, 1)->default(0.0)->comment('预付款');
            $table->string('sale_card', 10)->default('')->comment('压卖方手续');
            $table->dateTime('deal_time')->comment('约定交车时间');
            $table->string('violate', 20)->default('')->comment('违章未处理');
            $table->char('status',1)->default(1)->comment('订车状态');
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
