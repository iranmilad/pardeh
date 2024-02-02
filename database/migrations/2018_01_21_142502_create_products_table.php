<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');

            $table->bigInteger('price')->nullable();
            $table->bigInteger('sale_price')->nullable();
            $table->bigInteger('wholesale_price')->nullable();

            $table->bigInteger('few')->nullable();
            $table->bigInteger('fewspd')->nullable();
            $table->bigInteger('fewtak')->nullable();
            $table->string('holo_code')->nullable();

            $table->enum('type', ['simple', 'variation']);

            $table->boolean('is_top');
            $table->boolean('is_new');
            $table->string('img');
            $table->text('description');

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
        Schema::dropIfExists('products');
    }
}
