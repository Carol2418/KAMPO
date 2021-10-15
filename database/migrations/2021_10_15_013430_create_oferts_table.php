<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOfertsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('oferts', function (Blueprint $table) {
            $table->id();
            $table->float('minimum_price', 8, 2);
            $table->float('final_price',8, 2);
            $table->char('offer_with_transport', 2);
            $table->unsignedBigInteger('merchants_id');
            $table->foreign('merchants_id')->references('id')->on('merchants');
            $table->unsignedBigInteger('products_id');
            $table->foreign('products_id')->references('id')->on('products');
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
        Schema::dropIfExists('oferts');
    }
}
