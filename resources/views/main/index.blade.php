<!doctype>
<html>
<head>
    <meta charset='utf-8'>
	 <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AliásTPadua.com.br - O informativo do Distrito Federal e região</title>

    																
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
    <div class="container">
        <div class="row">
            <div class="col-12 navbar nav-bar-expand bg-dark navbar-dark">
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
    </div>
    <br>
    <div class="container">
     <div class="row"></div>
     </div>
     <!-- Cria a div do Banner -->
    <div class="container">
        <div class="row">
            <div class="col-12 shadow p-1 mb-3 rounded" style="background-image: url('../../img/icon/Banner/backgroundR.png'); height: 125px;">
                <!-- Carrega imagem do texto AlistPadua -->
					<a href='/'>
						<img src='../../img/icon/Banner/textoPrincipal.png' class='img-fluid' style='width: 70%; min-width: 210px;
							max-height: 150px; margin-top: -0.3%; margin-left: 13%; opacity: 0.8; position:static'>
					</a>
					<a href='#' alt='tpadua7@gmail.com'>
							<img src='../../img/icon/Banner/textoEmail.png' class='img-fluid'
							 style='width: 70%; min-width: 110px; margin-top: -12%; margin-left: 30%; opacity: 0.8'> 
					</a>
            </div>
        </div>

    <!-- Div Das Noticias -->
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-6 shadow p-1 mb-2 rounded" style='background-color: #DCDCDC; opacity: 0.8; border: 1px solid #ddd;
					max-height: 100%; max-width: 100%; width: 100%'>
                <!-- Cabeçalho da Div -->
                    <div class="col-8">
                       <p style="font-size: 0.7rem"><strong>Noticias</strong></p> 
                    </div>
                    <hr>
                    <div class="col-12" style="max-height: 70%; height: 70%">
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
									@foreach($noticias as $n)
										@if($n_img->id_noticia == $n->id)

										<div class="carousel-item {{$key === 0 ? 'active' : ''}}" style="width: 100%; height: 220px; max-height:50%">
											<a href="/{{$n_img->nome_imagem}}">
											<img src="/{{$n_img->nome_imagem}}" align="center" class="img-fluid img-thumbnail" alt="Carousel Noticias">
											</a>
											<br>
											<div class="col-8 carousel-caption d-none d-md-block" style=" background-color: #000;
													 color: #fff; opacity: 0.7">
												<h6 style="font-size: 0.6rem">
													{{$n->titulo}}
												</h6>
												
												<a href="noticias/{{$n->id}}/show" style="font-size: 0.7rem; color: #fff">leia mais</a>
												
											</div>	
										</div>
										@endif
									@endforeach
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
                <div class="col-3 shadow p-1 mb-2 rounded" style='background-color: #DCDCDC; opacity: 0.8; border: 1px solid #ddd; float: right;
					height: 100%; max-height: 200px'>
                    <div class="col-2">
                       <p style="font-size: 0.7rem"><strong>Relógio</strong></p> 
                       
                    </div>
                    <hr>
                    <div class="col-12">
					
                   
               
                    <p style='font-size: 0.7rem; color: #080808' align="center">
					<!-- Função que retorna a hora atual -->
					<!-- Vinda do browser do usuario, 
							pois o servidor local possui 
							a diferença de 3 horas em 
							seu fuso horário -->
						<?php  setlocale(LC_TIME, 'pt-br'); echo "<small>".strftime("%A, %e de %B de %G")."</small>";?>
						<br>
						<script type='text/javascript'>
							localtime = new Date()	;
							document.write(localtime.getHours() + ':' + localtime.getMinutes() + ':' + localtime.getSeconds());
						</script>
				
					
				    </p>
                </div>
       		 </div>
    	</div>
	
	

	<!-- Div De Espaço Para Anúncios -->
	<div class="container">
		<div class="row justify-content-between">
			<div class="col-6 shadow p-1 mb-2 rounded" style='background-color: #DCDCDC; opacity: 0.8; border: 1px solid #ddd;' >
				<p style='font-size: 0.7rem'><strong>Videos Aqui...</strong></p>
				<hr>

				<small style="font-size: 0.5rem" >Aqui serão exibidos os videos relacionandos as notícias </small>
			</div>
			
			
			<div class="col-2 shadow p-1 mb-2 rounded" style='background-color: #DCDCDC; opacity: 0.8; border: 1px solid #ddd; float: right
					max-height: 100px'>
					<p style="font-size: 0.7rem" align="center"><strong>Anuncie Aqui</strong></p>
					<hr>
				
				<div>
					<p style="font-size: 0.7rem">Anuncie aqui<p>
					
					<p style="font-size: 0.7rem">Entre em contato...</p>
					<a href="#">Link de contato</a>
				</div>
			</div>
		</div>
	</div>
	<br>
	
	<!-- Div de Outras Matérias -->
    <hr style="background-color: #D3D3D3">
	<br>
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-8 shadow p-1 mb-2 rounded" style='background-color: #DCDCDC; opacity: 0.8; border: 1px solid #ddd;'>
               <p style="font-size: 0.8rem"><strong>Outras Matérias</strong></p>
				<hr>
				<div class="row justify-content-between" style="padding: 5%">
				<div class="col-3" style="border: 1px solid #000">
						<p style="font-size: 0.6rem"><strong>informativo</strong></p>
						<hr>
						@foreach($informativos as $i)
							<p style="font-size: 0.6rem"><strong>{{$i->titulo}}</strong></p>
								
							<div class="embed-responsive embed-responsive-4by3">
								<iframe class="embed-responsive-item" src="/storage/videos/{{$i->nome_arquivo}}" alt="{{$i->nome_arquivo}}" allowfullscreen></iframe>
							</div>
							
						<p style="font-size: 0.6rem">{{$i->descricao}}</p>
						@endforeach
				</div>
				<!-- Div que exibe o ultimo artigo publicado -->
				<div class="col-3" style="border: 1px solid #000">
					<p style="font-size: 0.6rem"><strong>Artigos</strong></p>
					<hr>
						@foreach($artigos as $a)
							<p style="font-size: 0.6rem"><strong>{{$a->titulo}}</strong></p>
							

							<!-- Conteudo da noticia -->
							<?php echo "<div style='font-size: 0.6rem'><p>".(str_limit($a->conteudo, 101, '...'))."</p></div>" ?>

							<!-- Link Leia Mais -->
				
						<p align='center' style='font-size: 0.6rem'>
							<a href='noticias/{{$a->id}}/show' class='btn btn-link' style='font-size: 0.6rem'>
								<span class='fas fa-eye' style='font-size: 0.5 rem'></span>
								Leia mais
							</a>
						</p>
						@endforeach
						

					
				</div>
				
				<div class="col-3" style="border: 1px solid #000">
						<p style="font-size: 0.6rem"><strong>Poesias</strong></p> 
						<hr>
						<!-- Loop que percorre as noticias com a categoria poesia -->
						@foreach($poesias as $p)
						<!-- Titulo da poesia -->
							<p style="font-size: 0.6rem" ><strong>{{$p->titulo}}</strong></p>

							<!-- Conteudo da noticia -->
							<?php echo "<div style='font-size: 0.6rem'><p>".(str_limit($p->conteudo, 101, '...'))."</p></div>" ?>

							<!-- Link Leia Mais -->
				
						<p align='center' style='font-size: 0.6rem'>
							<a href='noticias/{{$p->id}}/show' class='btn btn-link' style='font-size: 0.6rem'>
								<span class='fas fa-eye' style='font-size: 0.5rem'></span>
								Leia mais
							</a>
						</p>
						@endforeach
				</div>
			<!-- Arte e cultura -->
				<div class="col-3" style="border: 1px solid #000">
					<p style="font-size: 0.6rem"><strong>Arte e Cultura</strong></p>
					<hr> 
					@foreach($arteCultura as $ac)
						<p style="font-size: 0.6rem"><strong>{{$ac->nome_evento}}</strong></p>
						@foreach($imagem_eventos as $img_e)
							@if($img_e->id_evento == $ac->id)
							<p align="center">
								<a href='{{$img_e->nome_imagem}}'>
									<img src="/{{$img_e->nome_imagem}}" alt="{{$img_e->nome_imagem}}" 
										class="img-thumbnail img-fluid"  style='width: 60%'>
								</a>
							</p>
							@endif
						@endforeach
						<p style="font-size: 0.6rem">{{$ac->descricao_evento}}</p>
					@endforeach
				</div>

				<div class="col-3" style="border: 1px solid #000;">
						<p style="font-size: 0.6rem"><strong>Cobertura</strong></p> 
						<hr>
						@foreach($coberturas as $c)
							<p style="font-size: 0.6rem"><strong>{{$c->titulo}}</strong></p>

								<!-- Conteudo da noticia -->
								<small style="font-size: 0.5rem">{!! str_limit($c->conteudo, 100) !!}</small>

								<!-- Link Leia Mais -->

								<p style='font-size: 0.6rem; text-align: center'>
									<a href='noticias/{{$c->id}}/show' class='btn btn-link' style='font-size: 0.6rem'>
										<span class='fas fa-eye' style='font-size: 0.5rem'></span>
										Leia mais
									</a>
								</p>
						@endforeach
				</div>
				<!-- cria a div de noticias de Sobradinho -->
				<div class="col-3" style="border: 1px solid #000">
					<p style="font-size: 0.6rem"><strong>Sobradinho</strong></p>
					<hr>
					@foreach($sobradinho as $s)
						@foreach($categorias as $c)
							@if($s->id_categoria == $c->id && $c->nome_categoria == 'Sobradinho')
								<a href="/noticias/{{$s->id}}/show">
									<p style="font-size:0.6rem">{{$s->titulo}}</p>
								</a>

								<small style="font-size: 0.5rem">{!!str_limit($s->conteudo, 100)!!}</small>
							@endif
						@endforeach
					@endforeach
				</div>
				<!-- Cria a div de notícias de planaltina -->
				<div class="col-3" style="border: 1px solid #000">
					<p style="font-size: 0.6rem"><strong>Planaltina</strong></p>
					<hr>
					@foreach($planaltina as $p)
						@foreach($categorias as $c)
							@if($p->id_categoria == $c->id && $c->nome_categoria == "Planaltina")
								<a href="/noticias/{{$p->id}}/show">
									<p style="font-size: 0.6rem">{{$p->titulo}}</p>
								</a>
								<small style="font-size: 0.5rem">{!! str_limit($p->conteudo) !!}</small>
								
							@endif
						@endforeach
					@endforeach

				</div>
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

				</div>-->

				</div>
			</div>
			<!-- Div Das Ultimas Notícias -->
			<div class="col-3 shadow p-1 mb-2 rounded"  style='background-color: #DCDCDC; opacity: 0.8; border: 1px solid #ddd; float: right'>
				<!-- Cabeçalho da div -->
				<div class="col-12" style="">
					<p style="font-size: 0.7rem"><strong>Ultimas Notícias</strong></p>
				</div>
				<hr>
				<!-- Corpo da Div -->
				<div class="col-12">
					<ul style="list-style: none; padding: 0%">
						@foreach($noticias as $n)

								<li style="padding: 0%">
									
										<p style="font-size: 0.6rem">
										<a href="/noticias/{{$n->id}}/show"><strong>{{$n->titulo}}</strong></a>
											<br>
											<small style="font-size: 0.5rem">{!! str_limit($n->conteudo, 100)!!}</small>
											<br>
									<small style="font-size: 0.5rem"><strong>{{$n->created_at}}</strong></small>
										</p>
									
									
									
									
								</li>
						
						@endforeach
					</ul>
					<hr>
				</div>
			</div>
			
        </div>
		
    	</div>
    </div>
		
	<br>
      <!-- div Footer (rodape) -->

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
			<div class='col-4' align='right' style='padding-right: 3%'>
						
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