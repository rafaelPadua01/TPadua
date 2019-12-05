@extends('layouts.app')

@section('content')
<div class='container'>
	<h1>Remover a Imagem da Galeria? </h1>
	<hr>
	
	<p>Você tem certeza que quer remover a imagem ? </p>
	<br>
	
	<a href='/storage/galeria_imagens/{{$galerias->nome_imagem}}'>
		<img src='/storage/galeria_imagens/{{$galerias->nome_imagem}}' alt='{{$galerias->nome_imagem}}' style='width: 25%; border: 1px solid #ccc'>
	</a>
	<br><br>
	
	<b>Nome da imagem:</b> {{$galerias->nome_imagem}}
	<br>
	
	<b>upload em :</b> {{$galerias->created_at}}
	<br><br>
	
	<a href='/galeria_imagens/index' class='btn btn-success'>Voltar para o inicio</a>
		<a href='/galeria_imagens/{{$galerias->id}}/destroy' class='btn btn-danger'>Deletar</a>
</div>


@endsection