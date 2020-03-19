<!doctype>
<html>
<head>
    <meta charset='utf-8'>
	 <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AliásTPadua.com.br - O informativo do Distrito Federal e região</title>

			<!-- Scripts jquery UI para criar o popUp Newsletter -->
			<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
 			 <link rel="stylesheet" href="/resources/demos/style.css">
    																
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

		<!-- Scripts Jquery UI para criar o popUp newsletter -->	
		<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
		<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
		
	
		<!-- script facebook,Novo botão compartilhar
				Agora com contador de compartilhamentos 
		-->
		<div id="fb-root"></div>
		<script async defer crossorigin="anonymous" src="https://connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v5.0"></script>

		<!-- Script do PopUpNewsletter aqui -->
		<script type="text/javascript" src="../../js/popupNewsletter.js"></script>

</head>    
<body style="background-image: url('../../img/icon/earth3.jpg')">
    <div class="container">
        <div class="row">
            <div class="col-12 navbar nav-bar-expand bg-dark navbar-dark">
                <!-- Navbar Responsiva, toggle -->
					
						<!-- Brand (link para pagina inicial e imagem padrão)  -->
						<a class="navbar-brand" href='/'><img src='/../../img/icon/TpaduaDefault.bmp' class='img-responsive'
							 style="width: 90%"></a>
						
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
    </div>
    <br>
    <div class="container">
     <div class="row"></div>
     </div>
     <!-- Cria a div do Banner -->
    <div class="container">
        <div class="row">
            <div class="col-12 shadow p-1 mb-3 rounded" style="background-image: url('../../img/icon/Banner/backgroundR.png'); width: 100%; height: 120px;">
                <!-- Carrega imagem do texto AlistPadua -->
					<a href='/'>
						<img src='../../img/icon/Banner/textoPrincipal.png' class='img-fluid' style='width: 75%; height: 100%; margin-top: 0.5%; 
							margin-left: 15%; opacity: 0.8; position:static'>
					</a>
					<a href='#' alt='tpadua7@gmail.com'>
							<img src='../../img/icon/Banner/textoEmail.png' class='img-fluid'
							 style='width: 60%; margin-top: -12.5%; margin-left: 30%; opacity: 0.8'> 
					</a>
            </div>
        </div>

    <!-- Div Das Noticias -->
        <div class="container">
			<div class="row justify-content-between">
				<div class="col-6 shadow p-1 mb-2 rounded" style='width: 100%; height: 100%; padding: 0%; margin: 0%;
							background-color: #DCDCDC; opacity: 0.8'>
                <!-- Cabeçalho da Div -->
                    <div class="col-8">
                       <p style="font-size: 0.5rem"><strong>Noticias</strong></p> 
                    </div>
                    <hr>
                    <div class="col-12" style="width: 100%; height: 70%">
                        <div id="noticiasCarousel" class="carousel slide" data-ride="carousel">
							<ul class="carousel-indicators">
								<li data-target="#noticiasCarousel" data-slide-to="0" class="active"></li>
								<li data-target="#noticiasCarousel" data-slide-to="1"></li>
								<li data-target="#noticiasCarousel" data-slide-to="2"></li>
								<li data-target="#noticiasCarousel" data-slide-to="3"></li>
								<li data-target="#noticiasCarousel" data-slide-to="4"></li>
								
							</ul>
							
							<div class="carousel-inner" role="listbox">
							<!-- Loop percorre as imagens das noticias que estão armazenadas
								e cria uma key(chave), se ela for 0 este item estará com item ativo
								e será o primeiro da lista a ser exibido, dessa forma o carousel 
								saberá que essa é a primeira imagem e logo em seguida carrega as proximas imagens -->
							
							@foreach($imagens as $key => $n_img)
							
										

										<div class="carousel-item {{$key === 0 ? 'active' : ''}}"
										 style="width: 100%; height: 100%; padding: 0%; margin: 0%">
											<a href="noticias/{{$n_img->id_noticia}}/show" align='center'>
											<img src="/{{$n_img->nome_imagem}}" class="img-fluid img-thumbnail"
												 alt="Carousel Noticias" style="width: 80%; margin-left: 10%">
											</a>
											
											<div class="col-8 carousel-caption d-none d-md-block" style="width: 100%; padding: 2%; margin: 4%;
														background-color: #000; color: #fff; opacity: 0.7">
													 @foreach($noticias as $n)
													@if($n->id == $n_img->id_noticia)
												<h6 style="font-size: 0.6rem">
													{!! str_limit($n->conteudo, 100) !!}
												</h6>
												
												@endif
												@endforeach
												<a href="noticias/{{$n_img->id_noticia}}/show" style="font-size: 0.7rem; color: #fff">
													<span class="fas fa-eye"></span> 
													leia mais
												</a>
												
											</div>	
										</div>
									
										
									
									
								@endforeach
								
							<a href="#noticiasCarousel" class="carousel-control-prev" data-slide="prev">
								<span class="carousel-control-prev-icon"></span>
							</a>
							<a href="#noticiasCarousel" class="carousel-control-next" data-slide="next">
								<span class="carousel-control-next-icon"></span>
							</a>

							
						</div>
					</div>
                </div>
			</div>
                <!-- Div do Calendário de data e hora -->
				<div class="col-3 shadow p-1 mb-2 rounded" style='width: 25%; height: 20%; padding: 0%; margin: 0%; 
							background-color: #DCDCDC; opacity: 0.8; float: right;'>
                    <div class="col-2">
                       <p style="font-size: 0.5rem"><strong>Relógio</strong></p> 
                       
                    </div>
                    <hr>
                    <div class="col-12">
					
                    <p style='font-size: 0.6rem; color: #080808' align="center">
					<!-- Função que retorna a hora atual -->
					<!-- Vinda do browser do usuario, 
							pois o servidor local possui 
							a diferença de 3 horas em 
							seu fuso horário -->
						<?php setlocale(LC_TIME, 'pt-br'); echo "<small>".strftime("%A, %e de %B de %G")."</small>";?>
						<br>
						<script type='text/javascript'>
							localtime = new Date();
							document.write(localtime.getHours() + ':' + localtime.getMinutes() + ':' + localtime.getSeconds());
						</script>
				
					
				    </p>
                </div>
       		 </div>
    	</div>
	
	<br>

	<!-- Div De Espaço Para Videos e Anuncios-->
	<div class="container">
		<div class="row justify-content-between">
			 <div class="col-6 shadow p-1 mb-2 rounded" style='width: 100%; height: 100%; padding: 4%; margin-left: -2%; 
			 	background-color: #DCDCDC; opacity: 0.8; float: right' >
				<p style='font-size: 0.5rem' align='center'><strong>Videos</strong></p>
				<hr>
					@foreach($videos_n as $v_n)	
						<div class="col-5" style="width: 100%; display: inline-block; padding: 2%; margin-left: 4%">
							<p style="font-size: 0.5rem" align="center"><strong>{{$v_n->titulo}}</strong></p>
							<div class="embed-responsive embed-responsive-1by1">
								<video controls class="embed-responsive-item" src="storage/videos_noticias/{{$v_n->nome_arquivo}}" 
									alt="{{$v_n->nome_arquivo}}">
									
								</video>
							</div>
							<small style="font-size: 0.5rem" >{{$v_n->descricao}} </small>
						</div>
					@endforeach
				
			</div>
			<br>
			<!-- Div Ultimas Notícias -->
	<div class="container">
		<div class="row justify-content-between">
		<!-- Div de Espaçamento -->	
		<div class="col-3"></div>
		<div class="col-3 shadow p-1 mb-2 rounded"  style='width: 100%; height: 75%; background-color: #DCDCDC; opacity: 0.8;
					 float: right; padding: 1%; margin-top: -20%; margin-left: 6%;'>
					 
				<!-- Cabeçalho da div -->
				<div class="col-12" style="padding: 0%; margin: 0%">
					<p style="font-size: 0.5rem"><strong>Ultimas Notícias</strong></p>
				</div>
				<hr>
				<!-- Corpo da Div -->
				<div class="col-12">
					<ul style="list-style: none; padding: 0%">
						@foreach($noticias as $n)

								<li style="padding: 0%">
									
										<p style="font-size: 0.5rem">
										<a href="/noticias/{{$n->id}}/show"><strong>{{$n->titulo}}</strong></a>
										</p>	
										<p><small style="font-size: 0.5rem">{!! str_limit($n->conteudo, 150) !!}</small></p>
											
										<p><small style="font-size: 0.5rem"><strong>{{$n->created_at}}</strong></small></p>
									
									
								</li>
						
						@endforeach
					</ul>
					<hr>
				</div>
			</div>
		</div>
	</div>
	<!-- Anuncios -->
	<div class="col-3"></div>
			<div class="col-3 shadow p-1 mb-2 rounded" style='width: 100%; height: 50%; background-color: #DCDCDC; 
				float: right ;opacity: 0.8; '>
					<p style="font-size: 0.5rem"><strong>Anuncie Aqui</strong></p>
					<hr>
				
				<div>
					<p style="font-size: 0.5rem">Anuncie aqui<p>
					
					<p style="font-size: 0.5rem">Entre em contato...</p>
					<a href="#" style="font-size: 0.8rem" >Link de contato</a>
				</div>
			</div>
		</div>
	</div>
	<br>
	
	<!-- Div de Outras Matérias -->
    <hr style="background-color: #D3D3D3">
	<br>

    <div class="container-fluid shadow p-1 mb-2 rounded d-flex flex-row mb-3">
        <div class="row justify-content-between d-flex">
            <div class="col-8" style='width: 100%; height: 100%; background-color: #DCDCDC; opacity: 0.8; 
				padding: 2%; margin-left: 2%; '>
               <p style="font-size: 0.6rem"><strong>Outras Matérias</strong></p>
				<hr>
				<div class="row justify-content-between d-flex" style="padding: 0%; margin: 0%">
			<!-- Div Informativos -->
				<div class="col-4 border border-light" style="width: 100%; height: 100%; padding: 2%; margin: 0%">
						<p style="font-size: 0.6rem">
							
								<strong>informativo</strong>
							
						</p>
						<hr>
						@foreach($informativos as $i)
							<p style="font-size: 0.6rem;" class='text-justify-center' align='center'>
								<strong>{{$i->titulo}}</strong>
							</p>
								
							<div class="embed-responsive embed-responsive-1by1" align='center'>
								<video class="embed-responsive-item" src="/storage/videos/{{$i->nome_arquivo}}" 
								 controls style="width: 90%; height: 90%; margin-top: -10%; margin-left: 4%">
									
								</video>
							</div>
							
						<p style="font-size: 0.6rem; margin-top: 0%;" class='text-justify-center' align='center'>
							{{$i->descricao}}
						</p>
						<!-- Link leia mais -->
						
						<a href='videos/{{$i->id}}/show'  align='center' class='btn btn-link' 
							style='font-size: 0.5rem; margin-top: 0%'>
							<p style='font-size: 0.5rem'>
								<span class='fas fa-eye' style='font-size: 0.5rem'></span>
									Veja mais
								</p>
							</a>
						
						@endforeach
					
				</div>
				<!-- Div que exibe o ultimo artigo publicado -->
				<div class="col-4  border border-light" style="width: 100%; height: 100%; padding: 2%; margin: 0%">
					<p style="font-size: 0.6rem">
						<strong>Artigos</strong>
					</p>
					<hr>
						@foreach($artigos as $a)
							<p style="font-size: 0.6rem"><strong>{{$a->titulo}}</strong></p>
							

							<!-- Conteudo da noticia -->
							<?php echo "<div style='font-size: 0.6rem'><p>".(str_limit($a->conteudo, 300, '...'))."</p></div>" ?>

							<!-- Link Leia Mais -->
				
						<div class="btn-group">
							<p style='font-size: 0.5rem'>
							<a href='noticias/{{$a->id}}/show' class='btn btn-link' style='font-size: 0.5rem'>
								<span class='fas fa-eye' style='font-size: 0.5rem'></span>
									Leia mais
							</a>
							|
							
							<a href='categorias/{{$a->id_categoria}}/show' class='btn btn-link' style='font-size: 0.5rem'>
								<span class='fas fa-plus' style='font-size: 0.5rem'></span>
									Veja Mais
							</a>
							</p>
						</div>
						@endforeach
				</div>
				
			
			<!-- Arte e cultura -->
				<div class="col-4 border border-light" style="width: 100%; height: 100%; padding: 2%; margin: 0%">
					<p style="font-size: 0.6rem"><strong>Arte e Cultura</strong></p>
					<hr> 
					@foreach($arteCultura as $ac)
						<p style="font-size: 0.6rem; padding: 0%" class="text-justify"><strong>{!!$ac->nome_evento!!}</strong></p>
						@foreach($imagem_eventos as $img_e)
							@if($img_e->id_evento == $ac->id)
							<p>
								<a href='{{$img_e->nome_imagem}}'>
									<img src="{{$img_e->nome_imagem}}" alt="{{$img_e->nome_imagem}}" 
										class="img-fluid img-thumbnail"  style='width: 75%; height: 90%; margin-left: 4%'>
								</a>
							</p>
							
							@endif
						@endforeach
						<p style="font-size: 0.6rem">{{$ac->descricao_evento}}</p>
						<p style="font-size: 0.5rem">
								<a href="/eventos/show">
									<span class="fas fa-eye"></span>
										Leia Mais...
								</a>
						</p>
					@endforeach
				</div>
				
				<!-- Div Cobertura -->
				<div class="col-4 border border-light" style="width: 100%; height: 100%; padding: 2%; margin: 0%">
						<p style="font-size: 0.6rem"><strong>Cobertura</strong></p> 
						<hr>
						@foreach($coberturas as $c)
							<p style="font-size: 0.6rem"><strong>{{$c->titulo}}</strong></p>

								<!-- Conteudo da noticia -->
								<p><small style="font-size: 0.6rem">{!! str_limit($c->conteudo, 350) !!}</small></p>

								<!-- Link Leia Mais -->

								<p style='font-size: 0.4rem'>
									<a href='noticias/{{$c->id}}/show' class='btn btn-link' style='font-size: 0.5rem'>
										<span class='fas fa-eye' style='font-size: 0.5rem'></span>
											Leia mais
									</a>
									|
									<a href='categorias/{{$c->id_categoria}}/show' class='btn btn-link' style='font-size: 0.5rem'>
								<span class='fas fa-plus' style='font-size: 0.5rem'></span>
									Veja Mais
							</a>
								</p>
						@endforeach
				</div>
				<!-- cria a div de noticias de Destaque -->
				<div class="col-4 border border-light" style="width: 100%; height: 100%; padding: 2%; margin: 0%">
					<p style="font-size: 0.6rem"><strong>Destaque</strong></p>
					<hr>
					@foreach($destaque as $d)
						@foreach($categorias as $c)
							@if($d->id_categoria == $c->id && $d->destaque == true)
							<p style="font-size:0.6rem">
								<a href="/noticias/{{$d->id}}/show">
									{{$d->titulo}}
								</a>
							</p>
								<small style="font-size: 0.5rem">{!!str_limit($d->conteudo, 350)!!}</small>
							@endif
						@endforeach
						
					@endforeach
				</div>

				<!-- cria a div de noticias de Sobradinho -->
				<div class="col-4  border border-light" style="width: 100%; height: 100%; padding: 0%; margin: 0%">
					<p style="font-size: 0.6rem"><strong>Sobradinho</strong></p>
					<hr>
					@foreach($sobradinho as $s)
						@foreach($categorias as $c)
							@if($s->id_categoria == $c->id && $c->nome_categoria == 'Sobradinho')
								
							<p style="font-size:0.6rem">
								<a href="/noticias/{{$s->id}}/show">
									{!! $s->titulo !!}
								</a>
							</p>

								<p><small style="font-size: 0.5rem">{!!str_limit($s->conteudo, 350)!!}</small></p>
							@endif
						@endforeach
					@endforeach
				</div>
				<!-- Cria a div de notícias de planaltina -->
				<div class="col-4 border border-light" style="width: 100%; height: 100%; padding: 2%; margin: 0%">
					<p style="font-size: 0.6rem"><strong>Planaltina</strong></p>
					<hr>
					@foreach($planaltina as $p)
						@foreach($categorias as $c)
							@if($p->id_categoria == $c->id && $c->nome_categoria == "Planaltina")
							<p style="font-size: 0.6rem">
								<a href="/noticias/{{$p->id}}/show">
									{{$p->titulo}}
								</a>
							</p>
							<p><small style="font-size: 0.6rem">{!! str_limit($p->conteudo, 350) !!}</small></p>
								
							@endif
						@endforeach
					@endforeach

				</div>

				<!-- Divdas Poesias 
				<div class="col-4  border border-light" style="width: 100%; height: 100%; padding: 2%; margin: 0%">
						<p style="font-size: 0.6rem"><strong>Poesias</strong></p> 
						<hr>
						<!-- Loop que percorre as noticias com a categoria poesia 
						@foreach($poesias as $p)
						<!-- Titulo da poesia 
							<p style="font-size: 0.6rem" ><strong>{{$p->titulo}}</strong></p>

							<!-- Conteudo da noticia 
							<div style='font-size: 0.6rem'>
								<p>{!! str_limit($p->conteudo, 350) !!}</p>
							</div>
						
							<!-- Link Leia Mais 
				
						<p style='font-size: 0.4rem'>
							<a href='noticias/{{$p->id}}/show' class='btn btn-link' style='font-size: 0.5rem'>
								<span class='fas fa-eye' style='font-size: 0.5rem'></span>
								Leia mais
							</a>
							|
							<a href='categorias/{{$p->id_categoria}}/show' class='btn btn-link' style='font-size: 0.5rem'>
								<span class='fas fa-plus' style='font-size: 0.5rem'></span>
									Veja Mais
							</a>
						</p>
						@endforeach
				</div> -->
			<!--
				<div class="col-3" style="border: 1px solid #000">
					<p style="font-size: 0.6rem"><strong>Eventos</strong></p>
					<hr>
					@foreach($eventos_c as $e)
						@foreach($categorias as $c) 
							@if($e->id_categoria == $c->id && $c->tipo == "Eventos" )
							<a a href="/noticias/{{$e->id}}/show" alt="{{$e->titulo}}"> 	
								<p style="font-size:  0.6rem"><strong>{{$e->titulo}}</strong></p>
							</a>
							
								<small style="font-size: 0.5rem">{!! str_limit($e->conteudo, 100)!!}</small>
								<br>
								<a href="#" style="font-size: 0.5rem">Leia Mais</a>
							@endif

						@endforeach
					@endforeach

				</div> -->

				</div>
			</div>
		</div>
	</div>
