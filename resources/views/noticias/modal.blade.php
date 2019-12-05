@extends('layouts.app')

@section('content')
	
	<nav>
		<div class='row'>
		<div class='col-xs-12 col-sm-12 col-md-12 col-lg-12'>
			<script src="https://cdn.ckeditor.com/4.12.1/standard/ckeditor.js"></script>
									
										<h4 style='text-align: center'>Compartilhar notícia por email ?</h4>
										{!! Form::open(['url' => "noticias/$noticias->id/sendmail", 'method' => 'get']) !!}
										
										
										<div class='form-group'>
											{!! Form::label('email', 'Email:')!!}
												{!! Form::email('email', null, ['class' => 'form-control-sm'])!!}
										</div>
										
										
										<div class='form-group'>
											{!! Form::label('assunto', 'Assunto:')!!}
												{!! Form::text('assunto', $noticias->titulo, ['class' => 'form-control-sm'])!!}
										</div>
										<div class='form-group'>
											<label>Noticia:</label>
											<br>
											<textarea name='conteudo' style='border: 1px solid #000'>
											<!-- Exibe a imagem -->
												<div class='row'>
													<div class='col-xs-12 col-sm-12 col-md-12 col-lg-12'>
													<h1>{!! $noticias->titulo !!}</h1>
													<hr>
													
													<br>
													@foreach($imagens as $imagem)
														@if($noticias->id == $imagem->id_noticia)
														<span>&nbsp </span>
														<span>&nbsp </span>		
														<span>&nbsp </span>		
														<span>&nbsp </span>
														<span>&nbsp </span>		
														<span>&nbsp </span>	
														<span>&nbsp </span>
														<span>&nbsp </span>		
														<span>&nbsp </span>		
														<span>&nbsp </span>
														<span>&nbsp </span>		
														<span>&nbsp </span>		
														<span>&nbsp </span>
														<span>&nbsp </span>		
														<span>&nbsp </span>	
														<span>&nbsp </span>
														<span>&nbsp </span>		
														<span>&nbsp </span>	
														<span>&nbsp </span>
														<span>&nbsp </span>		
														<span>&nbsp </span>		
														<span>&nbsp </span>
														<span>&nbsp </span>		
														<span>&nbsp </span>	
														<span>&nbsp </span>
														<span>&nbsp </span>		
														<span>&nbsp </span>	
														<span>&nbsp </span>
														<span>&nbsp </span>		
														<span>&nbsp </span>		
														<span>&nbsp </span>
														<span>&nbsp </span>		
														<span>&nbsp </span>	
														<span>&nbsp </span>
														<span>&nbsp </span>		
														<span>&nbsp </span>	
														<span>&nbsp </span>
														<span>&nbsp </span>		
														<span>&nbsp </span>		
														<span>&nbsp </span>
														<span>&nbsp </span>		
														<span>&nbsp </span>	
														<span>&nbsp </span>
														<span>&nbsp </span>		
														<span>&nbsp </span>	
														<span>&nbsp </span>
														<span>&nbsp </span>		
														<span>&nbsp </span>		
														<span>&nbsp </span>
														<span>&nbsp </span>		
														<span>&nbsp </span>	
														<span>&nbsp </span>
														<span>&nbsp </span>		
														<span>&nbsp </span>	
														<span>&nbsp </span>
														<span>&nbsp </span>		
														<span>&nbsp </span>		
														<span>&nbsp </span>
														<span>&nbsp </span>		
														<span>&nbsp </span>	
														<span>&nbsp </span>
														<span>&nbsp </span>		
														<span>&nbsp </span>	
														<span>&nbsp </span>
														<span>&nbsp </span>		
														<span>&nbsp </span>		
														<span>&nbsp </span>
														<span>&nbsp </span>		
														<span>&nbsp </span>	
														<span>&nbsp </span>
														<span>&nbsp </span>		
														<span>&nbsp </span>	
														<img src='/{{$imagem->nome_imagem}}' class='img-thumbnail' 
															style='width: 10%' alt='{{$imagem->nome_imagem}}'>
														@endif
													@endforeach
											<!-- Conteudo da noticia -->	
											<nav>
												<div class='row'>
													<div class='col-xs-12 col-md-12 col-sm-12 col-lg-12'>
														<p>
															<!-- Conteudo da noticia -->
															{!! str_limit($noticias->conteudo, 1000, '...') !!}
														</p>
													<div style='text-align: center;' class='col-sm-12 offset-md-3'>	
														<a href='http://tpadua.aliastpadua.com.br/noticias/{{$noticias->id}}/show' class='btn btn-link'>
															<span class='glyphicon glyphicon-eye-open'></span>leia Mais
															</a>
														</div>
													</div>
												</div>
											</nav>
											</textarea id='conteudo'>
											
											<!-- Script do Editor CKEDITOR para formatar o email -->
											 <script>
												CKEDITOR.replace( 'conteudo' );
												</script>
												</div>
											</div>
										</div>
										
										{!! Form::submit('Enviar', ['class' => 'btn btn-success']) !!}
										<a href='/' class='btn btn-default'>Voltar para o inicio</a>
										
										{!! Form::close()!!}
									
									</div>
								</div>
							</div>
						
	</nav>
@endsection