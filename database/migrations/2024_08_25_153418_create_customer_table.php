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
        Schema::create('customer', function (Blueprint $table) {
            $table->integer('customerNumber')->primary();
            $table->string('customerName', length:50);
            $table->string('contactLastName', length:50);
            $table->string('contactFirstName', length:50);
            $table->string("phone", length:15);
            $table->string('addressLine1', length:50);
            $table->string('addressLine2', length:50);
            $table->string('city', length:50);
            $table->string('state', length:50);
            $table->string('postalCode', length:50);
            $table->string('country', length:50);
            $table->integer('salesRepEmployeeNumber');
            $table->double('creditLimit');
            $table->foreign('salesRepEmployeeNumber')->references('employeeNumber')->on('employee');
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
        Schema::dropIfExists('customer');
    }
};
