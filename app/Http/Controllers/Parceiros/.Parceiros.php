<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Parceiros;
use App\User;

class Parceiros extends Controller
{
    //
	public function index()
	{
			$parceiros = Parceiros::all();
			
			return view('parceiros.index', ['parceiros' => $parceiros]);
	}
	
	public function create($id)
	{
			$users = find($id);
			
			return view('parceiros.create', compact('users'));
	}
}
