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
        Schema::create('order', function (Blueprint $table) {
            $table->integer('orderNumber')->primary();
            $table->date('orderDate');
            $table->date('requiredDate');
            $table->date('shippedDate');
            $table->string('status', length:15);
            $table->text('comments');
            $table->integer('customerNumber');
            $table->foreign('customerNumber')->references('customerNumber')->on('customer');
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
        Schema::dropIfExists('order');
    }
};
