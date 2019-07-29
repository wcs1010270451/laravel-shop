<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCouponsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coupons', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name',30)->comment('优惠券名称');
            $table->string('color',6)->comment('颜色');
            $table->tinyInteger('type')->default(1)->comment('优惠方式(1:折扣券；2:代金劵；3:兑换券；4:团购券；5:优惠券)');
            $table->decimal('value',8,2)->comment('折扣值，根据不同类型含义不同');
            $table->tinyInteger('scope')->comment('适用范围（0:通用；1:医疗；2:洗美；3:商品）');
            $table->dateTime('take_effect_start')->comment('生效开始时间');
            $table->dateTime('take_effect_stop')->comment('生效结束时间');
            $table->integer('totals')->comment('总发行量');
            $table->integer('used')->comment('发放量或领取量');
            $table->tinyInteger('status')->default(1)->comment('优惠券状态（1:审核中；2:未通过；3:待投放；4:已投放；5:已过期）');
            $table->string('time_frame')->comment('可用时段前半段');
            $table->dateTime('frame_start')->comment('可用时段后半段开始时间');
            $table->dateTime('frame_stop')->comment('可用时段后半段结束时间');
            $table->string('notice')->comment('使用须知');
            $table->decimal('min_amount',8,2)->default(1)->comment('使用该优惠券的最低订单金额');
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
        Schema::dropIfExists('coupons');
    }
}
