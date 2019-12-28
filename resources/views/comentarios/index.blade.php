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
			<tr>
				<h3 style='text-align: center; background-color: #010101;
					color: #fff; margin-bottom: 0%'>
						Novos Comentários
				</h3>
			</tr>
				<tr>
				<thead>
					
						<th>Nome</th>
						<th>Comentario</th>
						<th>Noticia</th>
						<th>Data/Hora</th>
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
							<?php echo date('d/m/Y H:i:s', strtotime($comentario->created_at)); ?>
						</td>
							
						
						
						<td>
							<div class='btn-group'>
							<a class='btn btn-danger' href='/comentarios/{{$comentario->id}}/remove'>
								<i class='glyphicon glyphicon-trash'></i>
									Remover
							</a>
							<a class='btn btn-info' href='#x' data-toggle='modal' data-target='#modalExample'>
									<i class='glyphicon glyphicon-eye-open'></i>
										Visualizar
							</a>
							
							<!-- Janela modal de visualização dos comentarios -->
							<div class='modal fade' id='modalExample' tabIndex='-1' role='dialog' aria-labelledby='exampleModalLabel'
								aria-hidden='true'>
								<div class='modal-dialog' role='document'>
									<div class='modal-content'>
										<div class='modal-header'>
											<h5 class='modal-title' id='exampleModalLabel'>Visualizador de comentários</h5>
											<button type='button' class='close' data-dismiss='modal' aria-label='x'>
												<span aria-hidden='true'>&times;</span>
											</button>
											
											<div class='modal-body'>
												@foreach($comentarios as $c)
													@if($comentario->id == $c->id)
														{{$c->comentario}}
													@endif
												@endforeach
											</div>
											
											<div class='modal-footer'>
												<div class='btn-group'>
													<button type='button' class='btn btn-secondary' data-dismiss='modal'>Fechar</button>
													<!--<button type='button' class='btn btn-primary'>Salvar</button>-->
												</div>
											</div>
										</div>
									</div>
								</div>
								
							</div>
							</div>
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