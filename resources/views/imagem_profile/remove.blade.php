@extends('layouts.app')

@section('content')
<div class='container'>
	<h1>Remover Imagem do Perfil</h1>
	<hr>
	
	<p>Você tem certeza de que deseja remover a Imagem ?
		<br>
		<b>Nome da Imagem:</b> {{$imagem_profiles->nome_imagem}}
		<br>
			<b>Criada em :</b> {{$imagem_profiles->created_at}}
			<br>
			<b>Atualizada em:</b> {{$imagem_profiles->updated_at}}
			<br>
			
		</p>
		<a href='/imagem_profile' class='btn btn-success'>Voltar para o inicio</a>
		<a href='/imagem_profile/{{$imagem_profiles->id}}/destroy' class='btn btn-danger btn-sm'>Deletar</a>
	
</div>

@endsection