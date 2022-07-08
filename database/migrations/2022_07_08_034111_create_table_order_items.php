<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableOrderItems extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_items', function (Blueprint $table) {
            $table->id();
            $table->string('order_codes');
            $table->integer('ticket_id');
            $table->string('product_name');
            $table->integer('ticket_price');
            $table->integer('qty');
            $table->enum('status', ['unclaimed','claimed']);
            $table->dateTime('claimed_date');
            $table->softDeletes($column = 'deleted_at', $precision = 0);   
            $table->timestamps();

            $table->foreign('order_codes')->references('order_code')->on('orders');
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
