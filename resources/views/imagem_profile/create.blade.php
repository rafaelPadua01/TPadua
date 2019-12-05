@extends('layouts.app')

@section('content')

<nav class='container'>
	<h1>Upload de Imagem</h1>
	<hr>
	
	{!! Form::open(['url' => "imagem_profile/$profiles->id/upload", 'method' => 'post', 'enctype' => 'multipart/form-data']) !!}
	
		<!-- inputs do forM -->
		<div class='form-group'>
		{!! Form::label('imagem_profile', 'Arquivo:') !!}
			{!! Form::file('nome_imagem', null, ['class' => 'form-control'])!!}
		</div>
		
		<div class='form-group'>
		
		{!! Form::submit('Upload da imagem', ['class' => 'btn btn-success'])!!}
		</div>
	{!! Form::close()!!}
</nav>

@endsection