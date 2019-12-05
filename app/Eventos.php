<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Eventos extends Model
{
    //
	protected $fillable = [
		'id_user',
		'nome_evento',
		'data_evento',
		'hora_evento',
		'descricao_evento',
	];
}
