<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile_user extends Model
{
    //
	protected $fillable = [
		'data_nascimento',
		'endereco',
		'telefone',
		'id_user',
		
	];
}

