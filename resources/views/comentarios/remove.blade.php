@extends('layouts.app')

@section('content')

<nav>
<div class='row'>
	<div class='col-xs-6 col-sm-6 col-md-6 col-lg-6'>
	<h1>Remover o comentário ? </h1>
	<hr>
	<br>
	
	<p>Você tem certeza que quer remover o comentário ? </p>
	<br>
	
	
	<br><br>
	
	<b>Nome da imagem:</b> {{$comentarios->nome}}
	<br>
	
	<b>Comentario:</b> {{$comentarios->comentario}}
	<br>
	
	<b>Data: </b> {{$comentarios->created_at}}
	<br><br>
	
	<a href='/home' class='btn btn-success'>Voltar para o inicio</a>
		<a href='/comentarios/{{$comentarios->id}}/destroy' class='btn btn-danger'>Deletar</a>
	</div>
</div>
</nav>

@endsection