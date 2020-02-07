<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpresasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empresas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('razao');
            $table->string('fantasia');
            $table->string('cnpj');
            $table->string('ie')->nullable();
            $table->string('telefone');
            $table->string('celular')->nullable();
            $table->string('email',155);
            $table->string('emailfinanceiro',155)->nullable();
            $table->string('uf',2);
            $table->string('cidade');
            $table->string('bairro');
            $table->string('cep');
            $table->string('endereco');
            $table->string('numero');
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
        Schema::dropIfExists('empresas');
    }
}
