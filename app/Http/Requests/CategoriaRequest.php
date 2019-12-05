<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoriaRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
			'nome_categoria' => 'required|min: 4',
			'tipo' => 'required|min: 4',
        ];
    }
	
	/** 
	* Metodo que personaliza as mensagens de erro 
	*
	**/
	public function messages()
	{
		return [
			'required' => ':attribute não deve ser vázio',
			'min' => ':attribute deve posssuir no mínimo :min caractéres',
		];
		
	}
}
