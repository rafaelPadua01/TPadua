<?php

namespace App\Http\Controllers;

use App\Notifications\RespostaComment;
use App\RespostaComentario;
use App\Comentarios;
use App\Noticia;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Notifications\Notifiable;

class RespostaComentarioController extends Controller
{
    use Notifiable;

    public function __construct(RespostaComentario $resposta, Noticia $noticia, Comentarios $comentario)
    {
        $this->resposta = $resposta;
        $this->noticia = $noticia;
        $this->comentario = $comentario;
    }

    public function index()
    {

    }

    public function store(Request $request)
    {
     $data = $request->all();
     dd($data);
     $noticia = Noticia::find($request->id_noticia);
     $comentario = Comentarios::find($request->id_comentario);
     $user = \User::all();
     
     if(!empty($data))
     {
         
         //armazena no banco...
         $resposta = RespostaComentario::create($data);

         \Notification::send($user, new RespostaComment($resposta));

       
         return redirect()->back()->with('success', 'Mensagem Enviada com sucesso...');
        
     }
     else
     {
         echo "erro <a href='/'>Voltar</a>";
     }
     
    }

    public function remove()
    {

    }

    public function destroy()
    {

    }

}