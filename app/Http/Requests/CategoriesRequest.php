<?php

namespace App\Http\Requests;

use App\Http\Requests\AbstractRequest;

class CategoriesRequest extends AbstractRequest
{
	protected $rules = [
		'title' => 'required|min: 3',
	];
}