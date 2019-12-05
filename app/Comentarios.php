<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comentarios extends Model
{
    //
	protected $fillable = [
		'nome',
		'comentario',
		'id_noticia',
	];

}
