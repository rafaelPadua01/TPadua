@extends('layouts.app')

@section('content')
<div class='container'>
	<div class='row'>
		<div class='col-xs-2 col-sm-2 col-md-2 col-lg-2'></div>
		<div class='col-xs-12 col-sm-12 col-md-12 col-lg-12'>
			@if(empty($contacts_news))
				<script>window.alert('Ainda não recebemos nenhuma notícia')</script>
				<a href='/home' class='btn btn-info'>
					<i class='glyphicon glyphicon-home'></i>
					Voltar para a pagina anterior
				</a>
			@else
				<!-- exibe a tabela se houver ao menos uma nova notícia recebida -->
					
			<!-- Div Das noticias Enviadas -->
				<a href='/home' class='btn btn-info'>
					<i class='glyphicon glyphicon-home'></i>
					Voltar para a pagina anterior
				</a>
			<table class='table table-striped table-hover table-bordered table-responsive'>
				<h3 style='text-align: center; background-color: #010101;
					color: #fff'>Notícias Recebidas</h3>
				<thead>
					<tr>
						<th>ID</th>
						<th>Nome</th>
						<th>Email</th>
						<th>Noticia</th>
						<th>Data de Envio</th>
						<th>Ações</th>
					</tr>
				</thead>
				@foreach($contacts_news as $c_news)
				<tr>
				<tbody>
					
					
						<td>{!! $c_news->id !!}</td>
						<td>{!! $c_news->nome !!}</td>
						<td>{!! $c_news->email!!}</td>
						<td>{!! str_limit($c_news->noticia, 55, '...') !!}</td>
						<td>{!! $c_news->created_at !!}</td>
								
						<td>
							<a href='contacts_news/{{$c_news->id}}/show'>Visualizar</a>
							|
							<a href='contacts_news/{{$c_news->id}}/edit'>Editar</a>
							|
							<a href='contacts_news/{{$c_news->id}}/remove'>
								<i class='fas fa-trash'></i>
										Remover
							</a>
							|
									
						</td>
					
				</tbody>
				</tr>
				@endforeach
			</table>
			@endif
		</div>
		<div class='col-xs-2 col-sm-2 col-md-2 col-lg-2'></div>
	</div>
</div>

@endsection