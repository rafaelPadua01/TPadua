<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Contacts_News;
use Illuminate\Http\Request;

class Contacts_NewsController extends Controller
{
	public function index()
	{
		$contacts_news = Contacts_News::all();
		return view('contacts_news.index', compact('contacts_news'));
	}
	public function show($id)
	{
		
	}
	public function create()
	{
		return view('contacts_news.create');
	}
	public function store(Request $request)
	{
		$input = $request->all();
		Contacts_News::create($input);
		
		var_dump($input);
		if($input)
		{	
			return redirect()->back()
								->with('success', 'Noticia Enviada com Sucesso');
		}
		else
		{
			return redirect()->back()
								->with('error', 'Não foi possível enviar sua notícia, tente novamente mais tarde');
		}
	}
	public function edit(Request $request, $id)
	{
		$contacts_news = Contacts_News::find($id);
		return view('contacts_news.edit', compact('contacts_news'));
	}
	public function update(Request $request, $id)
	{
		$contacts_news = Contacts_News::find($id)->update($request->all());
		if($contacts_news)
		{
			return redirect()
					->back()
					->with('success', 'Noticia Atualizada com sucesso');
		}
		else
		{
			return redirect()
					->back()
					->with('error', 'Erro ao atualizar notícia, tente novamente mais tarde');
		}
	
	}
	public function remove($id)
	{
			$contacts_news = Contacts_News::find($id);
			return view('contacts_news.remove', compact('contacts_news'));
	}
	public function destroy($id)
	{
	
	}
	
}