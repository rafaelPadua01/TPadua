<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class SpaController extends Controller
{
	public function index()
	{
		$users = User::all();
		return view('spa.index', compact('users'));
	}
}