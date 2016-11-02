<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTclUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //系统后台管理员表
        Schema::create('tcl_user', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name', 50)->comment('用户名');
            $table->string('nick_name', 10)->comment('昵称');
            $table->string('password', 60);
            $table->string('telephone',32)->comment('电话');
            $table->string('phone',32)->comment('固定电话');
            $table->string('qq_number',15)->comment('QQ号');
            $table->string('wx_number',20)->comment('微信号码');
            $table->string('email',30)->unique()->comment('邮箱');
            $table->string('user_img',200)->comment('用户头像');
            $table->string('address',32)->comment('地址');
            $table->integer('creater_id')->comment('创建者ID');
            $table->smallInteger('shop_id')->comment('所属门店');
            $table->char('status', 1)->comment('用户状态(1:启用2:停用)');
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
        Schema::drop('user');
    }
}
