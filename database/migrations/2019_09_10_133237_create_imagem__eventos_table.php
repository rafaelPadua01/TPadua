<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImagemEventosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('imagem__eventos', function (Blueprint $table) {
            $table->increments('id');
			$table->string('nome_imagem');
			$table->string('descricao');
			$table->integer('id_evento')->unsigned();
			$table->foreign('id_evento')->references('id')->on('eventos');
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
        Schema::dropIfExists('imagem__eventos');
    }
}
