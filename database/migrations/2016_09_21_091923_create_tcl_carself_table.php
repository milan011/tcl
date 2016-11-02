<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTclCarselfTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {   
        //淘车乐自售表
        Schema::create('tcl_carself', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('car_id')->unsigned()->comment('车源ID');
            $table->decimal('buy_price', 6, 1)->comment('收购价格');
            $table->decimal('buy_inface', 6, 1)->comment('实际付款');
            $table->char('repaired', 1)->comment('是否整备')->default(1);
            $table->string('repaired_type', 20)->comment('整备方式');
            $table->decimal('repaired_price', 6, 1)->comment('整备金额');
            $table->dateTime('repaired_time')->comment('整备时间');
            $table->integer('user_id')->unsigned()->comment('整备人ID');
            $table->char('status', 1)->comment('库存状态1：在库2：已售')->default(1);
            $table->dateTime('sale_time')->comment('出售时间');
            $table->decimal('sale_price', 6, 1)->comment('出售价格');
            $table->integer('sale_user_id')->unsigned()->comment('创建者ID');
            $table->integer('creater_id')->unsigned()->comment('创建者ID');
            $table->string('buy_reark', 50)->default('')->comment('入库备注');
            $table->string('sale_remark', 50)->default('')->comment('出库备注');
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
