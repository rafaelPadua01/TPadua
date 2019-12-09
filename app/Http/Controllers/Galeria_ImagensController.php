<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use DB;
use Validator;
use Redirect;
use View;
use App\Http\Controllers\Controller;
use App\Galeria_Imagens;
use App\Http\Requests\Galeria_ImagensRequest;
use App\Noticia;

class Galeria_ImagensController extends Controller
{
	public function index()
	{
		$galerias = Galeria_Imagens::orderBy('id', 'desc')->paginate(10);
		$noticias = Noticia::all();
		
		return view('galeria_imagens.index', ['galerias' => $galerias, 'noticias' => $noticias]);
	}
	public function create($id)
	{
		$noticias = Noticia::find($id);
		
		return view('galeria_imagens.create', ['noticias' => $noticias]);
	}
	
	public function upload(Request $request, $id)
	{
		$id_user = $request->id_user;
		
		$images = array();
		if($files = $request->file('nome_imagem'))
		{
			foreach($files as $file)
			{
				$name = $file->getClientOriginalName();
				$file->move('storage/galeria_imagens', $name);
				$images[] = $name;
				
				//Insere na tabela
				DB::table('galeria__imagens')->insert([
					'nome_galeria' => $request->nome_galeria,
					'nome_imagem' => $name,
					'id_noticia' => $id,
					'id_user' => $id_user,
				]);
				//Dados inseridos
			}
		}
		else
		{
				var_dump($iiles);
		}
		
		
		return redirect()->back()->with('message', 'Upload realizado com sucesso');
		
	}
	
	public function remove($id)
	{
		$galerias = Galeria_Imagens::find($id);
		
		return view('galeria_imagens.remove', compact('galerias'));
	}
	
	public function destroy($id)
	{
		$galerias = Galeria_Imagens::find($id);
		
		\File::delete($galerias);
		
		$galerias->where('id', '=', $id)->delete();
		
		return redirect('galeria_imagens/index')
				->with('message', 'Imagem Removida com sucesso');
	}
}
