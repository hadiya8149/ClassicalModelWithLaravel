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
        Schema::create('products', function (Blueprint $table) {
            $table->string('productCode')->primary();
            $table->string('productName');
            $table->string('productLine', length:50);
            $table->string('productVendor');
            $table->text('productDescription');
            $table->integer('quantityInStock');
            $table->integer('buyPrice');
            $table->double('MSRP');
            $table->foreign('productLine')->references('productLine')->on('product_lines');
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
        Schema::table('product', function(Blueprint $table){
            $table->dropColumn('productCode');
        });
        Schema::dropIfExists('products');
    }
};
