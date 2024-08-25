<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_details', function (Blueprint $table) {
            $table->integer('orderNumber');
            $table->string('productCode', length:50);
            $table->integer('quantityOrdered');
            $table->integer('priceEach');
            $table->foreign('orderNumber')->references('orderNumber')->on('order');
            $table->foreign('productCode')->references('productCode')->on('product');
            $table->primary( ['orderNumber', 'productCode']);
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
        Schema::dropIfExists('order_details');
    }
};
