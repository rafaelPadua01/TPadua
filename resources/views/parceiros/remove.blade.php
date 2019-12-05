
@extends('layouts.app')

@section('content')

<div class='container'>
	<h1>Remover {{$parceiros->nome_parceiro}}</h1>
	<hr>
		<p>Você tem certeza de que deseja remover o Parceiro ?
		<br>
		<br>
		<b>Nome Do Parceiro</b> {{$parceiros->nome_parceiro}}
		<br>
			<b>URL</b> {{$parceiros->url}}
			<br>
			<b>Email</b> {{$parceiros->email}}
			<br>
			<b>Criada em :</b> {{$parceiros->created_at}}
			<br>
			<b>Atualizada em:</b> {{$parceiros->updated_at}}
			<br>
			
		</p>
		<br>
		<br>
		<a href='/parceiros' class='btn btn-success'>Voltar para o inicio</a>
		<a href='/parceiros/{{$parceiros->id}}/destroy' class='btn btn-danger btn-sm'>Deletar</a>
</div>

@endsection