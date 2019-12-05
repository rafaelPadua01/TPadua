<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NewsLetter extends Model
{
    //Filtro para envio de requests em massa
	protected $fillable = [
		'nome_user_newsLetter',
		'email_user_newsLetter',
	];
}
