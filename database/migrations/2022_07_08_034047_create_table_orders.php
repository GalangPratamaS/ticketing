<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableOrders extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('order_code',255);
            $table->string('customer_name', 255);
            $table->string('customer_email',255);
            $table->string('customer_phone',255);            
            $table->string('ticket_id', 50);
            $table->string('total_ticket', 50);
            $table->string('payment_method', 50);
            $table->string('bank', 250);
            $table->string('va_number', 50);
            $table->string('payment_status', 50);
            $table->string('payment_code', 3);
            $table->integer('grand_total');
            $table->integer('expired_time');
            $table->softDeletes($column = 'deleted_at', $precision = 0);   
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
