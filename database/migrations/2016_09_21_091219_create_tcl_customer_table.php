<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTclCustomerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //客户信息表
        Schema::create('tcl_customer', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name', 8)->comment('客户姓名');
            $table->string('password', 60); 
            $table->string('telephone',32)->comment('客户电话');
            $table->string('address',32)->default('')->comment('客户地址');
            $table->string('qq_number',15)->default('')->comment('QQ号码');
            $table->string('wx_number',20)->default('')->comment('微信号码');
            $table->string('indentily_card',20)->default('')->comment('身份证号码');
            $table->char('sex', 1)->default(1)->comment('性别');
            $table->char('type', 1)->default(1)->comment('客户类型');
            $table->char('customer_res', 1)->default(1)->comment('客户来源');           
            $table->integer('creater_id')->comment('创建者ID');
            $table->rememberToken();
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
