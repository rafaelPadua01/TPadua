<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use App\Notifications\InvoicePaid;

use Illuminate\Database\Eloquent\Model;



class Noticia extends Model
{
	use Notifiable;
	

    //
	protected $fillable = [
		'id_categoria',
		'id_user',
		'titulo',
		'conteudo',
		'fonte',
		'destaque',
	];
}
