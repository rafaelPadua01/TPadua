<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>@liásTPadua.com.br - O informativo do Distrito Federal e região</title>
		
        <!-- Fonts -->
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
			<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
		
			<!-- Script de Anucios Do google (este foi usado para validar o adsense -->
			<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
			
			<!-- bootstrap 4 -->
			
		
		
        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0%;
			
            }
			@media only screen and (min-width: 360px, max-width: 1200px)
			{
				body
				{
					min-width: 360px;
					max-width: 1200px;
					min-height: 538px;
					
				}
				div 
				{
					min-width: 360px;
					margin-left: -20%;
				}	
				
			
			}
            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
			
			
        </style>
    </head>
    <body>
	 <!-- NavBar Responsiva -->
		<nav class='navbar navbar-inverse' id='navbar navbar-inverse' style='width: 100%;'>
		
			<div class='container-fluid'>
		
					<button type='button' class='navbar-toggle' data-toggle='collapse'
						data-target='#myNavbar'>
							<span class='icon-bar'></span>
							<span class='icon-bar'></span>
							<span class='icon-bar'></span>
						</button>
					
						
				</div>
				<a class="navbar-brand" href="/"><img src='../../img/icon/TpaduaDefault.bmp' 
					alt="@aliastpadua" style='margin-top: -8%;' class='img-responsive'></a>
				<div class='collapse navbar-collapse' id='myNavbar'>
				
					<ul class="nav navbar-nav">
					
						<!--<li class='active'><a href="#">Home</a></li>-->
						<li class='dropdown'>
							<a class='dropdown-toggle' data-toggle='dropdown' href='#'>Categorias 
								<span class="caret"></span></a>
								
								<!-- Menu Drop DOwn de Categorias -->
								<ul class="dropdown-menu">
								
								@foreach($categorias as $categoria)
									<li><a href="categorias/{{$categoria->id}}/show">
										{{$categoria->nome_categoria}}
										</a>
									</li>
								
								@endforeach
								
								</ul>
							</li>
						<li><a href='sobre'>Sobre o Tarcísio Pádua</a></li>
						<li><a href="contacts">Fale com a gente</a></li>
						<!--<li><a href="#">Page 3</a></li> -->
						
					</ul>
					
					<!-- Formulario com input de busca (search) -->
				<form class='navbar-form navbar-left' action='categorias/search'>
					<div class='input-group'>
						<input type='text' name='search' id='search' class='form-control' 
								placeholder='Buscar categoria(ex:Artigos)'>
								
						<div class='input-group-btn'>
							<button class='btn btn-default' type='submit'>
							<i class='glyphicon glyphicon-search'></i>
							</button>
						</div>
					</div>
				</form>
					
					<ul class="nav navbar-nav navbar-right">
						<!--<li><a href="#"><span class="glyphicon glyphicon-user">
									</span> Sign Up</a></li> -->
						<!-- itens de midia social --> 
						<!-- FACEBOOK-->
						
						<li>
							<a class="navbar-brand" href="#">
								<img src='../../img/icon/social_medias/facebook.png' 
									alt="@aliastpadua" style='height: 110%; margin-top: -12%;
										 border-radius: 20% 20%; padding: 0%; box-shadow: 3% 3% #ccc'
											class='img-responsive' alt='facebook'>
							</a>
							
						</li>
						
						<!-- Instagram -->
						<li>
							<a class="navbar-brand" href="#">
								<img src='../../img/icon/social_medias/Instagram.png' 
									alt="@aliastpadua" style='height: 100%; margin-top: -12%;
										 border-radius: 20% 20%; '
											class='img-responsive' alt='instagram'>
							</a>
						</li>
						<li>
							<a class="navbar-brand" href="#">
								<img src='../../img/icon/social_medias/whats.png' 
									alt="@aliastpadua" style=' height: 100%; margin-top: -12%;
										 border-radius: 20% 20%; position: relative'
											class='img-responsive' alt='Whats app '>
							</a>
						</li>
						<!--<li><a href="/home"><span class="glyphicon glyphicon-log-in">
									</span> Login</a></li> -->
					</ul>
					<br><br>
				</div>
			</div>
		</nav>
		
		<!-- Formulário de Notificação do usuario -->
		
		<nav>
			<div class='container-fluid' id='notification' class='w3-container w3-center w3-animate-opacity'>
				<div class='row'>
					<div class='col' style='width: 30%; height: 100%; text-align:center; border: 1px solid #ccc; margin-left: 35%'>
					
							<h5><strong>Gostaria de receber nossas notificações de atualização ?</strong></h5>
							<hr>
							<button class='btn btn-primary' id='btn_permission'>Receber</button>
							<button class='btn btn-secondary' id='btn_cancel'>Cancelar</button>
							<br>
					
					</div>
				</div>
				<style>
			
			 @-webkit-keyframes fadeIn {
				0% { opacity: 0; }
				100% { opacity: 1; } 
				}
				@-moz-keyframes fadeIn {
				0% { opacity: 0;}
				100% { opacity: 1; }
				}
				@-o-keyframes fadeIn {
				0% { opacity: 0; }
				100% { opacity: 1; }
					}
			@keyframes fadeIn {
				0% { opacity: 0; }
				100% { opacity: 1; }
				}
			
			#notification {
			-webkit-animation: fadeIn 3s ease-in-out;
			-moz-animation: fadeIn 3s ease-in-out;
			-o-animation: fadeIn 3s ease-in-out;
			animation: fadeIn 3s ease-in-out;
			}
		</style>
		<script>
			var btnPermission = document.getElementById('btn_permission');
			
			if(Notification.permission !== "default")
			{
				btnPermission.style.display = "none";
			}
			else
			{
				btnPermission.style.display = "inline-block";
			}
			
			btnPermission.onclick = evt => {
				Notification.requestPermission();
			}
			
			
			/** botão cancelar */
			var btnCancel = document.getElementById('btn_cancel');
			var notification = document.getElementById('notification');
			btn_cancel.onclick = evt => {
				notification.style.display = "none";
			}
			
			
		</script>
			</div>
		</nav>
		<br>
		
	<!-- Carrossel -->
	<nav>
		<div class='container-fluid'>
			<div class='row'>
				<div class='col'>
					
				</div>
			<div class='col'>
					
			</div>	
					
				<div class='container-fluid' style='margin-left: 6%'>
					<!-- img backround do carrosel -->
					<img src='../../img/icon/8.01.png'  style='width: 100%; max-width: 100%; height: 30%; max-height: 30%'>
					<!-- Img Tio Tarcisio 
					<img class='tio' src='../../img/icon/tio.bmp' alt='tarcisio' style='height: 16.9%; width: 10%; 
									margin-left: 10%; position: absolute'> -->
					<a href='/'>
					<!-- IMG de Endereço da Pagina -->
						<img class='img-responsive' src='../../img/icon/84.bmp' alt='@AliastPadua' style='width: 40%; margin-top: -6.5%; margin-left: 30%;'>
					</a>
					
				</div>
			</div>
		</div>
	</nav>
	<br>
	<br>
	
	<nav class='container-fluid'>
		<div class='row'>
			<div class='container-fluid'>
	
			<!-- Adiciona uma Scrollbar a div dos informativos -->
			<style>
					div #overflowA
					{
						height: 500px;
						max-width: 50%;
						background-color: #000;
						overflow: auto;
						
					}
				</style>
				<div class='col-xs-8 col-sm-4 col-md-4 col-lg-4' style='min-width: 25%; width: 25%;
						max-height: 550px; height: 500px; border: 1px solid #ccc; margin-top: 3%;
							background-color: #080808;color: #fff; padding: 0%;' 
							id='overflowA'>
				<div>			
				<h5 style='min-width: 5%; width: 100%; background-color: #080808; color: #fff; 
								 text-align:center;'>
									<span style='min-width: 5%; width: 10%' class='glyphicon glyphicon-facetime-video'></span>
									<strong> Informativo</strong>
										
				</h5>
				<hr>
				</div>
			
				@foreach($videos as $video)
				
				<h5 style=' min-width: 100%; width: 100%; text-align:center; font-size: 80%;'><strong>{{$video->titulo}}</strong></h5>
				<div class="embed-responsive embed-responsive-16by9">
						<iframe class='embed-responsive-item' src='/storage/videos/{{$video->nome_arquivo}}' allowfullscreen></iframe>
				</div>
				<!--
				<div align='center' class="embed-responsive embed-responsive-4by3">
				<video controls class='embed-responsive-item' style=''>
					<source src='/storage/videos/{{$video->nome_arquivo}}' alt='{{$video->nome_arquivo}}' type='video/mp4'>
					<object data=''>
					<embed src='/{{$video->nome_arquivo}}'>
					
					</object>
				</video>
				</div> -->
				<br>
				
				
				<p align='center'><strong>Descrição:</strong></p>
					<p style='background-color: #080808; opacity: 0.8;'>{{$video->descricao}}</p>
				<hr>
				@endforeach
			</div>
		</div>
		
		
		<!-- Eventos -->
		
		<div style='width: 21%; min-width: 21%; float:right; margin-top: -498px;
			margin-right: 1%;	border: 1px solid #000; box-shadow: -2px 1px #ccc; 
					background-color: #080808; color: #fff; height: 20%; max-height: 30px' >
		<!-- Adiciona uma Scrollbar a div dos eventos -->
		<style>
					div #overflow
					{
						height: 500px;
						width: 100%;
						background-color: #000;
						overflow: auto;
						
					}
				</style>
			<div class='container-fluid' id='overflow'>
			
				<!-- Cabeçalho Arte e Cultura -->	
				
					<h5 style='min-width: 5%; width: 100%; background-color: #080808; color: #fff; 
								 text-align:center;'>
						<span style='min-width: 5%; width: 10%' class='glyphicon glyphicon-calendar'></span>
								<strong>Arte e Cultura</strong>
					</h5>
			
				<hr style='margin-top: -2%'>
				@foreach($eventos as $evento)
						
				
							
				<div class=''>
				<p  	style='text-align: center; font-size: 95%; color: #fff'>{{$evento->nome_evento}}</p>
					<br>
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
									<a href="{{$imagem_evento->nome_imagem}}" class='btn btn-link'> 
										<img src='/{{$imagem_evento->nome_imagem}}'
											alt='{{$imagem_evento->nome_imagem}}' style='min-width: 100px; width: 80%'
												class='img-thumbnail img-responsive'>
									</a>
									
								@endif
						@endforeach	
						</div>
				</div>		
				<br>
				<br>
				<br>
				<br>
					<div class='col-xs-2 col-sm-2 col-md-2 col-lg-2' style='width: 100%;  background-color: #080808; 
								opacity: 0.8; color: #fff'>
									
									<p style='font-size: 80%; width: 65%; position: relative; color: #fff'>{{$evento->descricao_evento}}</p>
								
									<br>
									<br>
									
									<p style='color: #fff'><b>Data:</b><?php echo date('d-m-Y', strtotime($evento->data_evento));?>
									<b>Hora:</b><?php echo date('H:i:s', strtotime($evento->hora_evento));?></p>
									<br>
								
					</div>			
					@endforeach
			<!-- Botão Veja Mais -->
			<div class='col-xs-12 col-md-12 col-sm-12 col-lg-12' style='background-color: #fff'>
				<a href='eventos/show' style='color: #000;'><p style='text-align: center'>
					<span class='glyphicon glyphicon-plus'></span> Veja Mais</p></a>
			</div>
			
			</div>
		</div>
		
		<!-- Noticiais -->
		
		
	</div>
