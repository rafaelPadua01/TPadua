<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Storage;
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
		$diretorios = Storage::allDirectories('galeria_imagens/');
		
		
		return view('galeria_imagens.index', ['galerias' => $galerias, 'noticias' => $noticias, 'diretorios' => $diretorios]);
	}
	public function create($id)
	{
		$noticias = Noticia::find($id);
		
		return view('galeria_imagens.create', ['noticias' => $noticias]);
	}
	
	public function upload(Request $request, $id)
	{
		$id_user = $request->id_user;
		$nome_galeria = $request->nome_galeria;
		$images = array();
		if($files = $request->file('nome_imagem'))
		{
			foreach($files as $file)
			{
				if($nome_galeria == '' || $nome_galeria == null)
				{
					echo "<script>alert('você deve escolher um nome para sua galeria')</script>";
					return redirect()->back()->with('error', 'Você deve escolher um nome para sua nova galeria');
				}
				else
				{
					$diretorio = Storage::makeDirectory("galeria_imagens/".$nome_galeria);
				
					$name = $file->getClientOriginalName();
					$file->move("storage/galeria_imagens/".$nome_galeria, $name);
					$images[] = $name;
				
					//Insere na tabela
					DB::table('galeria__imagens')->insert([
						'nome_galeria' => $request->nome_galeria,
						'nome_imagem' => $name,
						'id_noticia' => $id,
						'id_user' => $id_user,
						'created_at' => $request->created_at,
						'updated_at' => $request->updated_at,
					]);
					//Dados inseridos
					echo "<script>window.alert('Upload realizado com sucesso.')</script>";
				}
			}
		}
		else
		{
				var_dump($files);
		}
		
		
		return redirect()->back()->with('success', 'Upload realizado com sucesso');
		
	}
	
	
	public function show($diretorio)
	{
		
		$galerias = Galeria_Imagens::all()->where('nome_galeria', '=', $diretorio);
		
		return view('galeria_imagens.show', compact('galerias', 'diretorio'));
	}
	/*Funções de update da galeria*/
	public function edit($diretorio)
	{
		$galerias = Galeria_Imagens::all()->where('nome_galeria', '=', $diretorio);
		$noticias = Noticia::all();
		return view('galeria_imagens.edit', compact('galerias', 'diretorio', 'noticias'));
	}
	
	/*Função de Busca */
	public function search(Request $request)
	{
		$input = $request->all();
		$path = 'galeria_imagens/';
		$diretorios = dir($path);
		$search = $path.$request->get('search');
		$result = Storage::allFiles($search);
		
		if($result)
		{
			return view('galeria_imagens.search', compact('result', 'search'))->with('success');
		}
		else
		{
			echo "<script>window.alert('Resultado não encontrado')</script>";
			return redirect('galeria_imagens/index')
							->with('failure', 'Nenhum resultado encontrado');
			
		}
		
		echo "<script>Resultado não encontrado</script>";
		
		
		
		
		
		
	}
	/*
	public function update(Request $request)
	{
		$id_user = $request->id_user;
		$id_noticia = $request->id_noticia;
		$nome_galeria = $request->nome_galeria;
		$imagens = array();
		
		
		if($files = $request->file('nome_imagem'))
		{
			foreach($files as $file)
			{
				if($nome_galeria == '' || $nome_galeria == null)
				{
					echo "<script>alert('você deve escolher uma galeria')</script>";
					return redirect()->back()->with('error', 'Você deve escolher uma galeria');
				}
				else
				{
					
					$name = $file->getClientOriginalName();
					$file->move("storage/galeria_imagens/".$nome_galeria, $name);
					$images[] = $name;
					
					//Insere na tabela
					DB::table('galeria__imagens')->insert([
						'nome_galeria' => $request->nome_galeria,
						'nome_imagem' => $name,
						'id_noticia' => $id_noticia,
						'id_user' => $id_user,
						
					]);
					//Dados inseridos
					echo "<script>window.alert('Upload realizado com sucesso.')</script>";
					return redirect()->back()->with('success', 'upload realizado com sucesso');
				}
			}
		}
	}*/
	
	/* Funções para remover galerias */
	public function remove(Request $request, $diretorio)
	{
		
		$galerias = Galeria_Imagens::all();
		$galeria_diretorio = $diretorio;
		
		return view('galeria_imagens.remove', compact('galerias', 'galeria_diretorio'));
		
	}
	public function RemoveAll()
	{
		$galerias = Galeria_Imagens::all();
		$diretorio = 'galeria_imagens/';
		$galeria = Galeria_Imagens::select('*')->delete();
		
		
			$remove = Storage::deleteDirectory($diretorio);
			if(empty($galeria))
			{
				echo "merda";
			}
			if($remove)
			{
				echo "<script>window.alert('Todas as galerias foram removidas')</script>";
				return redirect()->back()->with('success', 'galerias removidas com sucesso');
			}
			else
			{
				echo "<script>window.alert('nenhuma galeria encontrada....')</script>";
				return redirect()->back();
			}
		
			#dd($galeria->nome_galeria);
			echo "<script>window.alert('Todas as galerias foram removidas')</script>";
			return redirect()->back()->with('success', 'galerias removidas com sucesso');
		
			
		
		
		//$galeria = Galeria_Imagens::select('*')->where('id', '=', 'id')->delete();
		
		
		//
	}
	
	public function destroyGaleria($galeria_diretorio)
	{
		
		$diretorio = 'galeria_imagens/';
		$remove = Storage::deleteDirectory($diretorio.$galeria_diretorio);
		
		if($remove == true)
		{
			$galeria = Galeria_Imagens::select('nome_galeria')->where('nome_galeria', '=', $galeria_diretorio)->delete();
			if($galeria == true)
			{
				echo "<script>window.alert('removido com sucesso')</script>";
				return redirect()->back()->with('success', 'Galeria Removida com sucesso');
			}
			else
			{
				return redirect()->back()->with('error', 'falha ao remover galeria, contate um administrador');
			}
		}
		
	}
	/* Função que remove uma ou varias imagens da galeria */
	public function removeImagens()
	{
		$imagens = $_GET['imagens'];
		
		foreach($imagens as $imagem)
		{
			$remove = Galeria_Imagens::select('*')->where('id', '=', $imagem)->delete();
			
		}
		
		
		return redirect()->back()->with('success', 'imagens removidas...');
	}
	/*
	public function destroy(Request $request, $id)
	{
		$galerias = Galeria_Imagens::find($id);
		
		\File::delete($galerias);
		
		$galerias->where('id', '=', $id)->delete();
		
		return redirect('galeria_imagens/index')
				->with('message', 'Imagem Removida com sucesso');
	}
	*/
}
