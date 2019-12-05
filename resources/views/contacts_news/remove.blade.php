@extends('layouts.app')

@section('content')
<div class='container'>
	<h1 style='text-align: center'>Remover Notícia ?</h1>
	<hr>
	
	<p>Você tem certeza de que deseja remover a Noticia ?
		<br>
		<b>Fonte da Noticia :</b> {{$contacts_news->nome}}
			<br>
			<b>Email da Fonte:</b> {{$contacts_news->email}}
			<br>
		<b>Titulo da notícia:</b> 
				<br>
			<textarea>{{$contacts_news->noticia}}</textarea>
		<br>
			
			<b>Criada em :</b> {{$contacts_news->created_at}}
			<br>
			
			<br>
			
		</p>
		<a href='/home' class='btn btn-success'>Voltar para o inicio</a>
		<a href='/contacts_news/{{$contacts_news->id}}/destroy' class='btn btn-danger btn-sm'>Deletar</a>
	
</div>

@endsection