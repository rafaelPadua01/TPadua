<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DenunciaComentario extends Model
{
    protected $fillable = ['denuncia', 'denucia_op', 'id_comentario'];
}
