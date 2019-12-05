<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImagemParceirosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('imagem__parceiros', function (Blueprint $table) {
            $table->increments('id');
			$table->string('nome_imagem');
			$table->integer('id_parceiro')->unsigned();
			$table->foreign('id_parceiro')->references('id')->on('parceiros');
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
        Schema::dropIfExists('imagem__parceiros');
    }
}
