@extends('layouts.app')

@section('content')
<nav class='container'>
	<h1>Remover a Imagem ? </h1>
	<hr>
	<br>
	
	<p>Você tem certeza que quer remover a imagem ? </p>
	<br>
	
	<a href='/storage/{{$imagens->nome_imagem}}'>
		<img src='/{{$imagens->nome_imagem}}' alt='{{$imagens->nome_imagem}}' style='width: 25%; border: 1px solid #ccc'>
	</a>
	<br><br>
	
	<b>Nome da imagem:</b> {{$imagens->nome_imagem}}
	<br>
	
	<b>upload em :</b> {{$imagens->created_at}}
	<br><br>
	
	<a href='/imagens' class='btn btn-success'>Voltar para o inicio</a>
		<a href='/imagens/{{$imagens->id}}/destroy' class='btn btn-danger'>Deletar</a>
</nav>
@endsection