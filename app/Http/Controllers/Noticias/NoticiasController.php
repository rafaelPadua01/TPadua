<?php

namespace App\Http\Controllers;

use DB;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Http\Controllers\Mail;
use App\Categoria;
use App\Noticia;
use App\Imagens;
use App\Galeria_Imagens;
use App\Comentarios;
use App\Parceiros;
use App\Imagem_Parceiros;
use App\Http\Requests\NoticiaRequest;

class NoticiasController extends Controller
{
	
	public function index()
	{
		$noticias = Noticia::orderBy('id', 'desc')->paginate(5);
		$categorias = Categoria::all();
		return view('noticias.index', ['noticias' => $noticias, 'categorias' => $categorias]);
	}
	//Metodo que exibe a Noticia por completo
	//link leia mais deve redirecionar para esta action
	public function show($id)
	{
		$noticias = Noticia::find($id);
		$imagens = Imagens::all();
		$galeria_imagens = Galeria_Imagens::all();
		$comentarios = Comentarios::all();
		$parceiros = Parceiros::all();
		$imagem_parceiros = Imagem_Parceiros::all();
		
		return view('noticias.show', compact('noticias', 'parceiros', 'imagem_parceiros', 'comentarios'), ['imagens' => $imagens,
							'galeria_imagens' => $galeria_imagens]);
	}
	public function create($id)
	{
		$categoria = Categoria::find($id);
		$categorias = Categoria::all();
		return view('noticias.create', compact('categoria', 'categorias'));
	}
	public function store(NoticiaRequest $request)
	{
		
		$input = $request->all();
		Noticia::create($input);
		
		return redirect('home');
	}
	public function search(Request $request)
	{

		$noticias = Noticia::all();
		$search = $request->get('search');
			
		
		$data = Noticia::select('*')
				->where('titulo', 'LIKE', "%{$search}%")
				->get();
				
				
			
		return view('noticias.search', compact('noticias', 'search', 'data'));
	}
	
	
	public function edit($id)
	{
		$noticia = Noticia::find($id);
		
		
		return view('noticias.edit', compact('noticia'));
	}
	
	public function update(NoticiaRequest $request, $id)
	{
		$noticia = Noticia::find($id)->update($request->all());

		return redirect('noticias');
		
	}
	public function remove($id)
	{
		$noticia = Noticia::find($id);
		
		return view('noticias.remove', compact('noticia'));
	}
	public function destroy($id)
	{
		$noticia = Noticia::find($id);
		
		$noticia->where('id', '=', $id)->delete();
		return redirect('noticias');
	}
	public function modal($id)
	{
		$noticias = Noticia::find($id);
		$imagens = Imagens::all();
		
		return view('noticias.modal', compact('noticias', 'imagens'));
	}
	public function sendmail(Request $request, $id)
	{
		$noticias = Noticia::find($id);
		$imagens = Imagens::all();
		 
	
		
		\Mail::send('noticias.mail', ['noticias' => $noticias, 'imagens' => $imagens], function($message) use($noticias){
			$user_mail = $_GET['email'];
			$assunto = $_GET['assunto'];
			$message->from('tpadua7@gmail.com', 'AliasTPadua Noticia[News]'.$noticias->titulo);
			$message->to($user_mail);
			$message->subject($assunto);
			
			
			
			
		});
		
		
		return redirect()->back()
						->with('success', 'Email Enviado com sucesso');
	//	var_dump($user);
	}
}