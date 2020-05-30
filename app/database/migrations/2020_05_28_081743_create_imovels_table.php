<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImovelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('imoveis', function (Blueprint $table) {
            $table->increments('id');
            $table->string('descricao');
            $table->string('empresaImovel');
            $table->string('paisEndereco');
            $table->string('estadoEndereco');
            $table->string('cidadeEndereco');
            $table->string('logradouroEndereco');
            $table->string('bairroEndereco');
            $table->integer('numeroEndereco');
            $table->string('cepEndereco');
            $table->string('pontoReferenciaEndereco');
            $table->string('imgImovel');
            $table->float('preco');
            $table->integer('qtdQuartos');
            $table->integer('qtdJanelas');
            $table->integer('qtdLampadas');
            $table->integer('qtdBanheiro');
            $table->enum('garagem',['sim','não']);
            $table->enum('tipo',['apartamento','casa','kitnet','galpão']);
            $table->enum('finalidade',['venda','locação']);
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
        Schema::dropIfExists('imoveis');
    }
}
