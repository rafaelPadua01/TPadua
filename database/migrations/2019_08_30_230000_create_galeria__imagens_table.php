<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGaleriaImagensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('galeria__imagens', function (Blueprint $table) {
            $table->BigIncrements('id');
			$table->string('nome_galeria');
			$table->string('nome_imagem');
			$table->BigInteger('id_noticia')->unsigned();
			$table->foreign('id_noticia')->references('id')->on('noticias');
			$table->integer('id_user')->unsigned();
			$table->foreign('id_user')->references('id')->on('users');
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
        Schema::dropIfExists('galeria__imagens');
    }
}
