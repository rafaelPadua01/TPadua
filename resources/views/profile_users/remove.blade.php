@extends('layouts.app')

@section('content')
<div class='container'>
	<h1>Deletar Perfil</h1>
	
		<p>Você tem certeza de que deseja remover o Perfil ?
		<br>
		<b>data de nascimento</b> {{$profile->data_nascimento}}
		<br>
			<b>Endereco :</b> {{$profile->endereco}}
			<br>
			<b>Telefone</b> {{$profile->telefone}}
			<br>
			<b>id_user</b> {{$profile->id_user}}
			<br>
			
		</p>
		<a href='/home' class='btn btn-success'>Voltar para o inicio</a>
		<a href='/profile/{{$profile->id}}/destroy' class='btn btn-danger btn-sm'>Deletar</a>

</div>

@endsection