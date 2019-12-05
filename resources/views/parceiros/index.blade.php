@extends('layouts.app')

@section('content')
<nav class='container'>
	<h1>Parceirias</h1>
		<hr>
	
	<a href='parceiros/create'>Cadastrar Novo Parceiro</a>
	|
	<a href='imagem_parceiros'>Galeria de Imagens</a>
	
	<table class='table  table-stripped table-bordered table-hover'>
		<thead>
			<tr>
				<th>Id</th>
				<th>Nome Parceiro</th>
				<th>Url</th>
				<th>Email</th>
				<th>Created</th>
				<th>Updated</th>
				<th>Ações</th>
			</tr>
		</thead>
		
		<tbody>
			@foreach($parceiros as $parceiro)
			<tr>
				<td>{{$parceiro->id}}</td>
				<td>{{$parceiro->nome_parceiro}}</td>
				<td>{{$parceiro->url}}</td>
				<td>{{$parceiro->email}}</td>
				<td>{{$parceiro->created_at}}</td>
				<td>{{$parceiro->updated_at}}</td>
				<td>
					<a href='parceiros/{{$parceiro->id}}/edit'>Editar</a>
					|
					<a href='parceiros/{{$parceiro->id}}/remove'>Remover</a>
					|
					<a href='imagem_parceiros/{{$parceiro->id}}/create'>Upload de imagem</a>
				</td>
				
			</tr>
			@endforeach
		</tbody>
	</table>	

</nav>
@endsection