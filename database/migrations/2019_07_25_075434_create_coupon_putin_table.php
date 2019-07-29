<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCouponPutinTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coupon_putin', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('batch_no',20)->comment('批次号');
            $table->string('lable',30)->comment('标签');
            $table->integer('get_rule')->comment('领取规则，每天没人多少张');
            $table->tinyInteger('type')->comment('投放方式（1:短信群发；2:下载二维码；3:门店二维码；4:生成链接）');
            $table->dateTime('start_time')->comment('领取时间开始');
            $table->dateTime('stop_time')->comment('领取时间结束');
            $table->integer('coupon_id')->comment('优惠券id');
            $table->integer('sum')->comment('此次投放量');

            // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('coupon_putin');
    }
}
