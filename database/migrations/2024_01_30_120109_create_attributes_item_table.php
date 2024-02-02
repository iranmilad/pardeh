<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('attributes_item', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->text('details')->nullable();
            $table->unsignedInteger('attribute_id');
            $table->foreign('attribute_id')->references('id')->on('attributes')->onDelete('cascade');
            $table->decimal('max_value', 8, 2)->nullable();
            $table->decimal('min_value', 8, 2)->nullable();
            $table->decimal('unit_factor', 8, 2)->nullable();
            $table->string('unit_description')->nullable();
            $table->decimal('conversion_factor', 8, 2)->nullable();
            $table->string('base_unit')->nullable();
            $table->string('img');
            $table->timestamps();
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('attributes_item');
    }
};
