<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\User;

class UsersController extends Controller
{
	use Notifiable;
	
	public function index()
	{
		$users = User::all();
		return view('users.index', compact('users'));
	}
	
	public function allUsers()
	{
		$users = \DB::select('Select * from users where 1 = 1');
			return view('users.aprendendo_rotas', ['users' => $users]);
	}
	public function edit($id)
	{
		$users =  \DB::select('select * from users where id = :id');
		return view('users.edit', compact('users'));
	}
	public function update(Request $request, $id)
	{
		
			$data = $request->all();
			//Validação e atualização da senha
			if($data['password'] != null)
				$data['password'] = bcrypt($data['password']);
			
			$update = auth()->user()->update($data);
			
			if($update)
				return redirect()
						->back()
						->with('success', 'Senha Alterada');
			
			return redirect()->back()
								->with('error', 'Falha ao atualizar senha');
			
			//Validação e atualização do nome
			if($data['name'] != null)
				$update = auth()->user()->update($data);
			if($update)
				return redirect()
						->back()
						->with('success', 'Nome Atualizado');
			return redirect()->back()
								->with('error', 'Falha ao atualizar o nome');
			
				//Validação e atualização da senha
				if($data['email'] != null)
					$update = auth()->user()->update($data);
				
				if($update)
					return redirect()
							->back()
							->with('success', 'Email Atualizado com sucesso');
				return redirect()
						->back()
						->with('failure', 'Falha ao atualizar email');
			
		
	}
	public function notificationComment()
	{
		$user = User::find(Auth::user()->id);
		foreach($user->notifications as $notification)
		{
			echo $notification->type;
		}
		
	}
	
	
}