</nav>
	

	
	<!-- Conteudo Main Padrão onde estão as noticias-->
	<nav>
	@foreach($noticias as $noticia)
	<div class='container-fluid'>
		<main class='col-xs-5 col-sm-6 col-md-6 col-lg-6 offset-md-3' style='min-width: 10%; max-height: 10%; margin-left: 25%;
					border: 1px solid #000; box-shadow: -2px 1px #A9A9A9'>
			<!-- Script Botão compartilhar do facebook -->
				<div id="fb-root"></div>
				<script async defer crossorigin="anonymous" 
					src="https://connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v4.0">
				</script>
				
			<!-- Loop das Notícias -->
			<div class='container offset-xs-3 offset-sm-3 offset-md-3 offset-lg-3'>
				<!-- Titulo da notícia -->
				<!-- Verifica se a noticia está em dastaque ou não -->
				@if($noticia->destaque >= 1)
					<!-- se estive como destaque, exibe o titulo com a bandeira -->
						<h4 style='min-width: 100px; width: 55%;font-family: arial, sans-serif; 
							 margin-top: 1%; padding: 0%; 
								text-shadow: 1px 1px #ccc; color: #1c1c1c; margin-left: 0%;'>
								<!--Código da Bandeira de Destaque -->
									
										<!-- titulo da noticia -->
												<p style='text-align: center'>
													<span class='glyphicon glyphicon-bookmark'
														style='height: 20%; margin-left: 0%; font-size: 100%;'
															alt='Destaque'></span>
																{{$noticia->titulo}}
												</p>
												
						</h4>
			@else 
				
				
				<!-- Se não passar na verificação dos destaques exibe apenas o titulo da notícia -->
						<h4 style='font-family: arial, sans-serif; 
							 margin-top: 1%; padding: 0%; 
								text-shadow: 1px 1px #ccc; color: #1c1c1c; text-align: center;
									width: 55%; height: 20%'>
								
									<p style='text-align: center'>{{$noticia->titulo}}</p>
						</h4>
							
				
			@endif
			</div>
			<hr>
			<nav class='col-xs-12 col-md-12 col-sm-12'>
				<div class='row'>
					<p style='font-family: arial; sans-serif; text-align: center; color: #000; font-size: 100%;'>
				<!-- loop que percorre a tabela de imagens -->
				@foreach($imagens as $imagem)
				<!-- Se a id da nioticia for igual ao da id_noticia da tabela imagens
						exibe imagem da notiica -->
					@if($noticia->id == $imagem->id_noticia)
					
					<img src='{{$imagem->nome_imagem}}' alt='{{$imagem->nome_imagem}}' 
							style='min-width: 100px; width: 70%' class='img-thumbnail'>
				@endif
						
							
				@endforeach
				</p>
				</div>
			</nav>
			<nav>
				<div class='row'>
					<div class='col-xs-12 col-md-12 col-sm-12 col-lg-12' style='color: #080808'>
						<p style='min-width: 10%; max-height: 1px; width: 100%; #0000'>
							<!-- Conteudo da noticia -->
							{!! str_limit($noticia->conteudo, 501, '...') !!}
						</p>
						<div style='text-align: center;' class='col-sm-12 offset-md-3'>	
							<a href='noticias/{{$noticia->id}}/show' class='btn btn-link'>
								<span class='glyphicon glyphicon-eye-open'></span>leia Mais
							</a>
						</div>
					</div>
				</div>
			</nav>
			<hr style='margin-top: 0%; margin-bottom: 0%;'>
			
			<nav>
			<!-- Botões de compartilhamento -->
				<div class='row'>
					<div class='col-xs-8 col-sm-6 col-md-6 col-lg-6' style='min-width: 100px; width: 50%;'>
						<a href='noticias/{{$noticia->id}}/modal'>
							<i class='glyphicon glyphicon-envelope' style='font-size: 100%'></i>
							Compartilhar Por Email 
						</a>
					</div>
					
					<!-- Botão de compartilhamento do facebook -->
					<div class='col-xs-6 col-sm-6 col-md-6 col-lg-6' style='min-width: 50px; width: 50%; margin-left: -8%'>
						<div class="fb-share-button" data-href="http://tpadua.aliastpadua.com.br/noticias/{{$noticia->id}}/show/"
							data-layout="button" data-size="small">
							<a target="_blank" 
							href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Ftpadua.aliastpadua.com.br%2Fnoticias%2Fshow&amp;src=sdkpreparse"
									class="fb-xfbml-parse-ignore">Compartilhar</a>
						</div>
					</div>
				</div>
			</nav>
			<hr>
		<!-- Div de Informações sobre a noticia ex: data e Hora -->
		<nav>
			<div class='row'>
			<div class='col-xs-12 col-sm-12 col-md-12 col-lg-12'>
				<div class="container-footer" style='font-size: 100%; text-align: center'>
					<p style='min-width:60%; font-size: 85%'>
					<b>Fonte:</b> {{$noticia->fonte}}
					|
					<b>Data:</b> <?php echo date('d-m-Y', strtotime($noticia->created_at));	?>
					|
					<b>Hora:</b> <?php echo date('H:i:s', strtotime($noticia->created_at));	?>
					|
					<b>Atualizado:</b> <?php echo date('d-m-Y', strtotime($noticia->updated_at));	?>
					|
					<b>Hora:</b><?php echo date('H:i:s', strtotime($noticia->created_at));	?>
					</p>
				</div>
			</div>
			</div>
		</nav>
		</main>
			
	</div>
