<?php 

namespace App\Http\Request;

use App\Http\Requests\Request;

//Classe de abstração 
//do ProductRequest

abstract class AbstractRequest extends Request
{
	protected $actionToValidate = ['store', 'update'];
	
	public function authorize()
	{
		return true;
	}
	
	public function rules()
	{
		if($this->isMethod('post') or $this->isMethod('put'))
			return $this->rules;
		
		return [];
	}
	public function messages()
	{
		
		//Traduzindo ou criando as mensagens
			[
				'required' => ':attribute não deve ficar vazio',
				'title.required' => 'O titulo é Obrigatorio', //Está é uma mensagem personalizada para o campo
				'min' => ':attribute deve ter mais de :min caracteres',
				'numeric' => ':attribute deve ser um número',
			];
	}
	
	//Verifica a actio que está sendo chamada
	protected function checkAction()
	{
		if(empty($this->route()->getAction()['as']))
			return false;
		
		$base = explode('.', $this->route()->getAction()['as']);
		
		if(empty($base[1]))
			return false;
		
		return in_array($base[1], $this->actionsToValidate);
	}
}