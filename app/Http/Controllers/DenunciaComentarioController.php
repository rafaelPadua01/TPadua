<?php 

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Comentarios;
use App\Noticia;
use Illuminate\Http\Request;

class DenunciaComentarioController extends Controller
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
        $denuncia = \App\DenunciaComentario::all();
        $comentarios = Comentarios::all();
        return view('denunciaComentario.index', compact('denuncia', 'comentarios'));
    }

    public function create($id)
    {   
        $c = Comentarios::findOrFail($id);
        return view('denunciaComentario.create', compact('c'));
    }
    public function store(Request $request, $id)
    {
        $data = $request->all();
        $c = Comentarios::findOrFail($id);

        if(!empty($data) && $data != "null")
        {
            $denuncia = \App\DenunciaComentario::create($data);
            return redirect()->back()->with('Agradecemos sua ajuda, sua denuncia foi registrada e será avaliada.');
        }
        else
        {
            echo "<script>window.alert('Você não pode enviar uma denuncia vazia...')</script>";
        }
        dd($data, $c);

        
    }
}