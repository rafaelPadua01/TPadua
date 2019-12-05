<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImagemProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('imagem__profiles', function (Blueprint $table) {
            $table->increments('id');
			$table->string('nome_imagem');
			$table->integer('id_profile')->unsigned();
			$table->foreign('id_profile')->references('id')->on('profile_users');
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
        Schema::dropIfExists('imagem__profiles');
    }
}
