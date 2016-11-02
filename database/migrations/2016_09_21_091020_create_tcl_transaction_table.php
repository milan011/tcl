<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTclTransactionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //交易管理表
        Schema::create('tcl_transcation', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('chance_id')->unsigned()->comment('销售机会ID');
            // $table->foreign('chance_id')->references('id')->on('tcl_chance');
            $table->decimal('deal_price', 6, 1)->default(0.0)->comment('成交价');
            $table->decimal('first_pay', 6, 1)->default(0.0)->comment('首款');
            $table->decimal('last_pay', 6, 1)->default(0.0)->comment('尾款');
            $table->dateTime('done_time')->comment('成交时间');
            $table->decimal('commission', 6, 1)->default(0.0)->comment('应收佣金');
            $table->decimal('commission_infact', 6, 1)->default(0.0)->comment('实收佣金');
            $table->string('commission_remark', 20)->default('')->comment('佣金备注');
            $table->char('trade_status', 1)->comment('审核状态(0:废弃1:正常2:财务审核3:领导审核)')->default('1');
            $table->integer('user_id')->unsigned()->comment('创建者ID');
            // $table->foreign('user_id')->references('id')->on('tcl_user');
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
