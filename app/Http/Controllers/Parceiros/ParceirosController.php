<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Parceiros;
use App\User;
use App\Http\Requests\ParceirosRequest;

class ParceirosController extends Controller
{
   public function index()
	{
			$parceiros = Parceiros::all();
			
			return view('parceiros.index', ['parceiros' => $parceiros]);
	}
	
	public function create()
	{
			return view('parceiros.create');
	}
	public function store(ParceirosRequest $request)
	{
		$input  = $request->all();
		Parceiros::create($input);
		return redirect('parceiros')->with('success', 'Sucesso, clique no botão upload de imagem
											<br> e adicione uma imagem ao novo parceiro');
	}
	public function edit($id)
	{
		$parceiros = Parceiros::find($id);
		return view('parceiros.edit', compact('parceiros'));
	}
	public function update(ParceirosRequest $request, $id)
	{
		Parceiros::find($id)->update($request->all());
		
		return redirect('parceiros')->with('success', 'Parceiro Atualizado com sucesso');
	}
	
	public function remove($id)
	{
		$parceiros = Parceiros::find($id);
		
		return view('parceiros.remove', compact('parceiros'));
	}
	
	public function destroy($id)
	{
		$parceiros = Parceiros::find($id);
		
		$parceiros->where('id', '=', $id)->delete();

		return redirect('parceiros')->with('success', 'Parceiro removido com sucesso');
	}
}
