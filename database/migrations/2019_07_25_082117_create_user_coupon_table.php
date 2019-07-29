<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserCouponTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_coupon', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('user_id')->comment('用户标识');
            $table->integer('coupon_id')->comment('优惠券标识');
            $table->string('code',64)->comment('优惠券码');
            $table->tinyInteger('status')->comment('状态（1:未使用；2:已使用；3:已过期）');
            $table->dateTime('get_time')->comment('领取时间')->nullable();
            $table->integer('user_phone')->comment('领券者手机号')->nullable();
            $table->integer('used_phone')->comment('使用者手机号')->nullable();

            $table->unique('code');
            $table->index('user_id');
            $table->index('coupon_id');
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
        Schema::dropIfExists('user_coupon');
    }
}
