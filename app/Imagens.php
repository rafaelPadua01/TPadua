<?php 

namespace App;

use Illuminate\Database\Eloquent\Model;

class Imagens extends Model
{
	protected $fillable = [
		'id_noticia',
		'id_user',
		'nome_imagem',
		'extensao',
		'tamanho',
	];
}	