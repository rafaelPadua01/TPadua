<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Eventos;
use App\Http\Requests\EventosRequest;
use App\User;
use App\Imagem_Eventos;
use Illuminate\Http\Request;

class EventosController extends Controller
{
	public function index()
	{
		$eventos = Eventos::orderBy('id', 'desc')->paginate(10);
		return view('eventos.index', compact('eventos'));
	}
	public function create($id)
	{
		$users = User::find($id);
		return view('eventos.create', compact('users'));
	}
	public function store(Request $request, $id)
	{
		$usuario = User::find($id);
		$input = $request->all();
		Eventos::create($input, $id);
		
		return redirect()->back()->with('success', 'Novo Evento Criado');
	}
	public function show()
	{
		
		$eventos = Eventos::orderBy('id', 'desc')->get();
		$imagem_eventos = Imagem_Eventos::all();
		return view('eventos.show', compact('imagem_eventos', 'eventos'));
		
	}
	public function display($id)
	{
		$eventos = Eventos::findOrFail($id);
		$imagem_eventos = Imagem_Eventos::all();
		
		return view('eventos.display', compact('eventos', 'imagem_eventos'));
	}
	public function edit($id)
	{
		$eventos = Eventos::find($id);
		return view('eventos.edit', compact('eventos'));
	}
	public function update(Request $request, $id)
	{
		$eventos = Eventos::find($id)->update($request->all());
		
		return redirect()->back()->with('success', 'Evento editado com sucesso');
		
	}
	public function remove($id)
	{
		$eventos = Eventos::find($id);
		return view('eventos.remove', compact('eventos'));
	}
	public function destroy($id)
	{
		$eventos = Eventos::find($id);
		$eventos->where('id', '=', $id)->delete();
		return redirect('eventos')->with('success', 'Evento Removido com sucesso');
		
	}
}