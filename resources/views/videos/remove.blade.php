@extends('layouts.app')

@section('content')
<div class='container'>
	<h4 style='text-align: center'>Remover Video ?</h4>
	<hr>
	<h4>Você tem certeza de que deseja remover o Video ?</h4>
		<br>
		<b>Video:</b>
		<br>
		
		<video controls='controls' style='min-width: 50px; max-height: 100%; width: 35%; heigth: 25px;
				margin-left: 0%;'>
			<source src='/storage/videos/{{$videos->nome_arquivo}}' alt='{{$videos->nome_arquivo}}' type='video/mp4'>
			<object data=''>
			<embed src='/{{$videos->nome_arquivo}}'>
					
			</object>
		</video>
		<br>
		<b>Titulo do video:</b> {{$videos->titulo}}
		<br>
			
			<br>
			<b>Criado em :</b> {{$videos->created_at}}
			<br>
			<b>Atualizado em:</b> {{$videos->updated_at}}
			<br>
			
		</p>
		<a href='/videos' class='btn btn-success'>Voltar para o inicio</a>
		<a href='/videos/{{$videos->id}}/destroy' class='btn btn-danger btn-sm'>Deletar</a>
</div>

@endsection