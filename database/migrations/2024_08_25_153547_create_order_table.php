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
        Schema::create('orders', function (Blueprint $table) {
            $table->string('orderNumber')->primary();
            $table->date('orderDate');
            $table->date('requiredDate');
            $table->date('shippedDate');
            $table->string('status', length:15);
            $table->text('comments');
            $table->string('customerNumber');
            $table->foreign('customerNumber')->references('customerNumber')->on('customers');
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
};
