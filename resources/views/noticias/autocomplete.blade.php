@extends('layouts.app')

@section('content')
<div class='container'>



	<h1>Resultado da busca</h1>
	<hr>
	{{$search}}
	<table class='table table-stripped table-hover table-bordered'>
		<thead>
			<tr>
				<th>Id</th>
				<th>Id_categoria</th>
				<th>Titulo</th>
				<th>Conteudo</th>
				<th>Fonte</th>
				<th>Destaque</th>
				<th>Created</th>
				<th>Updated</th>
				<th>Ações</th>
			</tr>
		</thead>
		<tbody>
	
			@foreach($noticias as $noticia)
				@if($noticia->titulo == ucfirst(trans($search)))
				
			<tr>
				<td>{{$noticia->id}}</td>
				<td>{{$noticia->id_categoria}}</td>
				<td>{{$noticia->titulo}}</td>
				<td>{!! str_limit($noticia->conteudo, 100, '...') !!}</td>
				<td>{{$noticia->fonte}}</td>
				<td>{{$noticia->destaque}}</td>
				<td>{{$noticia->created_at}}</td>
				<td>{{$noticia->updated_at}}</td>
				<td>
					<a href='/noticias/{{$noticia->id}}/edit'>Editar</a>
					|
					<a href='/noticias/{{$noticia->id}}/remove'>Remover</a>
					|
					<!-- Link de upload de imagens -->
					<a href='/imagens/{{$noticia->id}}/create'>Upload de imagem</a>
					
				</td>
				
			</tr>	
				@endif
			@endforeach
		</tbody>
	</table>
	

</div>
@endsection