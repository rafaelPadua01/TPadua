@extends('layouts.app')

@section('content')
<div class='container'>
	<div class='row'>
		<div class='col-xs-12 col-sm-12 col-md-12 col-lg-12'>
			<!-- Banner -->
			<img src='../../img/icon/8.01.png' class='img-fluid img-responsive' style='width: 100%; max-width: 100%;'>
				<img src='../../img/icon/84.bmp' class='img-fluid img-responsive' style='width: 45%; min-width: 110px;
							margin-top: -7%; margin-left: 25%; opacity: 0.8; position: relative'>
		</div>
	
	</div>
	<br>
	<!-- Conteudo da Página -->
	<div class='row'>
		<div class='col-xs-2 col-sm-2 col-md-2 col-lg-2'></div>
		<!-- conteudo sobre -->
		<div class='col-xs-12 col-sm-8 col-md-8 col-lg-8 shadow p-2 mb-3 rounded' style='border: 1px solid #ddd; display: inline-block'>
			<h4 style='text-align: center; text-shadow: 1px 1px #ccc;'>Sobre o fundador deste site</h4>
			<hr>
			<div align='center'>
			<img style='' class='img-thumbnail img-fluid' src='../../img/icon/1-Capa-Livro-Caminhar.jpg' alt='Caminhar'>
			</div>
			<p style='font-size: 1.3rem;  float: right'>
			Bacharel em Comunicação Social pelo UniCEUB.
			Jornalista profissional.Pos-Graduação (parcial) em Ciência Política pela Universidade de Brasília (UnB). 
			<br>
			Em Sobradinho desde 1965. Fundou com Almerindo Trindade o primeiro Jornal de Sobradinho.
			Com José Edmar Gomes, o jornal Folha da Serra. Primeiro editor da Revista João de Barro. <br>
			Como funcionário do Itamaraty, assumiu, entre outras missões no exterior, o Consulado do Brasil em Iquitos, Peru.
			<br>
			Poeta, tem participação em publicações no Rio Grande do Sul, Rio de Janeiro, Brasília, Minas Gerais e Goiás.
			<br>
			Em julho de 2018, lançou o livro <b>"CAMINHAR"</b>,
				com 230 poemas abrangendo os mais diversos temas,<br>
				cuja poesia que dá título é:<b>"Eu só quero/ um caminho/caminhar/sob o sol/de Sobradinho</b>.
								
				<br>
				<br>			
			</p>
			
		</div>
		<div class='col-xs-2 col-sm-2 col-md-2 col-lg-2'></div>
	</div>
	
</div>
<br>
<!-- Rodapé -->	
		<nav>
			<div class='container-footer' style='background-color: #080808'>
				<div class='row'>
					<div class='col-xs-2 col-sm-2 col-md-2 col-lg-2'>
						<a href='/'>
								<img src='/../../img/icon/TpaduaDefault.bmp' 
										style='min-width: 65px; width: 80%'
											alt='aliastpadua.com.br' class='img-fluid'>
							</a>
					</div>

					<!-- coluna vazia para criar o espaçamento entre os icones
							default e os de midias sociais -->
					<div class='col-xs-6 col-sm-6 col-md-6 col-lg-6' >
							
					</div>
					<div class='col-xs-4 col-sm-4 col-md-4 col-lg-4 ' align='right' style='padding-right: 10%'>
						
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
								a p.#wppNumber{
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