@extends('layouts.app')

@section('content')

<div class='container'>
	<h1 align='center'>Noticias</h1>
	<hr>
	<div class='btn-group'>
		<a href='/home' class='btn btn-info'>
			<i class='glyphicon glyphicon-home'></i>
				Página Inicial
		</a>
		
	</div>
	<br>
	
		<!-- Formulario com input de busca (search) -->
				<form class='navbar-form navbar-left' action='noticias/search'>
				
					<div class='input-group'>
						<input type='text' name='search' id='search' class='typeahead form-control' 
								placeholder='Buscar por noticias(ex: Titulo)'>
								
						<div class='input-group-btn'>
							<button class='btn btn-default' type='submit'>
							<i class='glyphicon glyphicon-search'></i>
							</button>
						</div>
					</div>
					
				</form>
	
	
	<table class='table table-striped table-bordered table-hover table-responsive'>
		<tr>
		<thead>
				<th>Id</th>
				<th>Categoria</th>
				<th>Usuario</th>
				<th>Titulo</th>
				<th>Conteudo</th>
				<th>Fonte</th>
				<th>Destaque</th>
				<th>created</th>
				<th>Updated</th>
				<th>Ações</th>
			</thead>
		</tr>
		<tbody>
		@foreach($noticias as $noticia)
			<tr>
				<td>{{$noticia->id}}</td>
				<td>
					@foreach($categorias as $categoria)
						@if($categoria->id == $noticia->id_categoria)
							{{$categoria->nome_categoria}}
						@endif
					@endforeach
					
				</td>
				<td>
					@foreach($users as $user) 
						@if($user->id === $noticia->id_user)
							{{$user->name}}
						@endif
					@endforeach
				</td>
				<td>{{$noticia->titulo}}</td>
				<td>{!! str_limit($noticia->conteudo, 100, '...') !!}</td>
				<td>{{$noticia->fonte}}</td>
				@if($noticia->destaque == 0)
				
					<td>Não</td>
				
				@else
				
					<td>Sim</td>
				
				@endif
				<td>{{$noticia->created_at}}</td>
				<td>{{$noticia->updated_at}}</td>
				<td>
					<div class='btn-group'>
					<a href='noticias/{{$noticia->id}}/remove' class='btn btn-danger'>Remover</a>
					<a href='noticias/{{$noticia->id}}/edit' class='btn btn-warning'>Editar</a>
						<!-- Link de upload de imagens -->
					<a href='imagens/{{$noticia->id}}/create' class='btn btn-primary'>Upload de imagem</a>
						<!-- Link de upload de Galeria imagens -->
					<a href='galeria_imagens/{{$noticia->id}}/create' class='btn btn-default'>Criar Galeria</a>	
					<a href='noticias/{{$noticia->id}}/show' class='btn btn-info'>Pré-visualizar</a>
					
					
					
					
					</div>
				</td>
			</tr>
		@endforeach	
		</tbody>
	</table>
	<div class='container'>
	
</div>

<!-- botões de ir para 'pagina anterior' e 'próxima pagina' -->
	<div class='container' style='text-align:center'>
		<span>{{ $noticias->links() }}</span>
	</div>



@endsection