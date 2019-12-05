<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Categoria;
use App\Noticia;
use App\Imagens;
use App\Parceiros;
use App\Imagem_Parceiros;
use App\NewsLetter;
use App\Eventos;
use App\Imagem_Eventos;
use App\Videos;

class MainController extends Controller
{
	public function index()
	{
		$categorias = Categoria::all();
		$noticias = Noticia::orderBy('id', 'desc')->paginate(5);
		$parceiros = Parceiros::all();
		$imagens = Imagens::all();
		$videos = DB::table('videos')->orderby('id', 'desc')->limit(4, 5)->get();
		$eventos = \DB::table('eventos')->orderBy('id', 'desc')->limit(4,5)->get(); //Ordena os eventos de forma decrescente
		$imagem_eventos = Imagem_Eventos::all();
		$imagem_parceiros = Imagem_Parceiros::all();
		$user_news_letters = \DB::table('news_letters')->orderBy('id', 'desc')->get(); //ordena usuarios de forma decrescente
		
//$paginates = DB::table('noticias')->simplePaginate(4);
		
		return view('main.index', ['categorias' => $categorias, 'noticias' => $noticias,
					'imagens' => $imagens, 'videos' => $videos, 'parceiros' => $parceiros,
								'imagem_parceiros' => $imagem_parceiros,
								'user_news_letters' => $user_news_letters, 'eventos' => $eventos,
								'imagem_eventos' => $imagem_eventos]);
	}
	
	
	
}