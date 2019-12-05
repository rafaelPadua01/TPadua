<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Imagem_Eventos extends Model
{
    //
	protected $fillable = [
		
		'id_evento',
		'nome_imagem',
		'descricao',
	];
}
