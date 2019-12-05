<?php 

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Profile_User;
use App\Imagem_Profile;
use App\Http\Requests\Imagens_ProfileRequest;


class Imagem_ProfileController extends Controller
{
	public function index()
	{
		$imagem_profiles = Imagem_Profile::all();
		
		return view('imagem_profile.index', ['imagem_profiles' => $imagem_profiles]);
	}
	
	public function create($id)
	{
		$profiles = Profile_user::find($id);
		
		return view('imagem_profile.create', compact('profiles'));
	}
	public function upload(Request $request, $id)
	{
		//Define um valor padrão para a variavel que recebe a imagem_profile
		$nameImagem = null;
		
		$data['nome_imagem'] = $request->imagem_profile;
		
		//Verifica se informou um arquivo e se ele é válido
		if($request->hasfile('nome_imagem') && $request->file('nome_imagem')->isValid())
		{
			//Define um nome aleátorio para está imagem_profile
			$name = uniqid(date('HisYmd'));
			
			//recupera extensão do arquivo
			$extension = $request->nome_imagem->extension();
			
			//define o nome final da imagem 
			$nameFile = "profile.{$name}.{$extension}";

			$data['nome_imagem'] = $nameFile;

			//faz upload
			$upload = $request->nome_imagem->move('storage/imagem_profiles', $nameFile);
			
			//Sobe nome da imagem para a tabela do banco de dados
			Imagem_Profile::create([
				'nome_imagem' => $upload,
				'id_profile' => $id,
			]);
			
			if($upload)
			{
				return redirect('imagem_profile')
						->with('success', 'Upload realizado com sucesso');
			}
			else
			{
				return redirect()
						->back(old())
						->with('error', 'Não foi possivel relaizar upload dessa imagem');
			}
		}
	}
	
	public function remove($id)
	{
		$imagem_profiles = Imagem_Profile::find($id);
		
		return view('imagem_profile.remove', compact('imagem_profiles', $imagem_profiles));
	}
	
	public function destroy($id)
	{
		$imagem_profiles = Imagem_Profile::find($id);
		
		\File::delete($imagem_profiles);
		
		$imagem_profiles->where('id', '=', $id)
						->delete();
		return redirect('imagem_profile');
	}
}