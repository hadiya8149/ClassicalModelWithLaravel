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
            // $table->primary('id');
            $table->primary('officeCode');
            $table->string('city');
            $table->integer('phone');
            $table->string('addressLine1');
            $table->string('addressLine2');
            $table->string('state');
            $table->integer('postalCode');
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
