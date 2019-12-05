@extends('layouts.app');

@section('content');

<div class='container'>
	<h1>Upload de imagens</h1>
	<hr>
	<!-- Inicia (abre) um form -->
	{!! Form::open(['url' => "imagens/$noticias->id/upload", 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
	
	<!-- inputs do form -->
	<div class='form-group'>
	{!! Form::label('nome_imagem', 'Arquivo:') !!}
		{!! Form::file('nome_imagem', null, ['class' => 'form-control']) !!}
	</div>	
	
	<!-- Submit -->
	
	<!--<input type='hidden' name='id_noticia' id='id_noticia' value='{{$noticias->id}}'>-->
	<a href='/noticias' class='btn btn-danger'>Voltar</a>
	{!! Form::submit('Salvar Imagem', ['class' => 'btn btn-success'])!!}
	{!! Form::close()!!}

</div>


@endsection;