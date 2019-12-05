<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    //Filtro para trabalhar com request de dados em massa
	protected $fillable = [
		'id_user',
		'nome_categoria',
		'tipo',
	];
	
	//Define o tipo de relacionamento entre as tabelas
	//users e categoria, 1 usuario pode criar varias categorias
	//porém todas as categorias pertecem ao usuario que as criou
	//RElação de varios para um ou um para vários....
	public function Categoria()
	{
		return $this->belongTo('App\User');
	}
}
