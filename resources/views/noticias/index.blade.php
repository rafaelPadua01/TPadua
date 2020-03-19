@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3"></div>
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<h1 align='center'>Noticias</h1>
			<hr>
			<div class="btn-group">
				<a href='/home' class='btn btn-info'>
				<i class='glyphicon glyphicon-home'></i>
					Página Inicial
				</a>
				<!-- Cadastro de Noticia -->
				<a href="/noticias/create" class="btn btn-primary">Nova Notícia</a>
				<!-- Formulario com input de busca (search) -->
				<form class='navbar-form navbar-left' action='noticias/search'  style="margin-top: 0%">
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
			</div>
			<!-- Tabela -->
			<div class='table-responsive table-sm'>
				<table class="table table-striped table-hover table-bordered">
					
					<thead>
						<tr>
							<th scope="col">Id</th>
							<th scope="col">Categoria</th>
							<th scope="col">Usuario</th>
							<th scope="col">Titulo</th>
							<th scope="col">Conteudo</th>
							<th scope="col">Fonte</th>
							<th scope="col">Destaque</th>
							<th scope="col">Data de criação</th>
							<th scope="col">Date de Atualização</th>
							<th scope="col">Mídias</th>
							<th scope="col">Ações</th>
						</tr>
					</thead>
					<tbody>
						@foreach($noticias as $n)
							<tr>
								<th scope="row">{{$n->id}}</th>
								<!-- Div das Categorias -->
								<td>
								@foreach($categorias as $c)
									@if($c->id == $n->id_categoria)
										{{$c->nome_categoria}}
									@endif
								@endforeach
								</td>
								<!--TD Usuarios Author do post -->
								<td>
									@foreach($users as $user) 
										@if($user->id === $n->id_user)
											<p>{{$user->name}}</p>
										@endif
									@endforeach
								</td>
								<!-- Td Do Titulo -->
								<td>
									<p>{!! str_limit($n->titulo, 50, '...') !!}</p>
								</td>
								<!-- Td Conteudo -->
								<td>
									<p>{!! str_limit($n->conteudo, 50, '...') !!}</p>
								</td>
								
								<!-- Td Fonte -->
								<td>
									<p>{{$n->fonte}}</p>
								</td>
								<!-- Destaque -->
								
									@if($n->destaque == 0)
				
										<td><p>Não</p></td>
			
									@else
			
										<td><p>Sim</p></td>
			
									@endif
								<!-- Data de Criação-->
								<td>
									<p>{{$n->created_at}}</p>
								</td>
								<!-- Atualização -->
								<td>
									<p>{{$n->updated_at}}</p>
								</td>
								<!-- Midias -->
								<td>
									<div class="btn-group">
									<!-- Link de upload de imagens -->
									<a href='imagens/{{$n->id}}/create' class='btn btn-primary'>Upload imagem</a>
									<!-- Link de upload de Galeria imagens -->
									<a href='galeria_imagens/{{$n->id}}/create' class='btn btn-default'>Upload Galeria</a>
									</div>
								</td>
								<!-- td Ações -->
								<td>
									<div class='btn-group' style="padding: 2%; margin: 0%">
										<a href='noticias/{{$n->id}}/edit' class='btn btn-warning'>Editar</a>
										<a href='noticias/{{$n->id}}/remove' class='btn btn-danger'>Remover</a>
									</div>
								</td>
							</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
		<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3"></div>
	</div>
</div>

<!-- botões de ir para 'pagina anterior' e 'próxima pagina' -->
	<div class='container' style='text-align:center'>
		<span>{{ $noticias->links() }}</span>
	</div>



@endsection