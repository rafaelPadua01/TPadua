<!doctype>
<html>
	<head>
		<meta charset='utf-8'>
		 <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>@liásTPadua.com.br - O informativo do Distrito Federal e região</title>
		
																		
																		
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
	
		<!-- script facebook,Novo botão compartilhar
				Agora com contador de compartilhamentos 
		-->
		<div id="fb-root"></div>
		<script async defer crossorigin="anonymous" src="https://connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v5.0"></script>
	</head>
	
	<body style="background-image: url('../../img/icon/earth3.jpg')">
		<div class='container'>
			<div class='row'>
				<div class='col-12 navbar nav-bar-expand bg-dark navbar-dark' style='width: 100%'>
					<!-- Navbar Responsiva, toggle -->
					
						<!-- Brand (link para pagina inicial e imagem padrão)  -->
						<a class="navbar-brand" href='/'><img src='../../img/icon/TPaduaDefault.bmp' class='img-responsive' style='width: 90%'></a>
						
						<!-- Formulário de Busca por categorias -->
							<form class='navbar-form navbar-left' action='categorias/search' style='margin-top: 1%'>
								<div class='input-group'>
									<input type='text' name='search' class='form-control'
										placeholder='Categorias ex:(Artigos)' style='background-color: 	#F5FFFA;'>
									<div class='input-group-append'>
										<button class='btn btn-sm btn-info' type='submit'>
											<i class='fa fa-search'></i>
										</button>
									</div>
								</div>
							</form>
						
						
						<!-- toggle e collapse button -->
						<button class='navbar-toggler' type='button' data-toggle="collapse" data-target="#collapsibleNavbar">
							<span class='navbar-toggler-icon'></span>
						</button>
						

						
						<!-- Links da Barra de Navegação -->
						<div class='collapse navbar-collapse' id='collapsibleNavBar'>
							<ul class='navbar-nav'>
								<li class='dropdown nav-item'>
									<a class='dropdown-toggle nav-link' data-toggle='dropdown' href='#'>
										Categorias<span class='carret'></span>
									</a>
									
									<!-- Item do dropdow de categorias -->
									<ul class='dropdown-menu'>
										@foreach($categorias as $categoria)
											<li>
												<a href="categorias/{{$categoria->id}}/show">
													{{$categoria->nome_categoria}}
												</a>
											</li>
										@endforeach
									</ul>
								</li>
								<li class='nav-item'><a href='sobre' class='nav-link'>Sobre o Tarcisio Pádua</a></li>
								<li class='nav-item'><a href='contacts' class='nav-link'>Fale com a gente</a></li>
							</ul>	
							
						</div>
						
						
				
				</div>
			</div>
			<!-- Div de espaçamento -->
			<div class='row'></div>
			<br>
			<!-- Div do Banner -->
			<div class='row'>
				<div class='col-12 shadow p-1 mb-3 rounded' style="">
				
					<img src='../../img/icon/Banner/background.png' class='img-fluid' style='width: 100%; max-width: 100%;'>
					<a href='/'>
						<img src='../../img/icon/Banner/textoPrincipal.png' class='img-fluid' style='width: 70%; min-width: 110px;
							margin-top: -13%; margin-left: 15%; opacity: 0.8'>
					</a>
					<a href='#' alt='tpadua7@gmail.com'>
							<img src='../../img/icon/Banner/textoEmail.png' class='img-fluid' style='width: 70%; min-width: 110px;
							margin-top: -18%; margin-left: 30%; opacity: 0.8'> 
					</a>
				</div>
			</div>
			<!-- Div de espaçamento -->
			<div class='row'></div>
			
			<!-- div espacamento -->
			<div class='row'></div>
			<br>
			
			<!-- Div dos Videos informativos -->
			<div class='row'>
				<div class='col-3 shadow p-1 mb-3 rounded' style='height: 500px; position: relative; background-color: #080808; opacity: 0.9' id='overflowA'>
				  <!-- Style com Overflow, adiciona scrollbar na div -->
				<style>
					div #overflowA
					{
						height: 500px;
						overflow: auto;
					}
				</style>
					<!-- Titulo da área informativo -->
					<h5 align='center' style='font-size: 0.8rem; color: #fff; opacity: 1'>
						<i class="fas fa-video" style='font-size: 0.6rem'></i>
							<strong style='font-size: 0.6rem; text-align: center'>Informativo</strong>
					</h5>
					<hr style='background-color: #fff'>
					@foreach($videos as $video)
						<h5 style='font-size: 0.5rem; text-align: center; color: #fff'>
							{{$video->titulo}}
						</h5>
					
						<div style='min-width: 6rem; margin-left: -1%' class="embed-responsive embed-responsive-16by9">
							<video style='margin-left: -3%' class='embed-responsive-item' autoplay="none" allowfullscreen controls>
							<source src='/storage/videos/{{$video->nome_arquivo}}'>	
							
						</div>
						<br>
						<h6 align='center' style='font-size: 0.6rem; color: #fff'><strong>Descrição:</strong></h6>
						<p align='center' style='font-size: 0.5rem; opacity: 0.8; color: #fff;'>{{$video->descricao}}</p>
						<hr style='background-color: #fff'>
					@endforeach
				
				</div>
				<br>
				
				<!-- Div Das Noticias -->
				<div class='col-6 shadow p-1 mb-2 rounded' style='background-color: #DCDCDC; opacity: 0.8; border: 1px solid #ddd'>
				<!-- Loop que percorre tabela de noticias -->
				  @foreach($noticias as $noticia)
						<div id="fb-root"></div>
						
						<!-- Titulo da notícia -->
						<!-- Verifica se a noticia está em dastaque ou não -->
					@if($noticia->destaque >= 1)
						<!-- se estive como destaque, exibe o titulo com a bandeira -->
						<h4 style='font-family: arial, sans-serif; text-shadow: 1px 1px #ccc; color: #1c1c1c;'>
								<!--Código da Bandeira de Destaque -->
									<!-- titulo da noticia -->
									<p style='text-align: center; font-size: 0.7rem'>
										<span class='far fa-bookmark'
										style='font-size: 0.9rem; color: red' alt='Destaque'></span>
														
										<strong>{{$noticia->titulo}}</strong>
									</p>
						</h4>
						<hr>
					@else
						<!-- Se não passar na verificação dos destaques exibe apenas o titulo da notícia -->
						<h4 style='font-size: 0.7rem; font-family: arial, sans-serif; text-shadow: 1px 1px #ccc; color: #1c1c1c; text-align: center;'>
								
							<p style='text-align: center'>{{$noticia->titulo}}</p>
						</h4>
						<hr>
					@endif
					
					<!-- Exibe imagens das noticias -->
					<p style='font-family: arial; sans-serif; text-align: center; color: #000; font-size: 100%'>
						<!-- loop que percorre a tabela de imagens -->
					@foreach($imagens as $imagem)
					<!-- Se a id da nioticia for igual ao da id_noticia da tabela imagens
						exibe imagem da notiica -->
					@if($noticia->id == $imagem->id_noticia)
						<a href="{{$imagem->nome_imagem}}" align='center'>
							<img src='{{$imagem->nome_imagem}}' alt='{{$imagem->nome_imagem}}' style='width: 70%; 
								margin-left: 15%;' class='img-thumbnail img-fluid'>
						</a>
					@endif
						
							
				</p>
				@endforeach
				<!-- Conteudo da noticia -->
					<?php echo "<div style='font-size: 0.6rem'><p>".(str_limit($noticia->conteudo, 501, '...'))."</p></div>" ?>
				
				<!-- Link Leia Mais -->
				<p align='center' style='font-size: 0.6rem'>
					<a href='noticias/{{$noticia->id}}/show' class='btn btn-link' style='font-size: 0.7rem'>
						<span class='fas fa-eye' style='font-size: 0.8rem'> </span>
									Leia mais
					</a>
				</p>
				
					<a href='noticias/{{$noticia->id}}/modal' style='font-size: 0.6rem' align='center'>
							<i class='fas fa-envelope'></i>
								Compartilhar Por Email 
					</a>
				
					|
					<!-- Botão de compartilhamento do facebook -->
					<div class="fb-share-button" 
						data-href="http://tpadua.aliastpadua.com.br/noticias/&#123;&#123;$noticia-&gt;id&#125;&#125;/show"
							data-layout="button_count" data-size="small" data-mobile='true'>
							<a target="_blank" style='font-size: 0.6rem'
								href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Ftpadua.aliastpadua.com.br%2Fnoticias%2F%257B%257B%24noticia-%3Eid%257D%257D%2Fshow&amp;src=sdkpreparse"
									class="fb-xfbml-parse-ignore">
										Compartilhar
							</a>
					</div>
					
					<hr>
					<p style='background-color: #ccc; font-size: 0.5rem' align='center'>
					<b>Fonte:</b> {{$noticia->fonte}}
					|
					<b>Data:</b> <?php echo date('d-m-Y', strtotime($noticia->created_at));	?>
					|
					<b>Hora:</b> <?php echo date('H:i:s', strtotime($noticia->created_at));	?>
					<br>
					<b>Atualizado:</b> <?php echo date('d-m-Y', strtotime($noticia->updated_at));	?>
					|
					<b>Hora:</b><?php echo date('H:i:s', strtotime($noticia->created_at));	?>
					</p>
					<hr>
				@endforeach
					
				</div>
				
			
				<!-- Div da arte e cultura -->
				<div class='col-3 shadow p-1 mb-3 rounded' style='float: right; background-color: #080808; 
						opacity: 0.9; border: 1px solid #ddd; position: relative' id='overflowA'>
					<style>
						div #overflowA
						{
							height: 500px;
							overflow: auto;
						}
					</style>
			
			<!-- Titulo, cabeçalho dos eventos -->
				<h6 style='font-size: 0.6rem; color: #fff; text-align:center;'>
						<i style='' class='fas fa-calendar-week'>
							
						</i>
								<strong> Arte e Cultura</strong>
				</h6>
				<hr style='background-color: #fff'>
				@foreach($eventos as $evento)
						<p style='font-size: 0.5rem; text-align: center; color: #fff'><strong>{{$evento->nome_evento}}</strong></p>
						
						<!-- div que cria as imagens e o efeito de zoom -->
						<div class='img-zoom'>
					@foreach($imagem_eventos as $imagem_evento)
								@if($imagem_evento->id_evento == $evento->id )
									<!-- Animação de Zoom nas imagens dos eventos-->
									<style>
										.img-zoom img
										{
											transition: all 0.5s ease;
										}
										.img-zoom img:hover	 
										{
											-webkit-transform: scale(1.5);
											-moz-transform: scale(1.5);
											-o-transform: scale(1.5);
											-ms-transform: scale(1.5);
											transform: scale(1.5);
											
										}
									</style>
									<a href="{{$imagem_evento->nome_imagem}}"> 
										<img src='/{{$imagem_evento->nome_imagem}}'
											alt='{{$imagem_evento->nome_imagem}}' style='margin-left: 10%; width: 80%'
												class='img-thumbnail img-fluid'>
									</a>
									
								@endif
						@endforeach	
						</div>
							<p style='font-size: 0.5rem; background-color: #080808; opacity: 0.5;
									position: relative; color: #fff'>
									{{$evento->descricao_evento}}
							</p>
								
							<br>
							
									
							<p style='display: inline-block; font-size: 0.5rem; color: #fff'>
								<b>Data:</b> <?php echo date('d-m-Y', strtotime($evento->data_evento));?>
								|
								<b>Hora:</b> <?php echo date('H:i:s', strtotime($evento->hora_evento));?>
							</p>
							<hr style='background-color: #fff'>
									
					@endforeach
					
					<a href='eventos/show' style='font-size: 0.7rem; color: #fff'>
										<p style='text-align: center'>
											<span class='fas fa-plus'></span>
												<strong>Veja Mais</strong>
										</p>
									</a>	
				
				</div>
			</div>
			
			<!-- Row vazia de Newsletter -->
			
			<div class='row'>
				<div class='col-3 shadow p-1 mb-3 rounded' style='height: 90px; margin-top: -100%; position: relative; 
						background-color: #fff; opacity: 0.8; padding: 0%'>
						<h5  style='font-size: 0.6rem; text-align: center'>
							<i class='fas fa-envelope-open-text' style='font-size: 0.8rem'></i>
								<strong>NewsLetter</strong>
						</h5>
					<hr>
					<!-- conteudo da div (newsletter) -->
					<p style='font-size: 0.4rem; text-align:center;'>
						<strong>Assíne a nossa <b style='text-decoration: underline; color: red'>Newsletter</b>
						<br>
						e fique por dentro de nossas atualizações.</strong>
						
					
				
						<a style='font-size: 0.5rem; width: 90%; padding: 1%; margin-left: 1.5%' href='/signature' class='btn btn-sm btn-success'>Assínar</a>
							
					</p>
					
			</div>
			</div>
			
			<!-- Div Vazia para espaçamento-->
	
			<div class='row'>
				<div class='col-2'></div>
			</div>
			<div class='row'>
			<div class='col-3 shadow p-1 mb-3 rounded' style='height: 125px; background-color: #fff; margin-top: -70%;
					position: relative; padding: 10%; opacity: 0.7'>
					<!-- Titulo da div (Parceiros) -->
				<h5 style='font-size: 0.6rem; text-align: center'>
					<i class='fas fa-handshake' style='font-size: 0.8rem'></i>
						<strong>Parceiros</strong>
				</h5>
				<hr>
				<!-- conteudo da div -->
				<ul class='list-group' style='list-style-type: none; display: inline-block;'>
							@foreach($imagem_parceiros as $imagem_parceiro)
								@foreach($parceiros as $parceiro)
									@if($parceiro->id == $imagem_parceiro->id_parceiro)
										<li class='group-item'>
											<a href='{{$parceiro->url}}'>
												<img src='storage/{{$imagem_parceiro->nome_imagem}}'
													style='min-width: 8px; width: 12%; position: relative;
														 box-shadow: -1px -2px; padding: 0%;' 
															class='rounded-circle img-fluid' alt='{{$parceiro->nome_parceiro}}'>
											</a>
										</li>
								
									@endif
								@endforeach
						@endforeach
					
				</ul>
				<hr>
				<a style='min-width: 10px; width: 90%; padding: 0%; font-size: 0.7rem;
						margin-left: 5%; margin-top: -5.5%; position: relative' href='parceiros/create'
							class='btn btn-success btn-sm'>Assínar
							
					</a>
				</div>
			</div>
			<br>
			
				<!-- Script adsense google -->
			
			<div class='row'>
			
				<!-- Script Addsense Google -->
				<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
				<!-- tpadua -->
				<ins class="adsbygoogle"
					style="display:block"
					data-ad-client="ca-pub-3091231814546323"
					data-ad-slot="3360035635"
					data-ad-format="auto"
					data-full-width-responsive="true"></ins>
				<script>
					(adsbygoogle = window.adsbygoogle || []).push({});
				</script>
			</div>
			
			
			<div class='row'>
				<div class='col-2'></div>
				
				<div class='col-4' align='center'>
					<!-- Links de Páginação -->
					<div class='col-2'></div>
					<!-- Links de Páginação -->
					
						<div class='col-6' align='center'>
							<p align='center'>{{$noticias->onEachSide(1,4)->links()}}</p>
						</div>
					<div class='col-4'></div>
					
				</div>
				
			<div class='col-2'></div>
			
		</div>
	
				
				<div class='col-2'></div>
				
			
			
			
				
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
					<div class='col-2' >
							
					</div>
					<div class='col-4' >
							<p align='center' style='color: #D3D3D3; font-size: 0.5rem'>
								<strong>Equipe AliasTPadua:</strong>
								<br>
									<a href='#' style='color: #fff'>Desenvolvido por <strong>Rafael Ferreira Pádua</strong></a>
									<br>
									Todos os direitos Reservados
							</p>
							
							
							
					</div>
					<div class='col-4' align='right' style='padding-right: 5%'>
						
							<a href='https://www.facebook.com/profile.php?id=100003206947030'>
								<img src='../../img/icon/social_medias/facebook.png'
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
	</body>
</html>