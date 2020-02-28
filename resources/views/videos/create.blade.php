@extends('layouts.app')

@section('content')
<div class='container'>
	<h1>Formulário de Upload de Videos</h1>
	<hr>
	
	{!! Form::open(['url' => "videos/{$users->id}/upload", 'method' => 'post', 'enctype' => 'multipart/form-data']) !!}
		
		<div class='form-group'>
		{!! Form::label('titulo', 'titulo:') !!}
			{!!Form::text('titulo', null, ['class' => 'form-control'])!!}
		</div>
	
		<div class='form-group'>
		{!! Form::label('nome_arquivo', 'Video:') !!}
			{!!Form::file('nome_arquivo', null, ['class' => 'form-control'])!!}
		</div>
		
		<div class='form-group'>
		{!! Form::label('descricao', 'Descrição:')!!}
			{!! Form::textarea('descricao', null, ['class' => 'form-control'])!!}
		</div>
		
		<div class='form-group'>
		<a href='/videos' class='btn btn-danger'>Voltar para a pagina anterior</a>
		{!! Form::submit('Upload de Video', ['class' => 'btn btn-success']) !!}
		</div>
	{!! Form::close()!!}
	
</div>


@endsection