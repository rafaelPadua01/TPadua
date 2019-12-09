@extends('layouts.app')

@section('content')
<div class='container'>
	<div class='row'>
		<h3 align='center'>Upload de Imagens de Eventos</h3>
		<hr> 
			@if($errors->any())
				<ul>
					@foreach($errors as $error)
					<li>{{$error}}</li>
					@endforeach
				</ul>
			@endif
		<div class='col-xs-2 col-sm-2 col-md-2 col-lg-2'></div>
		<div class='col-xs-6 col-sm-6 col-md-6 col-lg-6'>
			{!! Form::open(['url' => "imagem_eventos/$eventos->id/upload", 'method' => 'post', 
								'enctype' => 'multipart/form-data']) !!}
				<div class='form-group'>
					{!! Form::label('nome_evento', 'Nome do Evento:') !!}
					 {!! Form::file('nome_imagem', null, ['class', 'form-control']) !!}
				</div>
				
				<div class='form-group'>
					{!! Form::label('descricao', 'descricao') !!}
					<br>
					 {!! Form::textarea('descricao', null, ['class', 'form-control']) !!}
				</div>
				
				<div class='form-group'>
					<div class='btn-group'>
						<a href='/eventos' class='btn btn-danger'>Voltar para a página anterior</a>
						<button type='submit' class='btn btn-success'>Upload</button>
						{!! Form::hidden('id_user', Auth::user()->id) !!}
					</div>
				</div>
			{!! Form::close() !!}
			
		
		</div>
		<div class='col-xs-2 col-sm-2 col-md-2 col-lg-2'></div>
	</div>
</div>


@endsection