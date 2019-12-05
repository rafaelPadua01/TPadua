
@extends('layouts.app')

@section('content')
<div class='container'>
	<h1>Upload de Imagens de Parceiros</h1>
	<hr>
	
	{!! Form::open(['url' => "imagem_parceiros/$parceiros->id/upload", 'method' => 'post', 'enctype' => 'multipart/form-data']) !!}
	<div class='form-group'>
		{!! Form::label('imagem_parceiros', 'Imagem:') !!}
			{!! Form::file('nome_imagem', null, ['class' => 'form-control', 'placeholder' => 'imagem.jpg']) !!}
	</div>		
			{!! Form::submit('Upload', ['class' => 'btn btn-success']) !!}
	
	{!! Form::close() !!}
</div>
@endsection