<?php

namespace App\Http\Controllers;

use DB;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Http\Controllers\Mail;
use App\User;
use App\Categoria;
use App\Noticia;
use App\Imagens;
use App\Galeria_Imagens;
use App\Comentarios;
use App\RespostaComentario;
use App\Parceiros;
use App\Imagem_Parceiros;
use App\Videos;
use App\Eventos;
use App\Imagem_Eventos;
use App\Video_Noticia;
use App\Http\Requests\NoticiaRequest;

class NoticiasController extends Controller
{
	private $noticias;
	
	public function __construct(Noticia $noticias)
	{
		$this->noticias = $noticias;
	}
	public function index()
	{
		$noticias = Noticia::orderBy('id', 'desc')->paginate(5);
		$categorias = Categoria::all();
		$users = User::all();
		return view('noticias.index', ['noticias' => $noticias, 'categorias' => $categorias, 'users' => $users]);
	}
	//Metodo que exibe a Noticia por completo
	//link leia mais deve redirecionar para esta action
	public function show($id)
	{
		$noticias = Noticia::findOrFail($id);
		$imagens = Imagens::all();
		$galeria_imagens = Galeria_Imagens::all();
		$comentarios = Comentarios::orderBy('id', 'desc')->paginate(10);
		$respostas = RespostaComentario::orderBy('id', 'asc')->get();
		$parceiros = Parceiros::all();
		$imagem_parceiros = Imagem_Parceiros::all();
		$videos = Videos::orderby('id', 'desc')->limit(4, 5)->get();
		$eventos = Eventos::orderBy('id', 'desc')->limit(4,5)->get();
		$imagem_eventos = Imagem_Eventos::all();
		$video_n = Video_Noticia::all();
		
		
		return view('noticias.show', compact('noticias', 'parceiros', 'imagem_parceiros', 'comentarios',
			'videos', 'eventos', 'imagem_eventos', 'video_n'), ['imagens' => $imagens, 
					'galeria_imagens' => $galeria_imagens, 'respostas' => $respostas]);
	}
	public function create()
	{
		
		
		$categorias = Categoria::all();
		return view('noticias.create', compact( 'categorias'));
	}
	public function store(NoticiaRequest $request)
	{
		$data = $request->all();
		$categoria = Categoria::findOrfail($request->id_categoria);

		if(!empty($data) || $data != null)
		{
			$noticia = Noticia::create($data);
			
		}
		else{
			
			return redirect()->back()->with('error', 'Não foi possível cadastrar uma nova noticia, contate o suporte técnico');
		}
		return redirect()->back()->with('success', 'Nova Noticia Cadastrada com sucesso...');

		
		/*
		$input = $request->all();
		Noticia::create($input);
		
		return redirect('home');
		*/
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