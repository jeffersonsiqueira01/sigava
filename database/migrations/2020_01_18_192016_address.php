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
        
        $table->string('cidade', 200);
        $table->string('uf', 2);
        $table->string('name', 155)->nullable()->default('Propriedade');
        $table->string('rua', 255);
        $table->string('numero', 10);
        $table->string('complemento', 255)->nullable();
        $table->string('bairro', 255);
        $table->string('cep', 45);
        $table->string('ibge', 45)->nullable();
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
