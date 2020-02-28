<?php 

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\User;
use App\Videos;
use App\Http\Requests\VideosRequest;
use Illuminate\Support\Facades\Storage;
use Thumbnail;

class VideosController extends Controller{
	public function index()
	{
		$videos = Videos::orderBy('id', 'desc')->paginate(5);
		return view('videos.index', compact('videos'));
	}
	public function show($id)
	{
		$videos = Videos::findOrFail($id);
		$videos_info = Videos::all();
		return view('videos.show', compact('videos_info'));
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
		$data['video_length'] = $request->nome_arquivo->getSize();
	
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
				//se o upload for realizado com sucesso
				//será gerada a imagem thumbnail 
				$thumbnail_path = 'storage/videos/videoThumbnail/';

				$video_path = 'storage/videos/'.$nameFile;
				

				//Seta o nome da thumbnail em uma variavel
				$thumbnail_image = $nameFile.".jpg";

				//seta a imagem de playback ao video
				$water_mark  = storage_path().'/watermark/p.png';
				
				//recebe o tamanho do video e processa isto
				//assina o valor para o time_to_image(que permite obter screenshot nos minutos especificos)
				$time_to_image = floor(10 / 2);
				
				#dd($time_to_image);
				$thumbnail_status = Thumbnail::getThumbnail($video_path,$thumbnail_path,$thumbnail_image,$time_to_image);
				
				if($thumbnail_status)
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