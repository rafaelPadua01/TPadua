<?php 

namespace App;

use Illuminate\Database\Eloquent\Model;

class Imagens extends Model
{
	protected $fillable = [
		'id_noticia',
		'nome_imagem',
		'extensao',
		'tamanho',
	];
}	