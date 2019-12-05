<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Contacts;

class ContactsController extends Controller
{
	public function index()
	{
		return view('contacts.index');
	}
}