</div>	
<br>
	<!-- Div PopUp Newsletter -->
<div id="newsletterPopUp"  title="aliástpádua diz:">
	
	<div class='col-12' style='padding: 0%; margin: 0%'>
		<p style='font-size: 0.9rem'>Assíne a <strong>Newsletter<strong></p>
		<small style="font-size: 0.8rem"> preencha os campos necessários e fique por dentro de tudo que acontece no aliastpadua.com.br</small>
		<p>
			<!--<img src="/../../img/icon/thumbTpadua.jpg" class="img-fluid img-thumbnail" 
					alt="aliastpadua" style="width: 30%; padding: 0%; margin-left: 35%"> -->
		</p>
		<hr> 
		<div class="btn-group">
			<a href="/signature" alt="assinar" class="btn btn-secondary" style="color: #fff">Assinar</a>
		</div>
		<hr>
	</div>
	<script>
		$(function(){
 		  $("#newsletterPopUp").dialog({
			position: {my: "right", at: "right", of: window},
			show: {effect: 'slide', duration: 3500},
			hide: {effect: 'explode', duration: 1000},
			}).css({
					position: 'sticky'});
		});
		</script>
	</div>
	
		

      <!-- div Footer (rodape) -->

	<div class='container-footer' style='background-color: #080808'>
		<div class='row'>
			<div class='col-2'>
				<a href='/'>
					<img src='/../../img/icon/TpaduaDefault.bmp' 
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
					<strong>Equipe aliastpadua:</strong>
					<br>
					<a href='#' style='color: #fff'>Desenvolvido por <strong>Rafael Ferreira Pádua</strong></a>
					<br>
					Todos os direitos Reservados
				</p>
							
							
							
			</div>
			<div class='col-4' align='right' style='padding-right: 3%'>
						
				<a href='https://www.facebook.com/profile.php?id=100003206947030'>
					<img src='../../img/icon/social_medias/facebook.png'
						alt='facebook' class='img-fluid' style='min-width: 22px;
								width: 10%'>
				</a>
				
				<a href=''><img src='../../img/icon/social_medias/Instagram.png'
					alt='instagram'  class='img-fluid' style='min-width: 22px; width: 10%'>
				</a>
				|
				<a id='wpp' href='https://api.whatsapp.com/send?l=pt_BR&phone=556198481-5924' data-toggle="tooltip" data-placement="top" title="what'sapp">
					<img src='../../img/icon/social_medias/whats.png' alt='Whatsapp' 
						class='img-fluid' style='min-width: 22px; width: 10%'>
					
				</a>
			
						
			</div>
		</div>
	</div>
</body>
</html>