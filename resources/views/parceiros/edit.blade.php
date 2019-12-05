@extends('layouts.app')

@section('content')
<div class='container'>
	<h1>Editar Parceiro</h1>
	<hr>
	
	{!! Form::open(['url' => "parceiros/$parceiros->id/update", 'method' => 'put']) !!}
		
		<div class='form-group'>
		{!! Form::label('nome_parceiro', 'Nome do Parceiro' ) !!}
		{!! Form::text('nome_parceiro', $parceiros->nome_parceiro, ['class' => 'form-control'])!!}
		</div>
	
		<div class='form-group'>
		{!! Form::label('url', 'URL') !!}
			{!! Form::url('url', $parceiros->url, ['class' => 'form-control']) !!}
		</div>
		
		<div class='form-group'>
		{!! Form::label('email', 'Email') !!}
			{!! Form::email('email', $parceiros->email, ['class' => 'form-control']) !!}
		</div>
		
		<div class='form-group'>
		<a href='/parceiros' class='btn btn-danger'>Voltar</a>
		{!! Form::submit('Atualizar', ['class' => 'btn btn-success'])!!}
		</div>
		
		
	{!! Form::close()!!}
</div>
@endsection