</nav>

	<br><br>
	<br><br>
	<br><br>
	@endforeach
	
	<nav>
		<div class='row'>
			<div class='col-xs-12 col-md-12 col-sm-12 col-lg-12' style='min-width: 360px; padding-left: 42.5%'>
				{{$noticias->links()}}
			</div>	

		</div>
	</nav>
		<br><br>
	<br><br>
	<br><br>
	
	<br><br>
	<br><br>
	<br><br>
	
	
	<!-- Newsletter -->
	<nav style='padding: 2.5%'>
		<div class='container-fluid'>
		
		
		<div class='row'>
	
			<div class='col-xs-3 col-sm-2 col-md-2 col-lg-2' style='min-width: 80px; width: 16%; border: 1px solid #000;
						border-radius: 2%; padding: 0%; margin-top: -206%; margin-bottom: 0%; 
									box-shadow: -2px -1px #ccc'>
					<h4 style='font-size: 100%; color:#080808; text-align: center; 
								margin-bottom: 1%; text-decoration: underline'>
						
								NewsLetter
					</h4>
					<hr style='margin-top: 0%'>
					
					<p style='font-size: 90%; text-align:center; margin-top: 0%'>
						Assine a nossa <b style='text-decoration: underline; color: red'>newsletter</b>
						e fique por dentro de nossas atualizações.
						
					<br>
				
						<a style='width: 90%; padding: 1%; margin-left: 1.5%' href='newsletter' class='btn btn-success'>Assínar</a>
							
					</p>
				</div>
				</div>
				<br><br>
				<br><br>
				<br><br>
				<br><br>
				<br><br>
				
				<div class='row'>
				<div class='col'></div>
				<div class='col-xs-3 col-sm-2 col-md-2 col-lg-2' style='min-width: 75px; max-height: 25%; 
						width: 16%; border: 1px solid #000; border-radius: 1%; padding: 0%; margin-top: -190%'>
						<h5 style='font-size: 100%;color:#080808; text-align: center; text-shadow: 1px 1px #ccc'>Nossos Parceiros</h5>
						<hr>
						 
					
					<a style='min-width: 10px; width: 95%; padding: 0%;
						margin-left: 2%; margin-top: -5%' href='parceiros/create'
							class='btn btn-success btn-sm'>Assínar
							<br>
					</a>
							
				</div>
				
			</div>
			
		</div>
	</nav>
	
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
	<br><br>
	<br><br>
	
	
    </body>
</html>
