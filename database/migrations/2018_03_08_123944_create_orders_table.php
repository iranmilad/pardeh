<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('customer_name');
            $table->string('customer_email');
            $table->integer('customer_phone_number');
            $table->bigInteger('user_id')->unsigned()->nullable();
            $table->foreign('user_id')->references('id')->on('users');
            $table->boolean('is_self_delivery');
            $table->string('warehouse')->nullable();
            $table->string('payment_id')->nullable();
            $table->integer('tax');
            $table->longText('cart');
            $table->integer('shipping_price');
            $table->dateTime('delivery_date')->nullable();
            $table->string('delivery_time')->nullable();

            $table->string('shipping_country')->nullable();
            $table->string('shipping_province')->nullable();
            $table->string('shipping_city')->nullable();
            $table->string('shipping_address')->nullable();
            $table->string('shipping_postal_code')->nullable();
            $table->string('shipping_phone')->nullable();
            $table->enum('status', ['basket', 'pending', 'processing','complete','cancel','reject'])->defalut('basket');
            $table->enum('deliveryType', ['home_delivery', 'store_delivery'])->defalut('store_delivery');
            $table->enum('paymentMethod', ['cash', 'credit','check','cod'])->defalut('cash');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
