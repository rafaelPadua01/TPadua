<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRespostaComentariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resposta_comentarios', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nome_resp');
            $table->string('resposta');
            $table->integer('id_comentario')->unsigned();
            $table->BigInteger('id_noticia')->unsigned();
            $table->foreign('id_comentario')->references('id')->on('comentarios');
            $table->foreign('id_noticia')->references('id')->on('noticias');
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
        Schema::dropIfExists('resposta_comentarios');
    }
}
