<?php 

namespace App\Http\Controllers;

use DB;
use App\Http\Controllers\Controller;
use App\Http\Request;
use App\Profile_User;
use App\Http\Requests\Profile_UsersRequest;
use App\User;
use App\Imagem_Profile;

class Profile_UsersController extends Controller
{
	public function index($id)
	{
		$profiles =  Profile_User::all();
		$imagem_profiles = Imagem_Profile::all();
		$id_users = User::find($id);
		return view('profile_users.index', compact('profiles', 'id_users', 'imagem_profiles'));
	}
	public function create($id)
	{
		$user = User::find($id);
		return view('profile_users.create', compact('user'));
	}
	public function store(Profile_UsersRequest $request)
	{
		$input = $request->all();
		Profile_User::create($input);
		
		return redirect('home');
	}
	public function edit($id)
	{
		$profile = Profile_User::findOrFail($id);
		
		return view('profile_users.edit', compact('profile'));
	}
	public function update(Profile_UsersRequest $request, $id)
	{
		$profile = Profile_User::find($id)->update($request->all());
		
		return redirect('home');
	}
	public function remove($id)
	{
		$profile = Profile_User::find($id);
		
		return view('profile_users.remove', compact('profile'));
	}
	public function destroy($id)
	{
		Profile_User::find($id)->delete();
		
		return redirect('home');
	}
}



