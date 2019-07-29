<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCouponUseRecordTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coupon_use_record', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('coupon_id')->comment('优惠券id');
            $table->string('coupon_name',30)->comment('优惠券名称');
            $table->dateTime('use_time')->comment('使用时间');
            $table->tinyInteger('use_way')->comment('核销方式（1:扫码核销；2:待定）');
            $table->string('hospital_code')->comment('医院编号');
            $table->string('hospital_name')->comment('门店名称');
            $table->string('expense_name',30)->comment('核销人员姓名');
            $table->string('used_name',30)->comment('使用者姓名');
            $table->string('used_phone',11)->comment('使用者电话');
            $table->string('coupon_phone',11)->comment('领券者电话');
            $table->string('coupon_code',64)->comment('优惠券码');
            $table->string('order_no',100)->comment('订单号');
            $table->decimal('should_amount')->comment('应收金额');
            $table->decimal('actual_amount')->comment('实收金额');
            $table->decimal('discounts_amount')->comment('优惠金额');
            $table->string('remarks')->comment('备注')->nullable();
            $table->dateTime('register_time')->comment('注册时间');
            $table->dateTime('first_order_time')->comment('首单时间')->nullable();

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
        Schema::dropIfExists('coupon_use_record');
    }
}
