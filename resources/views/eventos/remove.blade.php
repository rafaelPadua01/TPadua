@extends('layouts.app')

@section('content')
<nav>
	<div class='container'>
		<h1>Remover Evento {{$eventos->nome_evento}}</h1>
		<hr>
		
		<p>Você tem certeza de que deseja remover o Evento ?
		<br>
		<b>Nome do Evento:</b> {{$eventos->nome_evento}}
		<br>
			<b>Data do Evento :</b> {{$eventos->data_evento}}
			<br>
			<b>Hora do Evento:</b> {{$eventos->hora_evento}}
			<br>
			
			<br>
			
		</p>
		<a href='/eventos' class='btn btn-success'>Voltar para o inicio</a>
		<a href='/eventos/{{$eventos->id}}/destroy' class='btn btn-danger btn-sm'>Deletar</a>
		
	</div>
</nav>

@endsection