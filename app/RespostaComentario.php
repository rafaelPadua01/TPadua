<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RespostaComentario extends Model
{
    protected $fillable = ['nome_resp', 'resposta', 'id_comentario', 'id_noticia'];
}
