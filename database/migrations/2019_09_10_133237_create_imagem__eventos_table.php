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
			$table->longText('descricao');
			$table->bigInteger('id_evento')->unsigned();
			$table->foreign('id_evento')->references('id')->on('eventos');
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
        Schema::dropIfExists('imagem__eventos');
    }
}
