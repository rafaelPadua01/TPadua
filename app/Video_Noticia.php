<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Video_Noticia extends Model
{
    //
    protected $fillable = ['id_user', 'id_noticia', 'titulo', 'nome_arquivo', 'descricao'];
}
