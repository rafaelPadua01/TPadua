<?php 

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Imagem_Parceiros;
use App\Parceiros;
use App\Http\Requests\Imagem_ParceirosRequest;


class Imagem_ParceirosController extends Controller
{
	public function index()
	{
		$imagem_parceiros = Imagem_Parceiros::all();
		return view('imagem_parceiros.index', ['imagem_parceiros' => $imagem_parceiros]);
	}
	public function create($id)
	{
		$parceiros = Parceiros::find($id);
		
		return view('imagem_parceiros.create', compact('parceiros'));
	}
	
	public function upload(Imagem_ParceirosRequest $request ,$id)
	{
		//Define um valor padrão para a imagem_parceiros
		$name_imagem = null;
		
		$data['nome_imagem'] =  $request->imagem_parceiros;
		
		//verifica se foi enviado um arquivo e se ele é valido
		if($request->hasfile('nome_imagem') && $request->file('nome_imagem')->isValid())
		{
			//Define um nome aleatorio baseado no timestamp do server
			$name = uniqid(date('HisYmd'));
			
			//recuperaa extensão do arquivo
			$extension = $request->nome_imagem->extension();
			
			//Define o nome final da imagem_parceiros
			$nameFile = "imagem_parceiro.{$name}.{$extension}";
			
			$data['nome_imagem'] = $nameFile;

			//faz o upload da imagem_parceiro
			$upload = $request->nome_imagem->storeAs('imagem_parceiro', $nameFile);
			
			//Faz upload do nome da tabela para o banco de dados
			Imagem_Parceiros::create([
				'nome_imagem' => $upload,
				'id_parceiro' => $id,
			]);
			
			if($upload)
			{
				return redirect('imagem_parceiros')->with('success', 'Upload realizado com sucesso');
			}
			else
			{
				return redirect('imagem_parceiros')->back(old())
													->with('failure', 'Não foi pssível fazer upload da imagem, 
																tente novamente mais tarde');
			}
		}
	}
	public function remove($id)
	{
		$imagem_parceiros = Imagem_Parceiros::find($id);
		
		return view('imagem_parceiros.remove', compact('imagem_parceiros'));
	}
	
	public function destroy($id)
	{
		$imagem_parceiros = Imagem_Parceiros::find($id);
		
		\File::delete($imagem_parceiros);
		
		$imagem_parceiros->where('id', '=', $id)->delete();
		
		return redirect('imagem_parceiros')->with('success', 'Imagem Removida com sucesso');
	}
} 