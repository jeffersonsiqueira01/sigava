<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('userlanc_id');
            $table->foreign('userlanc_id')->references('id')->on('users');
            $table->unsignedBigInteger('address_id');
            $table->foreign('address_id')->references('id')->on('addresses');
            $table->string('usercoleta', 255)->nullable();
            $table->double('vltotal', 20,2);
            $table->string('objetivo', 1);
            $table->unsignedBigInteger('contact_id');
            $table->foreign('contact_id')->references('id')->on('contacts');
            $table->date('dtcoleta')->nullable();
            $table->integer('codigodata')->nullable();
            $table->double('areaconstruida', 8,2)->nullable();
            $table->double('areaterreno', 8,2)->nullable();
            $table->integer('indiceFiscal')->nullable();
            $table->integer('macrolocalizacao')->nullable();
            $table->double('distanciapolo', 8,2)->nullable();
            $table->integer('numquarto')->nullable();
            $table->integer('numsuite')->nullable();
            $table->integer('numgaragem')->nullable();
            $table->integer('numbanheiro')->nullable();
            $table->unsignedBigInteger('conservacao_id')->nullable();
            $table->foreign('conservacao_id')->references('id')->on('conservacoes');
            $table->unsignedBigInteger('acabamento_id')->nullable();
            $table->foreign('acabamento_id')->references('id')->on('acabamentos');
            $table->integer('idadeaparente')->nullable();
            $table->double('custoreedicao',20,2)->nullable();
            $table->integer('condominio')->nullable();
            $table->string('equipamentos', 255)->nullable();
            $table->double('vlmetro', 8,2)->nullable();
            $table->string('situacao', 1)->nullable();
            $table->string('publicado', 1)->nullable();
            $table->date('dtpublic')->nullable();
            $table->unsignedBigInteger('userpublic_id')->nullable();
            $table->foreign('userpublic_id')->references('id')->on('users');
            $table->text('obs')->nullable();

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
        Schema::dropIfExists('properties');
    }
}
