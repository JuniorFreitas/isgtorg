<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCurriculosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('curriculos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('cpf')->unique();
            $table->string('nome',255);
            $table->date('nascimento');
            $table->string('cep');
            $table->string('logradouro',255);
            $table->string('cidade',255);
            $table->string('telefone');
            $table->string('celular');
            $table->string('email');
            $table->string('foto');
            $table->string('deficiente');
            $table->string('viajar');
            $table->string('anexo');
            $table->boolean('visto');
            $table->boolean('selecionado');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('curriculos');
    }
}
