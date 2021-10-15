<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransporofertTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transporofert', function (Blueprint $table) {
            $table->id();
            $table->float('minimum_offer_price',8,2);
            $table->float('final_offer_price',8,2);
            $table->unsignedBigInteger('couriers_id');
            $table->foreign('couriers_id')->references('id')->on('couriers');
            $table->unsignedBigInteger('order_id');
            $table->foreign('order_id')->references('id')->on('order');
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
        Schema::dropIfExists('transporofert');
    }
}
