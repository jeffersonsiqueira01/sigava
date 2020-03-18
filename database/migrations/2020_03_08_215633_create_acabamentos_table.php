<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAcabamentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('acabamentos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('classificacao', 100);            
            $table->double('cub', 30, 2);            
            $table->double('estado', 5,2);      
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
        Schema::dropIfExists('acabamentos');
    }
}
