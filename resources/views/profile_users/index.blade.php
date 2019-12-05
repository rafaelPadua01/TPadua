@extends('layouts.app')

@section('content')

<div class='container'>
<h1>Perfil de Usuário</h1>
	<hr>
	<div class='container' style='text-align: center''>
	
	<a href='/profile/{{Auth::user()->id}}/create'><span class='glyphicon glyphicon-save-file'></span>Criar Perfil</a>
	|
	<a href='/imagem_profile'>Galeria de Imagens</a>
	</div>
	
	<br>
	
	<div class='container'>
			@foreach($profiles as $profile)
			
				@if($profile->id_user == $id_users->id)
				
				@foreach($imagem_profiles as $imagem_profile)
				
					@if($imagem_profile->id_profile == $profile->id)
						<a href='/storage/{{ $imagem_profile->nome_imagem }}'>
							<img src='/{{ $imagem_profile->nome_imagem }}'alt='imagem_profile' 
								style='height: 20%;width: 25%; margin-left: 35%'>
						</a>

					<hr>
				<br>
				
				
					
					
					@endif
		@endforeach
				<br>
				
			
					
					<br>
						<b>Nome:</b> {{$id_users->name}}
						<br>
						<b>Email:</b> {{$id_users->email}}
						<br>
						<b>Endereço:</b> {{$profile->endereco}}
						<br>	
						<b>Data de Nascimento:</b> {{$profile->data_nascimento}}
						<br>
				
				<div class='container' style='text-align: center;'>
				<br>
					<a href='/imagem_profile/{{$profile->id}}/create' class='btn btn-default'><span class='glyphicon glyphicon-save-file'></span>Upload de imagem</a>
					
					<a href='/profile/{{$profile->id}}/edit' class='btn btn-default'><span class='glyphicon glyphicon-refresh'></span>Editar Perfil</a>
					
					<a href='/profile/{{$profile->id}}/remove' class='btn btn-default'><span class='glyphicon glyphicon-minus-sign'></span>Remover Perfil</a>
		</div>
			
				
				
	</div>			

				
			@endif
			
		@endforeach
	
</div>

@endSection