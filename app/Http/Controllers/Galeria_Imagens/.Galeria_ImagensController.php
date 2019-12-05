<?php 

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Form;
use App\Galeria_Imagens;
use App\Controllers\Requests\Galeria_ImagensRequest;
use App\Noticia;

class Galeria_ImagensController extends Controller
{
	public function index()
	{
		$galerias = Galeria_Imagens::all();
		
		return view('galeria_imagens.index', ['galerias' => $galerias]);
	}
	public function create($id)
	{
		$noticias = Noticia::find($id);
		
		return view('galeria_imagens.create', ['noticias' => $noticias]);
	}
	
	public function upload(Request $request, $id)
	{
		$images = array();
		if($files = $request->file('nome_imagem'))
		{
			//var_dump($files);
			
			foreach($files as $file)
			{
				$name = $file->getClientOriginalName();
				$file->move('galeria_imagens', $name);
				$images[] = $name;
				
				//Insere na tabela
				DB::table('galeria_imagens')->insert([
					'nome_imagem' => $name,
					'id_noticia' => $id,
				]);
				//Dados inseridos
			}
		}
		else
		{
				var_dump($files);
		}
		
		//return redirect()->back()->with('message', 'Upload realizado com sucesso');
	}
}
