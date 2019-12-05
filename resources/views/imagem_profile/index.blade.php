@extends('layouts.app')

@section('content')
<nav class='container'>
	<h1>Imagens de Perfil</h1>
	<hr>
	
	<table class='table table-stripped table-hover table-bordered'>
		<thead>
			<tr>
				<th>Id</th>
				<th>id_profile</th>
				<th>Nome Imagem</th>
				<th>Data Upload</th>
				<th>Data Atualização</th>
				<th>Ações</th>
			</tr>
		</thead>
		<tbody>
			@foreach($imagem_profiles as $imagem_profile)
			<tr>
			
				<td>{{$imagem_profile->id}}</td>
				<td>{{$imagem_profile->id_profile}}</td>
				<td>
					<a href='storage/{{$imagem_profile->nome_imagem}}'>
						<img src='/{{$imagem_profile->nome_imagem}}'
							alt='Imagem Perfil' style='width: 12%;'>
					</a>
				</td>
				<td>{{$imagem_profile->created_at}}</td>
				<td>{{$imagem_profile->updated_at}}</td>
				<td>
					<a href='imagem_profile/{{$imagem_profile->id}}/remove'>
						<span class='glyphicon glyphicon-minus-sign'>&nbsp </span>Remover Imagem</a>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</nav>
@endsection