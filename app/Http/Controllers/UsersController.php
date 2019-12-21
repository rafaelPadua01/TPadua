<?php

namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;


class UsersController extends Controller
{
	
	public function index()
	{
		$users = User::all();
		return view('users.index', compact('users'));
	}
	
	
    public function allUsers()
	{
		$users = \DB::select('SELECT * FROM users WHERE id = :id', ['id' => 1]);
		return view ('users.aprendendo_rotas', ['users'=>$users]);
	}
	public function edit($id)
	{
		$users =  \DB::select('SELECT * FROM users WHERE id = :id', ['id' => 1]);
		return view('users.edit', compact('users'));
	}
	public function update(Request $request, $id)
	{
			$data = $request->all();
			
			if($data['password'] != null)
				$data['password'] = bcrypt($data['password']);
			
			$update = auth()->user()->update($data);
			
			if($update)
				return redirect()
						->back()
						->with('success', 'Senha Alterada');
			
			return redirect()->back()
								->with('error', 'Falha ao atualizar senha');
	}

}
