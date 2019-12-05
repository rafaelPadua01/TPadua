
@extends('layouts.app')

@section('content')

<div class='container'>
	<h1>{{$noticia->titulo}}</h1>
		<p>Você tem certeza de que deseja remover a Noticia ?
		<br>
		<b>Titulo da notícia:</b> {{$noticia->titulo}}
		<br>
			<b>Fonte da Noticia :</b> {{$noticia->fonte}}
			<br>
			<b>Criada em :</b> {{$noticia->created_at}}
			<br>
			<b>Atualizada em:</b> {{$noticia->updated_at}}
			<br>
			
		</p>
		<a href='/noticias' class='btn btn-success'>Voltar para o inicio</a>
		<a href='/noticias/{{$noticia->id}}/destroy' class='btn btn-danger btn-sm'>Deletar</a>
</div>

@endsection