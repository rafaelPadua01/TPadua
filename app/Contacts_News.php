<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contacts_News extends Model
{
    //
	protected $fillable = [
		'nome',
		'email',
		'noticia',
	];
}
