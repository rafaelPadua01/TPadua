 
@extends('layouts.app')

@section('content')

<div class='container'>
	<h1>Editar {{$categoria->nome_categoria}}</h1>
	
	
	@if($errors->any())
		<ul class='alert alert-warning'>
				@foreach($errors->all() as $error)
					<li>{{$error}}</li>
				@endforeach
		</ul>
	@endif
	
	{!! Form::open(['url' => "categorias/$categoria->id/update", 'method'=>'put'])!!}
		<!-- input nome_categoria -->
		<div class='form-group'>
			{!! Form::label('nome_categoria', 'Nome Categoria:')!!}
				{!! Form::text('nome_categoria', $categoria->nome_categoria, ['class' => 'form-control'])!!}
		</div>
		
		<div class='form-group'>
			{!! Form::label('tipo', 'tipo Categoria:')!!}
				{!! Form::text('tipo', $categoria->tipo, ['class' => 'form-control'])!!}
		</div>
		
		<div class='form-group'>
			<a href='/categorias' class='btn btn-danger'>Voltar</a>
			{!! Form::submit('Salvar Categoria', ['class' => 'btn btn-success btn-sm'])!!}
		</div>
	{!! Form::close() !!}
</div>

@endsection