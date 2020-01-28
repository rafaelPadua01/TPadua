<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDenunciaComentariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('denuncia_comentarios', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('denuncia')->nullable();
            $table->string('denuncia_op')->nullable();
            $table->integer('id_comentario')->unsigned();
            $table->foreign('id_comentario')->references('id')->on('comentarios');
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
        Schema::dropIfExists('denuncia_comentarios');
    }
}
