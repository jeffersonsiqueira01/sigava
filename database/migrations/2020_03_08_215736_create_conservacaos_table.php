<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConservacaosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('conservacoes', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('descricao', 240)->nullable();
            $table->string('classificacao', 100);
            $table->double('estado', 10, 2)->unique();
            $table->double('coef', 10, 2);        
            $table->string('status', 1)->nullable();
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
        Schema::dropIfExists('conservacoes');
    }
}
