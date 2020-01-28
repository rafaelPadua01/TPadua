<?php 

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Comentarios;
use App\Noticia;

class DenunciaComentarioController extends Controllers
{
    private $comentario;
    private $noticia;

    public function __construct(Comentarios $comentario, Noticia $noticia)
    {
        $this->comentario = $comentario;
        $this->noticia = $noticia;

    }

    public function index()
    {
        return view('denunciaComentario.index');
    }

    public function create()
    {   

        $comentarios = Comentarios::findOrFail($id);
        return view('denunciaComentario.create', compact('c'));
    }
}