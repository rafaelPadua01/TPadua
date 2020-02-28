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
use App\Video_Noticia;


class MainController extends Controller
{
	public function index()
	{
		$categorias = Categoria::all();
		$noticias = Noticia::orderBy('id', 'desc')->limit(5)->get();
		$informativos = Videos::orderby('id', 'desc')->limit(1)->get();
		$artigos = Noticia::where('id_categoria', '=', 1)->orderby('id', 'desc')->limit(2)->get();
		$poesias = Noticia::where('id_categoria', '=', 9)->orderby('id', 'desc')->limit(2)->get();
		$coberturas = Noticia::where('id_categoria', '=', 8)->orderby('id', 'desc')->limit(2)->get();
		$arteCultura = Eventos::orderby('id', 'desc')->limit(1)->get();
		$eventos_c = Noticia::where('id_categoria', '=', 3)->orderby('id', 'desc')->limit(2)->get();
		$destaque = Noticia::where('destaque', '=', true)->orderby('id', 'desc')->limit(2)->get();
		$sobradinho = Noticia::where('id_categoria', '=', 7)->orderby('id', 'desc')->limit(2)->get();
		$planaltina = Noticia::where('id_categoria', '=', 5)->orderby('id', 'desc')->limit(2)->get();
		$videos_n = Video_Noticia::orderby('id', 'desc')->limit(4)->get();
		$parceiros = Parceiros::all();
		$imagens = Imagens::orderby('id', 'desc')->limit(5)->get();
		$videos = DB::table('videos')->orderby('id', 'desc')->limit(4, 5)->get();
		$eventos = \DB::table('eventos')->orderBy('id', 'desc')->limit(4,5)->get(); //Ordena os eventos de forma decrescente
		$imagem_eventos = Imagem_Eventos::all();
		$imagem_parceiros = Imagem_Parceiros::all();
		$user_news_letters = \DB::table('news_letters')->orderBy('id', 'desc')->get(); //ordena usuarios de forma decrescente
		

		
		return view('main.index', ['categorias' => $categorias, 'noticias' => $noticias,
					'imagens' => $imagens, 'videos' => $videos, 'parceiros' => $parceiros,
								'imagem_parceiros' => $imagem_parceiros,
								'user_news_letters' => $user_news_letters, 'eventos' => $eventos,
								'imagem_eventos' => $imagem_eventos, 'artigos' => $artigos,
								 'poesias' => $poesias, 'coberturas' => $coberturas, 
								 'informativos' => $informativos, 'arteCultura' => $arteCultura,
								'eventos_c' => $eventos_c], compact('sobradinho', 'planaltina', 'videos_n',
								'destaque'));
	}
	
	
	
}