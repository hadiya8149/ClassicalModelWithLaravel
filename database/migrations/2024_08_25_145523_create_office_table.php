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
        Schema::create('office', function (Blueprint $table) {
            $table->string('officeCode', length:10)->primary();
            $table->string('city');
            $table->string('phone');
            $table->string('addressLine1');
            $table->string('addressLine2');
            $table->string('state');
            $table->string('postalCode');
            $table->string('territory');
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
        Schema::dropIfExists('office');
    }
};
