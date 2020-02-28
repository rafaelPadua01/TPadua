<?php 

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\CategoriaRequest;
use App\Categoria;
use App\Noticia;
use App\Imagens;
use App\User;
use App\Videos;

class CategoriasController extends Controller
{
	public function index()
	{
		//intancia as Categorias em um objeto chamado categorias
		$categorias = Categoria::orderBy('id', 'desc')->paginate(5);
		
		return view('categorias.index', ['categorias' => $categorias]);
	}
	
	public function create($id)
	{
		$user = User::find($id);
		return view('categorias.create', compact('user'));
	}
	
	public function store(CategoriaRequest $request, $id)
	{
		$input = $request->all();
		$user = User::find($id);
		Categoria::create([
			'id_user' => $id,
			'nome_categoria' => $request['nome_categoria'],
			'tipo' => $request['tipo'],
		]);
		
		return redirect()
					->back()
					->with('success', 'Nova Categoria Gerada');
	}
	public function show($id)
	{
		$categorias = Categoria::findOrFail($id);
		$noticias = Noticia::orderBy('id', 'desc')->paginate(5);
		$imagens = Imagens::all();
		#$paginates = Noticia::where('id_categoria', '=', $id)->paginate(5);

		
		return view('categorias.show', compact('categorias', 'imagens'), ['noticias' => $noticias] );
	
	
	}

	public function edit($id)
	{
		$categoria = Categoria::find($id);
		
		return view('categorias.edit', compact('categoria'));
	}
	public function update(CategoriaRequest $request, $id)
	{
		$categoria = Categoria::find($id)->update($request->all());
		
		return redirect('home');
	}
	
	//Metodo de busca de categorias de noticias 
	public function search(Request $request)
	{
		$categorias = Categoria::all();
		$noticias = Noticia::all();
		$search = $request->get('search');
		
		$paginates = DB::table('categorias')->simplePaginate(10);
		
		return view('categorias.search', compact('categorias', 'search', 'noticias', 'paginates'));
	}
	
	public function remove($id)
	{
			$categoria = Categoria::find($id);
			
			return view('categorias.remove', compact('categoria'));
	}
	public function destroy($id)
	{
		$categoria = Categoria::find($id);
		
		$categoria->where('id', '=', $id)->delete();
		return redirect('categorias');
	}
}