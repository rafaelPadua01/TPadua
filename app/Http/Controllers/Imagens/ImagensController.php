<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Imagens;
use App\Noticia;
use App\Http\Requests\ImagensRequest;

class ImagensController extends Controller
{
	public function index()
	{
		//$imagens = Imagens::orderBy('id', 'desc')->paginate(5);
		$imagens = Imagens::orderBy('id', 'desc')->paginate(5);
		$noticias = Noticia::all();
		return view('imagens.index', ['imagens' => $imagens, 'noticias' => $noticias]);
	}
	public function create($id)
	{
		$noticias = Noticia::find($id);
		
		return view('imagens.create', ['noticias' => $noticias]);
	}
	
	public function upload(Request $request, $id)
	{
		
		
		//Define um valor padrão para a variavel que recebe o nome da imagem
		$nameImage = null;
		
		$data['nome_imagem'] = $request->nome_imagem;
		
		
		//Verifica se informou um arqivo e se ele é válido
		if($request->hasfile('nome_imagem') && $request->file('nome_imagem')->isValid())
		{
			$id_user = $request->id_user;
			
			//Define um nome aleatorio, 
			//Baseado no timestamp atual
			$name = uniqid(date('HisYmd'));
			
			//recupera extensão do arquivo
			$extension = $request->nome_imagem->extension();
			
			//Define finalmente o nome
			$nameFile = "noticia.{$name}.{$extension}";
			
			$data['nome_imagem'] = $nameFile;
			
			
			
				
			
			//faz o upload
			$upload = $request->nome_imagem->move('storage/imagem_noticias/', $nameFile);  // teste hospedagem 
			
			Imagens::create([
				'nome_imagem' => $upload,
				'id_noticia' => $id,
				'id_user' => $id_user,
				
			]);
			
			if($upload)
			{
				return redirect('imagens')
						->with('success', 'Sucesso ao atualizar');
			
						
			}
			
			return redirect()
					->back()
					->with('error', 'Não foi possível atualizar');
		}

	}
	
	//Metodo que chama view de deletar a imagem
	public function remove($id)
	{
		$imagens = Imagens::find($id);
		
		return view('imagens.remove', compact('imagens'));
	}
	
	public function destroy($id)
	{
		$imagens = Imagens::find($id);
		
		\File::delete($imagens);
		
		$imagens->where('id', '=', $id)
				->delete();
		return redirect('imagens');
		
	}
	
	
	
		
}