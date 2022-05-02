<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_items', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('order_id');
            $table->integer('seller_id')->nullable();
            $table->integer('seller_name')->nullable();
            $table->integer('seller_email')->nullable();
            $table->integer('seller_phone')->nullable();
            $table->string('name')->nullable();
            $table->string('image')->nullable();
            $table->string('price')->nullable();
            $table->string('shipping')->nullable();
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
        Schema::dropIfExists('order_items');
    }
}
