<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTclShopTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {   
        //门店信息表
        Schema::create('tcl_shop', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name', 20)->comment('门店名称');
            $table->char('type',1)->default(1)->comment('门店类型');
            $table->integer('provence_id')->comment('门店省份');
            $table->integer('city_id')->comment('门店城市');
            $table->string('telephone',32)->comment('门店电话');
            $table->string('address',32)->default('')->comment('门店地址');
            $table->string('qq_number',15)->default('')->comment('QQ号码');
            $table->string('wx_number',20)->default('')->comment('微信号码');
            $table->string('email',30)->unique()->comment('邮箱');
            $table->char('status', 1)->default(1)->comment('门店状态1:启用2:停用');
            $table->integer('user_id')->comment('创建者ID');
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
