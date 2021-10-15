<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->string('name', 45);
            $table->string('type',45);
            $table->date('expiration_date');
            $table->string('quantity_units',45);
            $table->float('minimum_value',8, 2);
            $table->text('image');
            $table->string('packaging', 45);
            $table->float('unit_value', 8,2);
            $table->unsignedBigInteger('farmers_id');
            $table->foreign('farmers_id')->references('id')->on('farmers');
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
