<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Videos extends Model
{
    //
	protected $fillable = [
		'id_user',
		'nome_arquivo',
		'descricao',
		'titulo',
	];
}
