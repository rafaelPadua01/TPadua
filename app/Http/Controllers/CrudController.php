<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

abstract class CrudController extends Controller
{
	
	protected $model_instance;
	
     //action index
	public function index()
	{
		$data = $this->getModel()->all();
		return view($this->path.'.index', ['data' => $data]);
	}
	
	//Action create
	//Esta action apenas chama a view do formulario
	public function create()
	{
		return view($this->path.'.create');
	}
	
	//Action store
	//action que salva os dados passados por form
	//no banco de dados
	public function store(Request $request)
	{
		
		$this->getModel()->create($request->all());
			return redirect()->route($this->path.".index");
		
	}
	public function show($id)
	{
		$data = $this->getModel()->find($id);
		return view($this->path.'.show', ['data' => $data]);
	}
	
	//Action Edit
	//Exibe Formulario para edicao
	public function edit($id)
	{
		$data = $this->getModel()->find($id);
		return view($this->path.'.edit', ['data' => $data]);
	}
	
	//Action update
	//Responsavel por editar os dados no banco
	public function update(Request $request, $id)
	{
		$data = data::find($id);
		$data->update($request->all());
		return redirect()->route($this->path.'.index');
	}
	
	//Metodo Mutator 
	//Para manipular os dados do campo
	public function setUrlAttribute($value)
	{
		if($value=='')
			unset($this->attributes['title']);
		
		$this->attributes['url'] = str_slug($value);
	}
	
	//Action Destroy
	public function destroy($id)
	{
		$product = Product::find($id);
		$product->delete();
		return redirect()->route('products.index');
	}
	
	// Action getModel
	public function getModel()
	{
		if($this->model_instance === null)
		{
			$this->model_instance = new $this->model;
			
		}
		
		return $this->model_instance;
	}
	
}
