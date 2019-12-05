<?php
	//$id_user = $_GET['id_user'];
?>
@extends('layouts.app')

@section('content')

<div class='container'>
	<h1>Cadastro de Categorias</h1>
	<hr>
	@if($errors->any())
		<ul class="alert alert-warning">
			@foreach($errors->all() as $error)
				<li>{{ $error }}</li>
			@endforeach
		
		</ul>
	@endif
	
	{!! Form::open(['url' => "categorias/$user->id/store", 'method' => 'post']) !!}
	
	<!-- inputs do form-->
	<!-- Input Nome Categoria -->
	<div class='form-group'>
	
	</div>
	
	<div class='form-group'>
		{!! Form::label('nome_categoria', 'Nome da categoria:')!!}
		{!! Form::text('nome_categoria', null, ['class' => 'form-control']) !!}
	</div>
	
	<!-- Input Tipo --> 
	<div class='form-group'>
		{!! Form::label('tipo', 'Tipo da Categoria:')!!}
		{!! Form::text('tipo', null, ['class' => 'form-control']) !!}
	</div>
	
	<div class='form-group'>
	
		<a href='/categorias' class='btn btn-danger'>Voltar</a>
		{!! Form::submit('Cadastrar Categoria', ['class' => 'btn btn-primary'])!!}
		
	</div>
	{!! Form::close() !!}
	
</div>

@endsection