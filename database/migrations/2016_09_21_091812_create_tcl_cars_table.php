<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTclCarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {   
        //车源信息表
        Schema::create('tcl_cars', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->char('want_code', 10)->comment('车源编号'); 
            $table->integer('brand_id')->unsigned()->comment('车辆品牌');
            $table->integer('categorey_id')->unsigned()->comment('车辆车系');
            $table->integer('cate_id')->unsigned()->comment('车辆车型');
            $table->string('img_url', 1000)->default('')->comment('车源图片');
            $table->string('img_thumb', 1000)->default('')->comment('车源图片缩略图');
            $table->decimal('capacity', 3, 1)->comment('排量');
            $table->char('gearbox', 5)->comment('变速箱');
            $table->char('out_color', 5)->default('黑色')->comment('外观颜色');
            $table->char('inside_color', 5)->default('黑色')->comment('内饰颜色');
            $table->dateTime('plate_date')->comment('上牌日期');
            $table->dateTime('plate_end')->comment('到检日期');
            $table->integer('plate_provence')->comment('上牌省份');
            $table->integer('plate_city')->comment('上牌城市');
            $table->tinyInteger('age')->comment('车龄');
            $table->char('safe_type', 5)->default('商业险')->comment('保险类别');
            $table->dateTime('safe_end')->comment('到保日期');
            $table->tinyInteger('sale_number')->default(0)->comment('过户次数');
            $table->char('mileage', 5)->comment('行驶里程');
            $table->string('description',100)->default('')->comment('车辆描述');
            $table->decimal('top_price', 6, 1)->comment('期望价格');
            $table->decimal('bottom_price', 6, 1)->comment('最高价格');
            $table->char('car_status', 1)->default(1)->comment('车源状态0：废弃1：正常：2：约车3：订车：4交易');
            $table->char('car_type', 1)->default(1)->comment('车源类别1:用户自售2:淘车乐收购');
            $table->integer('customer_id')->comment('对应用户ID');           
            $table->integer('creater_id')->comment('创建者ID');
            $table->integer('shop_id')->comment('创建者门店ID');
            $table->integer('want_area')->comment('创建者区域ID');          
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
