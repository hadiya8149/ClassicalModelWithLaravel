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
        Schema::create('product', function (Blueprint $table) {
            $table->string('productCode', length:50)->primary();
            $table->string('productName', length:50);
            $table->string('productLine', length:50);
            $table->string('productVendor', length:50);
            $table->text('productDescription');
            $table->integer('quanityInStock');
            $table->integer('buyPrice');
            $table->double('MSRP');
            $table->timestamps();
        });
        Schema::table('product', function(Blueprint $table){
            $table->foreign('productLine')->references('productLine')->on('product_line');
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
        Schema::dropIfExists('product');
    }
};
