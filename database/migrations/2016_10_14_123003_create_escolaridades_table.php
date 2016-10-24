<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEscolaridadesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('escolaridades', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_curriculos')->unsigned();
            $table->string('escolaridade',255);
            /*$table->string('entidade',255);
            $table->string('curso',255);
            $table->boolean('concluido');
            $table->date('anoconclusao');*/
            $table->foreign('id_curriculos')->references('id')->on('curriculos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('escolaridades');
    }
}
