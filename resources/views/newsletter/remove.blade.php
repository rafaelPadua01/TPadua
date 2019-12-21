
@extends('layouts.app')

@section('content')

<div class='container'>
<form action='/newsletter/{{$user_news_letter->id}}/destroy'>
	<h1>{{$user_news_letter->nome_user_newsLetter}}</h1>
		<p>Você tem certeza de que deseja remover o usuário ?
		<br>
		<b>Nome do usuário</b> {{$user_news_letter->nome_user_newsLetter}}
		<br>
		
			<b>Email</b> {{$user_news_letter->email}}
			<br>
			<b>Criada em :</b> {{$user_news_letter->created_at}}
			<br>
			<b>Atualizada em:</b> {{$user_news_letter->updated_at}}
			<br>
		
		</p>
		<a href='/newsletter' class='btn btn-success'>Voltar para o inicio</a>
		<button type='submit' class='btn btn-danger btn-sm'>Deletar</a>
</form>
</div>

@endsection