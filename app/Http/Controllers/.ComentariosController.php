<?php 

namespace App\Http\Controllers;

use App\Comentarios;
use App\Http\Controllers\Controller;
use App\Noticia;
use Illuminate\Http\Request;

class ComentariosController extends Controller
{
	public function index()
	{
		$comentarios = Comentarios::all();
		return view('comentarios.index', compact('comentarios'));
		
	}
	public function show($id)
	{
		$comentarios = Comentarios::find($id);
		return view('comentarios.show', compact('comentarios'));
	}
	
	public function create($id)
	{
		$id_noticia = Noticias::find($id);
		$comentarios = Comentarios::all();
		Comentarios::create($input);
		return redirect()->back()->with('success', 'Obrigado por comentar');
		
	}
	
	public function store(Request $request, $id)
	{
		
		$noticia = Noticia::find($id);
		
		$input = $request->all();
		$id_noticia = $noticia->id;
		Comentarios::create($input, $id_noticia);
		//var_dump($request);
		
		return redirect()->back()->with('success', 'Comentario inserido');
		
	}
	public function edit()
	{
	
	}
	public function update()
	{
	
	}
	
	public function remove($id)
	{
		$comentarios = Comentarios::find($id);
		return view('comentarios.remove', compact('comentarios'));
	}
	public function destroy($id)
	{
		$comentarios = Comentarios::find($id)->delete();
		
		return redirect('home')
							->with('success', 'Comentario Removido com sucesso');
	}
	
}