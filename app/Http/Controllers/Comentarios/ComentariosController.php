<?php 

namespace App\Http\Controllers;

use App\Notifications\NoticiaComment;
use App\Comentarios;
use App\Http\Controllers\Controller;
use App\Noticia;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Notifications\Notifiable;


class ComentariosController extends Controller
{
	use Notifiable;
	
	public function index()
	{
		$comentarios = Comentarios::orderBy('id', 'desc')->paginate(10);
		$noticias = Noticia::all();
		return view('comentarios.index', compact('comentarios', 'noticias'));
		
	}
	public function show($id)
	{
		$comentarios = Comentarios::find($id);
		return view('comentarios.show', compact('comentarios'));
	}
	/*
	public function create($id)
	{
		$id_noticia = Noticias::find($id);
		$comentarios = Comentarios::all();
		
		
	}
	*/
	public function store(Request $request, $id)
	{
		$id_noticia = Noticia::findOrFail($id);
		$users = User::all();
		$comentarios = Comentarios::all();
		$input = $request->all();
	
		//Cria uma variavel Author que recebe o autor da notícia
		$comentario = Comentarios::create($input);
		
		\Notification::send($users, new NoticiaComment($comentario));
		
		 return redirect()->back()->with('success',"Comentário Enviado !");
		
		
	}
	public function edit()
	{
	
	}
	public function update()
	{
	
	}
	
	public function remove($id)
	{
		$comentarios = Comentarios::find($id);
		return view('comentarios.remove', compact('comentarios'));
	}
	public function destroy($id)
	{
		$comentarios = Comentarios::find($id)->delete();
		
		return redirect('home')
							->with('success', 'Comentario Removido com sucesso');
	}
	
	
}