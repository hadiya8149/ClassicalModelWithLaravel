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
            $table->string('orderNumber');
            $table->string('productCode');
            $table->integer('quantityOrdered');
            $table->integer('priceEach');
            $table->foreign('orderNumber')->references('orderNumber')->on('orders');
            $table->foreign('productCode')->references('productCode')->on('products');
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
