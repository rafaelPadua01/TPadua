<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVideoNoticiasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('video__noticias', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('titulo');
            $table->text('nome_arquivo');
            $table->text('descricao');
            $table->integer('id_user')->unsigned();
            $table->Biginteger('id_noticia')->unsigned();
            $table->foreign('id_user')->references('id')->on('users');
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
        Schema::dropIfExists('video__noticias');
    }
}
