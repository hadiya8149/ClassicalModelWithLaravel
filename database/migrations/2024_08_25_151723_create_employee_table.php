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
        Schema::create('employee', function (Blueprint $table) {
            $table->integer('employeeNumber')->primary();
            $table->string('lastName', length:15);
            $table->string('firstName', length:15);
            $table->string('extension', length:10);
            $table->string('email', length:100)->unique();
            $table->string('officeCode', length:10);
            $table->integer('reportsTo');
            $table->string('jobTitle', length:50);
            $table->foreign('officeCode')->references('officeCode')->on('office');
            $table->timestamps();
        });
        Schema::table('employee', function(Blueprint $table){
            $table->foreign('reportsTo')->references('employeeNumber')->on('employee');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employee');
    }
};
