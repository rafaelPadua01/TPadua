@extends('layouts.app')

@section('content')
<div class='container'>
	<h1>Galeria de imagens dos Parceiros</h1>
	<hr>
	<br>
	<table class='table table-stripped table-hover table-bordered'>
		<thead>
			<tr>
				<th>Id</th>
				<th>Imagem</th>
				<th>Created</th>
				<th>Updated</th>
				<th>Actions</th>
			</tr>
		</thead>
		<tbody>
			@foreach($imagem_parceiros as $imagem_parceiro)
			<tr>
				<td>{{$imagem_parceiro->id}}</td>
				<td><img src='storage/{{$imagem_parceiro->nome_imagem}}'
							alt='Imagem Perfil' style='width: 12%;'>
				</td>
				<td>{{$imagem_parceiro->created_at}}</td>
				<td>{{$imagem_parceiro->updated_at}}</td>
				<td>
					<a href='imagem_parceiros/{{$imagem_parceiro->id}}/remove'>Remover Imagem</a>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>
@endsection