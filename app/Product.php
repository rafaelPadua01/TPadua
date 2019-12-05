<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //tabela de acesso
	protected $table = 'products';
	
	//Filter para permitir alterações em massa
	protected $fillable = ['title', 'body', 'value', 'qtd', 'url'];
	
	public function setUrlAttribute($value)
	{
		if($value == '')
			$value = $this->attribute['title'];
		
		$this->attribute['url'] = str_slug($value);
	}
	
	//Relacionamento entre model Categoria e o atual (product)
	public function categories()
	{
		//Este é um relacionamento muitos para muitos 
		return $this->belongsToMany('App\Category');
	}
}
