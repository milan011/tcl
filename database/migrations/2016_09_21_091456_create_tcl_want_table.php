<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTclWantTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {   
        //求购信息表
        Schema::create('tcl_want', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->char('want_code', 10)->comment('求购编号');
            $table->string('car_type', 6)->default('轿车')->comment('期望车型类别'); 
            $table->integer('brand_id')->unsigned()->comment('期望品牌');
            $table->integer('categorey_id')->unsigned()->comment('期望车系');
            $table->integer('cate_id')->unsigned()->comment('期望车型');
            $table->decimal('capacity', 3, 1)->default(1.5)->comment('期望排量');
            $table->char('gearbox', 5)->default('自动')->comment('期望变速箱');
            $table->decimal('bottom_price', 6, 1)->comment('期望价格');
            $table->decimal('top_price', 6, 1)->comment('最高价格');
            $table->tinyInteger('age')->default(1)->comment('期望车龄');
            $table->char('mileage', 5)->default(1)->comment('行驶里程');
            $table->char('out_color', 5)->default('黑色')->comment('外观颜色');
            $table->char('inside_color', 5)->default('黑色')->comment('内饰颜色');
            $table->integer('customer_id')->comment('对应用户ID');
            $table->integer('creater_id')->comment('创建者ID');
            $table->integer('shop_id')->comment('创建者门店ID');
            $table->integer('want_area')->comment('创建者区域ID');
            $table->string('remark',100)->default('')->comment('备注');
            $table->char('status', 1)->comment('求购状态0：废弃1：正常：2：约车3：订车：4交易')->default(1);
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
