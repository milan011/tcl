<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTclEstimateTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {   
        // 评估
        Schema::create('tcl_estimeate', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('car_id')->unsigned()->comment('车源ID');
            $table->string('description',200)->default('')->comment('评估说明');
            $table->decimal('suggest_price', 6, 1)->comment('评估价格');
            $table->integer('user_id')->comment('评估者');
            $table->char('status',1)->default(1)->comment('评估状态');           
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
