@extends('layouts.app')

@section('content')
  
  <!-- Códigos Bootstrap 4 -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" 
			integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" 
																		crossorigin="anonymous">
		<!-- Icones do bootstrap 4 (fontawesome, poderia user o google material design tambem) -->
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
		
		<!--Scripts do Bootstrap 4 -->
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
			integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" 
			integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" 
		integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  
  
<!-- Script de Anucios Do google (este foi usado para validar o adsense -->
	<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
		

<!-- Carrossel -->
	<!-- conteudo do Banner -->
	<nav>
		<div class='container' >
			<div class='row'>
				<div class='col-12'>
					<img src='../../img/icon/8.01.png' class='img-fluid' style='width: 100%; max-width: 100%;'>
					<img src='../../img/icon/84.bmp' class='img-fluid' style='width: 45%; min-width: 110px;
							margin-top: -8.5%; margin-left: 25%; opacity: 0.9'>
				</div>
			</div>
		</div>
	</nav>
	<br>
	

<!-- Div das notícias -->
<nav>
	<div class='container'>
		<div class='row'>
			<div class='col-3'></div>
			<div class='col-6 shadow p-1 mb-3 rounded' style='border:1px solid #ddd'>
					<!-- Container das noticias TITULO -->
			
				
				<h4 style='font-size: 1.6rem; text-shadow: 1px 1px #ccc; color: #1c1c1c; text-align: center;'>
					<p style='text-align: center'>{{$noticias->titulo}}</p>
				</h4>
				<hr>
				
				<p style=' text-align: center; color: #000'>
				<!-- loop que percorre a tabela de imagens -->
				@foreach($imagens as $imagem)
				<!-- Se a id da nioticia for igual ao da id_noticia da tabela imagens
						exibe imagem da notiica -->
					@if($noticias->id == $imagem->id_noticia)
					<a href="{{$imagem->nome_imagem}}">
						<img src='/{{$imagem->nome_imagem}}' alt='{{$imagem->nome_imagem}}' style='width: 70%'
									class='img-thumbnail img-fluid'>
					</a>
				@endif
						
							
				@endforeach
				</p>
				
				<div style='font-size: 1.2rem'>
					<!-- Conteudo da noticia -->
						{!! $noticias->conteudo !!}
				</div>
				<hr>
				<div>
				<!-- área da galeria de imagens -->
					<p style='font-size: 1.2rem; text-align: center;'><b>Fotos:</b></p>
						<div align='center' class='container' style='height: 1%; width: 90%;'>
						
				<!-- loop que percorre a tabela de galeria de imagens -->
					
						<div id='caroulselExampleControls' class='carousel slide' data-ride='carousel'>
							<div class='carousel-inner'>
								
								<div class='carousel-item active'>
										
								</div>
								@foreach($galeria_imagens as $galeria_imagem)
									@if($galeria_imagem->id_noticia == $noticias->id)
									<div class='carousel-item'>
										<a href='/storage/galeria_imagens/{{$galeria_imagem->nome_imagem}}'>
											<img align='center' src='../../../storage/galeria_imagens/{{$galeria_imagem->nome_imagem}}' 
												class='img-fluid img-thumbnail' alt='{{$galeria_imagem->nome_imagem}}' 
														style=''>
										</a>	
									</div>
								@endif
								@endforeach
							</div>
							
						</div>
						<!--
								<a href='/storage/galeria_imagens/{{$galeria_imagem->nome_imagem}}'>
									<img class='img-thumbnail' src='/storage/galeria_imagens/{{$galeria_imagem->nome_imagem}}' 
										alt='{{$galeria_imagem->nome_imagem}}' style='height: 6%; width: 20%; 
												position: relative; display: inline-block; padding: 0%;'>
								</a> -->		
						
					
						</div>
				</div>
				<hr>
				<!-- Botoes de compartilhamento -->
				<div class='display: inline-block' style='font-size: 1.4rem' align='center'>
					<a href='/noticias/{{$noticias->id}}/modal'>
							<i class='fas fa-envelope'></i>
								Compartilhar Por Email
					</a>
					|
					<div class="fb-share-button" data-href="http://tpadua.aliastpadua.com.br/noticias/{{$noticias->id}}/show/"
							data-layout="button" data-size="small">
							<a target="_blank" 
							href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Ftpadua.aliastpadua.com.br%2Fnoticias%2Fshow&amp;src=sdkpreparse"
									class="fb-xfbml-parse-ignore">Compartilhar No Facebook</a>
					</div>
				
				</div>
				<hr>
				<div class="container-footer" style='text-align: center'>
					<p style='font-size: 1.2rem'>
					<b>Fonte:</b> {{$noticias->fonte}}
					|
					<b>Data:</b> <?php echo date('d-m-Y', strtotime($noticias->created_at));	?>
					|
					<b>Hora:</b> <?php echo date('H:i:s', strtotime($noticias->created_at));	?>
					|
					<b>Atualizado:</b> <?php echo date('d-m-Y', strtotime($noticias->updated_at));	?>
					|
					<b>Hora:</b><?php echo date('H:i:s', strtotime($noticias->created_at));	?>
					</p>
				</div>
			
				</div>
				<hr>
</div>
<br>


			<!-- Newsletter -->
			<div class='col-3' >
				
			</div>
</div>
<br>
<br>
<br>
<br>
<br>
<br>

	<div class='container'>
		<div class='row'>
			<div class='col-2 shadow p-1 mb-3 rounded' style='margin-top: -65%; position: absolute; border: 1px solid #ddd; padding: 0%'>
				<p class='h4' style='font-size: 0.9rem; text-align: center'>
								<strong>NewsLetter</strong>
				</p>
				<hr>
					<!-- conteudo da div (newsletter) -->
					<p style='font-size: 0.8rem; text-align:center; margin-top: 0%'>
						Assíne a nossa <b style='text-decoration: underline; color: red'>Newsletter</b>
						e fique por dentro de nossas atualizações.
						
					<br>
				
						<a style='font-size: 0.8rem; width: 90%; padding: 1%; margin-left: 1.5%' href='newsletter' class='btn btn-sm btn-success'>Assínar</a>
							
					</p>
			</div>
		</div>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
	
			
			<div class='row'>
				
			<div class='col-2 shadow p-1 mb-3 rounded' style='margin-top: -65%; position: absolute; border: 1px solid #ddd; padding: 0%'>
				<!-- Titulo da div (Parceiros) -->
				<h5 style='font-size: 1.2rem; text-align: center'>Parceiros</h5>
				<hr>
				<!-- conteudo da div -->
				<ul class='list-group' style='list-style-type: none; display: inline-block;'>
							@foreach($imagem_parceiros as $imagem_parceiro)
								@foreach($parceiros as $parceiro)
									@if($parceiro->id == $imagem_parceiro->id_parceiro)
										<li class='group-item'>
											<a href='{{$parceiro->url}}'>
												<img src='../../../storage/{{$imagem_parceiro->nome_imagem}}'
													style='min-width: 20px; width: 30%; position: relative;
														 box-shadow: -1px -2px; padding: 1%;' 
															class='rounded-circle img-fluid' alt='{{$parceiro->nome_parceiro}}'>
											</a>
										</li>
								
									@endif
								@endforeach
						@endforeach
					
				</ul>
				<hr>
				<a style='min-width: 10px; width: 95%; padding: 0%;
						margin-left: 2%; margin-top: -5%' href='parceiros/create'
							class='btn btn-success btn-sm'>Assínar
							
					</a>
			</div>
		</div>
		<br>
	</div>	



<!-- Div dos Comentários -->
<nav>
	<div class='container'>
		<div class='row'>
			<div class='col-3'></div>
			<div class='col-6'>
				<!-- Cabeçalho dos comentários -->
				<h4 align='center'>Comentarios:</h4>
				<br>
				<!-- Loop que percorre a tabela de comentários -->
							@foreach($comentarios as $comentario)
								@if($comentario->id_noticia == $noticias->id)
									<p align='center' style='font-size: 1.6rem'>{{$comentario->comentario}}</p>
									
									
									<br>
									
									
									<p align='center' style='font-size: 1.2rem'>
										<b>Autor:</b> {{$comentario->nome}}
										<b>Data/hora:</b>  <?php echo date('d-m-Y H:i:s', strtotime($comentario->created_at)); ?> 
										
									</p>
									
									<hr>
								@endif
							@endforeach
				
				<div class='nav nav-tabs' id='nav-tab' role='tablist'>
				<!-- TAB de comentários comuns do sistema -->
					<a class='nav-item nav-link active' id='nav-comentarios-tab' data-toggle='tab' href='#nav-comentarios'
						role='tab' aria-controls='nav-comentarios' aria-selected="true"	style='font-size: 1.2rem'>
												Comentar
					</a>
					<!-- TAB de comentários do facebook -->
					<a class='nav-item nav-link' id='nav-facebook-tab' data-toggle='tab' href='#nav-facebook' 
						role='tab' aria-controls='nav-facebook' aria-selected='false' style='font-size: 1.2rem'>
												Facebook
					</a>
				</div>
			</div>
			<!-- Div Vázia para criar espaçamento -->
			<div class='col-3'></div>
		</div>
	</div>
	
</nav>
<!-- Área de exibição dos comentários -->
<div class='container'>
	<div class='row'>
	<!-- Div de espaçamento -->
		<div class='col-3'></div>
			<!--  Área de exibição dos comentários comuns -->
			<div class='col-6 tab-content' id='nav-tabContent'>
				<div class='tab-pane fade show active' id='nav-comentarios' 
					role='tabpanel' aria-labelledby='nav-comentarios-tab' style='display: inline-block'>
							<h5 align='center'>Comentarios:</h5>
							<br>
							
							
							{!! Form::open(['url' => "comentarios/{$noticias->id}/store", 'method' => 'POST'])!!}
							
							<div class='form-group'>
								<h3>Comentar</h3>
									<hr>
									{!! Form::label('nome', 'Nome:') !!}
										{!! Form::text('nome', null, ['class' => 'form-control-sm'])!!}
							</div>
							<div class='form-group'>
							{!! Form::label('comentario', 'Comentario:') !!}
							<br>
							{!! Form::textarea('comentario', null, ['class' => 'form-control-sm'])!!}
							</div>
							
							<div class='form-group'>
							{!! Form::hidden('id_noticia', $noticias->id)!!}
							{!! Form::submit('submit', ['class' => 'btn btn-sm btn-primary'])!!}
							</div>
						{!! Form::close()!!}
							
				</div>
				<!-- área de exibição dos comentários do facebook -->
				<div class='tab-pane fade' id='nav-facebook' id='nav-facebook'
						role='tabpanel' aria-labelledby='nav-facebook-tab'>
							<div id="fb-root"></div>
								<script async defer crossorigin="anonymous" 
									src="https://connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v5.0">
								</script>
							<div class="fb-comments" 
								data-href="http://tpadua.aliastpadua.com.br/noticias/&#123;&#123;$noticia-&gt;id&#125;&#125;/show" 
									data-width="500" data-numposts="5" data-mobile='true'>
							</div>
				</div>
			</div>
			</div>
		</div>

	
	


		
		<div class='container-footer' style='background-color: #080808'>
			<div class='row'>
					<div class='col-2'>
						<a href='/'>
								<img src='../../img/icon/TPaduaDefault.bmp' 
										style='min-width: 65px; width: 80%'
											alt='aliastpadua.com.br' class='img-fluid img-responsive'>
							</a>
					</div>
					<!-- coluna vazia para criar o espaçamento entre os icones
							default e os de midias sociais -->
					<div class='col-6' >
							
					</div>
					<div class='col-4' align='right' style='padding-right: 5%'>
						
							<a href='https://www.facebook.com/profile.php?id=100003206947030'><img src='../../img/icon/social_medias/facebook.png'
										alt='facebook' class='img-fluid' style='min-width: 22px;
												width: 10%'>
							</a>
							|
							<a href=''><img src='../../img/icon/social_medias/Instagram.png'
										alt='instagram'  class='img-fluid' style='min-width: 22px; width: 10%'>
							</a>
							|
							<a id='wpp' href='/' data-toggle="tooltip" data-placement="top" title="(61) 8481-5924">
								<img src='../../img/icon/social_medias/whats.png' alt='Whatsapp' 
										class='img-fluid' style='min-width: 22px; width: 10%'>
									<p id='wppNumber' class='hidden'>(61) 8481-5924</p>
							</a>
							
							<style>
								a #wppNumber{
									display: none;
								}
								a:hover #wppNumber{
									font-size: 0.8rem;
									display: inline-block;
									color: #fff;
								}
							</style>
						
					</div>
					
				</div>
			</div>
</nav>
@endsection

