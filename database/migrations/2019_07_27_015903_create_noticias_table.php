<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNoticiasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('noticias', function (Blueprint $table) {
            $table->bigIncrements('id');
			$table->string('titulo', 255);
			$table->string('fonte', 255);
			$table->longText('conteudo');
			$table->boolean('destaque', 1);
			$table->integer('id_categoria')->unsigned(); #usa id categoria como fk
			$table->foreign('id_categoria')->references('id')->on('categorias'); #id da categoria
			$table->integer('id_user')->unsigned(); #usa id_user como fk
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
        Schema::dropIfExists('noticias');
    }
}
