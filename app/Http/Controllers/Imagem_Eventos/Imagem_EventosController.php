<?php 

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Imagem_Eventos;
use App\Eventos;
use App\User;
use App\Http\Requests\Imagem_EventosRequest;
use Illuminate\Http\Request;

class Imagem_EventosController extends Controller
{
	public function index()
	{
		$imagem_eventos = Imagem_Eventos::orderBy('id', 'desc')->paginate(10);
		$eventos = Eventos::all();
		return view('imagem_eventos.index', compact('imagem_eventos', 'eventos'));
	}
	public function create($id_evento)
	{
		
		$eventos = Eventos::find($id_evento);
		
		return view('imagem_eventos.create', compact('eventos'));
	}
	public function upload(Imagem_EventosRequest $request, $id_evento)
	{
		
		//Define um valor padrão para a imagem 
		$nameImage = null;
		
		$data['nome_imagem'] = $request->imagem_eventos;
		
		//Verifica se algum arquivo foi enviado
		//Verifica se é um arquivo válido
		if($request->hasfile('nome_imagem') && $request->file('nome_imagem')->isValid())
		{
			//Define um nome aleatorio para esta imagem
			//Baseado no timestamp do servidor
			$name = uniqid(date('HisYmd'));
			
			//Recupera a extensão do arquivo
			$extension = $request->nome_imagem->extension();
			
			//define o nome final da imagem
			$nameFile = "flyer.{$name}.{$extension}";
			
			//faz upload para o diretorio
			//Se não existir, cria um novo
			$upload = $request->nome_imagem->move('storage/imagem_eventos', $nameFile);
			
			Imagem_Eventos::create([
				
				'id_evento' => $id_evento,
				'id_user' => $request->id_user,
				'nome_imagem' => $upload,
				'descricao' => $request->descricao,
			]);
			
			if($upload)
			{
				return redirect()
						->back()
						->with('success', 'Imagem inserida com sucesso');
			}
			
			return redirect()
					->back()
					->with('error', 'Não foi possível inserir a imagem');
			
		}
	
	}
	public function remove($id)
	{
		$imagem_eventos = Imagem_Eventos::findOrFail($id);
		return view('Imagem_eventos.remove', compact('imagem_eventos'));
	}
	public function destroy($id)
	{
		$imagem_eventos = Imagem_Eventos::findOrFail($id);
		
		\File::delete($imagem_eventos);
		
		$imagem_eventos->where('id', '=', $id)->delete();
		
		return redirect('imagem_eventos')->with('success', 'Imagem Removida com sucesso');
	}
}