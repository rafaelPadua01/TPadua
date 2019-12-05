<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Galeria_Imagens extends Model
{
    //
	protected $fillable = [
		'id_noticia',
		'nome_imagem',
	];
}
