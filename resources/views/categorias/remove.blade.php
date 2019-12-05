
@extends('layouts.app')

@section('content')

<div class='container'>
	<h1>{{$categoria->nome_categoria}}</h1>
		<p>Você tem certeza de que deseja remover a categoria ?
		<br>
		<b>Nome da categoria:</b> {{$categoria->nome_categoria}}
		<br>
			<b>Criada em :</b> {{$categoria->created_at}}
			<br>
			<b>Atualizada em:</b> {{$categoria->updated_at}}
			<br>
			<b>do Tipo:</b> {{$categoria->tipo}}
		</p>
		<a href='/categorias' class='btn btn-success'>Voltar para o inicio</a>
		<a href='/categorias/{{$categoria->id}}/destroy' class='btn btn-danger btn-sm'>Deletar</a>
</div>

@endsection