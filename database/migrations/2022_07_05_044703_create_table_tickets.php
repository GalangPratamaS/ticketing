<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableTickets extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tickets', function (Blueprint $table) {
            $table->id();
            $table->string('ticket_name',255);
            $table->unsignedBigInteger('ticket_category');
            $table->double('ticket_price', 8, 2);
            $table->string('status',1);
            $table->dateTimeTz('created_at', $precision = 0);
            $table->softDeletes($column = 'deleted_at', $precision = 0);   
            
             $table->foreign('ticket_category')->references('id')->on('ticket_category');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tickets');
    }
}
