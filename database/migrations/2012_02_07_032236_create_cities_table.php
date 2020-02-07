<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cities', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('state_id')->nullable();
            $table->foreign('state_id')->references('id')->on('states');
            $table->string('nome', 255);
            $table->string('iso', 100);
            $table->string('iso_ddd', 100);
            $table->string('status', 1);
            $table->string('slug', 255);
            $table->string('population', 100);
            $table->string('lat', 100);
            $table->string('long', 100);
            $table->string('income_per_capita', 50);

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
        Schema::dropIfExists('cities');
    }
}
