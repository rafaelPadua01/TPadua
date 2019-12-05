<?php 

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\User;
use App\Videos;
use App\Http\Requests\VideosRequest;
use Illuminate\Support\Facades\Storage;

class VideosController extends Controller{
	public function index()
	{
		$videos = Videos::orderBy('id', 'desc')->paginate(5);
		return view('videos.index', compact('videos'));
	}
	public function show()
	{
	
	}
	public function create($id)
	{
		$users = User::findOrFail($id);
		return view('videos.create', compact('users'));
	}
	public function upload(VideosRequest $request, $id)
	{
		$users = User::findOrFail($id);
		
		//Define um valor Padrão para o videos
		$nomeVideo = null;
		$descricao = $_POST['descricao'];
		$titulo = $_POST['titulo'];
		//Atribui o arquivo ao array data
		$data['nome_arquivo'] = $request->nome_arquivo;
		
		//Verifica se o arquivo é valido
		if($request->hasfile('nome_arquivo') && $request->file('nome_arquivo')->isValid())
		{
			//Define um nome Aleatorio Baseado no TimeStamp do servidor
			$name = uniqid(date('HisYmd'));
			
			//recupera a extensão do arquivo
			$extension = $request->nome_arquivo->extension();
			
			//define o nome final do videos
			$nameFile = "video.{$name}.{$extension}";
			
			//atribui o arquivo com o nome final do arquivo ao array DATA
			$data['nome_arquivo'] = $nameFile;

			//Faz upload do video para a pasta de upload
			$upload = $request->nome_arquivo->move('storage/videos', $nameFile);
			
			if($upload)
			{
				Videos::create([
					'id_user' => $id,
					'nome_arquivo' => $nameFile,
					'descricao' => $descricao,
					'titulo' => $titulo,
				]);
				return redirect()
							->back()
							->with('success', 'Upload de Video feito com sucesso !');
			}
			else
			{
				return redirect()
							->back()
							->with('error', 'Não foi possivel realizar o upload de arquivo, verifique tamanho e extensão');
			}
			
		}
		
		
		
		
	}
	public function remove($id)
	{
		$videos = Videos::findOrFail($id);
		return view('videos.remove', compact('videos'));
	}
	
	public function destroy($id)
	{
		$videos = Videos::findOrFail($id);
		
		$videos->where('id', '=', $id)->delete();
		Storage::delete($videos);
		
		return redirect('videos')
					->with('success', 'Video Removido com sucesso');
					
		
		
	}
	
	
}