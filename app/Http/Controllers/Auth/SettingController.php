<?php 

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class SettingsController extends Controller
{
	public function edit($id)
	{
		AuthenticatesUsers::find($id);
		return view('settings.edit');
	}
	public function update(Request $request,$id)
	{
			$usuario = Auth::user(); //Resgata usuarios
			
			$usuario->username = Request::input('username'); //Pega o username do usuario
			$usuario->email = Request::input('email'); recebe email do usuario		
			
			if(! Request::input('password') == '') //Verifica a senha, se possui algum valor
			{
				$user->password = bcrypt(Request::input('password'));
			}
			
			$user->save(); // salva usuario alterado
			
			Flash::message('Senha Atualizada com sucesso');
			return redirect('home');
	}
}