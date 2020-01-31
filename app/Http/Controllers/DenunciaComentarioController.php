<?php 

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Comentarios;
use App\Noticia;
use App\DenunciaComentario;
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
    public function show($id)
    {
        $denuncia = \App\DenunciaComentario::findOrFail($id);
        $comentario = Comentarios::all();
        return view('denunciaComentario.show', compact('denuncia', 'comentario'));
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
    public function edit($id)
    {
        $denuncia = \App\DenunciaComentario::findOrFail($id);
        $comentario = Comentarios::findOrFail($denuncia->id_comentario);
        return view('denunciaComentario.edit', compact('denuncia', 'comentario'));
    }

    public function remove($id)
    {
        
        $denuncia = \App\DenunciaComentario::findOrFail($id);
        return view('denunciaComentario.remove', compact("denuncia"));
    }

    public function destroy($id)
    {
        $denuncia = \App\DenunciaComentario::findOrFail($id);
        if($denuncia)
        {
            $delete = \App\DenunciaComentario::where('id', '=', $id)->delete();
                if($delete)
                {
                    return redirect('/denunciaComentario')->with('success', 'removido com sucesso');
                }
                else
                {
                    echo "erro ao tentar remover, contate o suporte";
                }
        }
    }
   
    public function destroyDenunciaComentario($id)
    {
        $denuncia = \App\DenunciaComentario::findorFail($id);
        $comentario = Comentarios::findOrfail($denuncia->id_comentario);
        $resposta_comentario = \App\RespostaComentario::all();
         if($comentario->id == $denuncia->id_comentario)
         {
            foreach($resposta_comentario as $resp)
            {
                if($resp->id_comentario == $comentario->id)
                { 
                    $deleteDenuncia = DenunciaComentario::where('id_comentario', '=', $comentario->id)->delete();
                    if($deleteDenuncia)
                    {
                        $deleteResposta = \App\RespostaComentario::where('id_comentario', '=', $resp->id_comentario)->delete();
                        if($deleteResposta)
                        {   
                            $deleteComentario = Comentarios::where('id', '=', $comentario->id)->delete();
                        }
                        else 
                        {
                            echo "erro ao remover";
                        }
                    }
                    else
                    {
                        echo "erro";
                    }
                }

            }
         return redirect('/denunciaComentario')->with('success', 'Removido com sucesso');
        }
        else
        {
           echo "Erro !";
            
        }
    }
}