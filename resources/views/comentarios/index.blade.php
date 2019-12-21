@extends('layouts.app')

@section('content')
<div class='container'>
	<div class='row'>
		<div class='col-xs-2 col-md-2 col-sm-2 col-lg-2'></div>
		<div class='col-xs-12 col-sm-12 col-md-12 col-lg-12'>
		
		<!-- verifica se existe comentarios -->
		@if(empty($comentarios))
			<script>window.alert('Ainda não possui comentarios')</script>
			<a href='/home' class='btn btn-info'>
				<i class='glyphicon glyphicon-home'></i>
				Voltar para a pagina anterior
			</a>
		<!-- Se possuir comentarios exibe a tabela de comentarios -->
		@else
			<!-- Tabela de Comentários -->
		<a href='/home' class='btn btn-info'>
				<i class='glyphicon glyphicon-home'></i>
				Voltar para a pagina anterior
			</a>
			<table class='table table-striped table-hover table-bordered table-responsive'>
				<h3 style='text-align: center; background-color: #010101;
					color: #fff; margin-bottom: 0%'>Novos Comentários</h3>
				<tr>
				<thead>
					
						<th>Nome</th>
						<th>Comentario</th>
						<th>Noticia</th>
						<th>Ações</th>
										
					
				</thead>
				</tr>
				@foreach($comentarios as $comentario)
					
				<tr>				
				<tbody>
					
				
						<td>{!! $comentario->nome !!}</td>
						<td>{!! $comentario->comentario!!}</td>
						
						<td>
							@foreach($noticias as $noticia)
								@if($noticia->id == $comentario->id_noticia)
									{{$noticia->titulo}}
								@endif
							@endforeach
						</td>
							
							
						
						
						<td>
							<a class='btn btn-danger' href='/comentarios/{{$comentario->id}}/remove'>Remover</a>
						</td>
						
				
					</tbody>
				</tr>
				
				@endforeach
			</table>
		
		@endif
		
		
		</div>
		<div class='col-xs-2 col-md-2 col-sm-2 col-lg-2'></div>
	</div>
</div>

@endsection