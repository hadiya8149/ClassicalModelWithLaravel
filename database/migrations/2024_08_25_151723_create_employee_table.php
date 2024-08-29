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
        Schema::create('employees', function (Blueprint $table) {
            $table->string('employeeNumber')->primary();
            $table->string('lastName', length:15);
            $table->string('firstName', length:15);
            $table->string('extension', length:10);
            $table->string('email', length:100);
            $table->string('officeCode', length:10);
            $table->string('reportsTo')->nullable();
            $table->string('jobTitle');
            $table->foreign('officeCode')->references('officeCode')->on('offices');
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
        Schema::dropIfExists('employees');
    }
};
