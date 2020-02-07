<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Address extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addresses', function (Blueprint $table){
        $table->bigIncrements('id');

        $table->unsignedBigInteger('city_id')->nullable();
        $table->foreign('city_id')->references('id')->on('cities');

        $table->string('name', 155)->nullable()->default('Propriedade');

        $table->string('street', 255);

        $table->string('number', 10);

        $table->string('complement', 255)->nullable();

        $table->string('district', 255);

        $table->string('postal_code', 45)->nullable();

        $table->decimal('lat', 12, 8);

        $table->decimal('long', 12, 8);

        $table->string('status', 1);

        $table->softDeletes();
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
        //
    }
}
