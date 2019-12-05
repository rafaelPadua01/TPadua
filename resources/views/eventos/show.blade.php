@extends('layouts.app')

@section('content')




<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<!-- outro script do google para os anuncios-->
			<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
			<script>
			(adsbygoogle = window.adsbygoogle || []).push({
			google_ad_client: "ca-pub-3091231814546323",
			enable_page_level_ads: true
			});
			</script>

        <title>@liásTPadua.com.br - O informativo do Distrito Federal e região</title>
		

   </head>
    <body>
	
	
	<nav>
		<div class='row' style='width: 40% ; margin-left: 30%;'>
		<!-- Adiciona uma Scrollbar a div dos eventos -->
		
	
	
	<!-- Conteudo Main Padrão onde estão as noticias-->
	@foreach($eventos as $evento)
	<div class='container-fluid'>
		<main class='row col-xs-12 col-sm-12 col-md-12 col-lg-12' style='border: 1px solid #000;
														box-shadow: -2px 1px #A9A9A9'>
			<!-- Script Botão compartilhar do facebook -->
				<div id="fb-root"></div>
				<script async defer crossorigin="anonymous" 
					src="https://connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v4.0">
				</script>
				
			<!-- Loop das Notícias -->
			<div class='container'>
				<!-- Titulo da notícia -->
				<!-- Verifica se a noticia está em dastaque ou não -->
			 
				
			<!-- Se não passar na verificação dos destaques exibe apenas o titulo da notícia -->
						<h4 style='font-family: arial, sans-serif; 
							 margin-top: 1%; padding-left: 12%; 
								text-shadow: 1px 1px #ccc; color: #1c1c1c;'>
								
									<p style=''>{{$evento->nome_evento}}</p>
						</h4>
							
				
			
			</div>
			<hr>
			<nav class='col-xs-12 col-md-12 col-sm-12'>
				<div class='row'>
					<p style='font-family: arial; sans-serif; text-align: center; color: #000; font-size: 100%;'>
				<!-- loop que percorre a tabela de imagens -->
				@foreach($imagem_eventos as $imagem_evento)
				<!-- Se a id da nioticia for igual ao da id_noticia da tabela imagens
						exibe imagem da notiica -->
					@if($evento->id == $imagem_evento->id_evento)
					
					<a href='/{{$imagem_evento->nome_imagem}}'>
							<img src='/{{$imagem_evento->nome_imagem}}' alt='{{$imagem_evento->nome_imagem}}' 
							style='min-width: 60%; width: 40%' class='img-thumbnail'>
					</a>		
				@endif
						
							
				@endforeach
				</p>
				</div>
			</nav>
			<nav>
				<div class='row'>
					<div class='col-xs-12 col-md-12 col-sm-12 col-lg-12'>
						<p>
							<!-- Conteudo da noticia -->
							{{$evento->descricao_evento}}
						</p>
						<div style='text-align: center;' class='col-sm-12 offset-md-3'>	
							<a href='/eventos/{{$evento->id}}/display' class='btn btn-link'>
								<span class='glyphicon glyphicon-eye-open'></span>leia Mais
							</a>
						</div>
					</div>
				</div>
			</nav>
			<hr style='margin-top: 0%; margin-bottom: 0%;'>
			
			
			<hr>
		<!-- Div de Informações sobre a noticia ex: data e Hora -->
		<nav>
			<div class='row'>
			<div class='col-xs-12 col-sm-12 col-md-12 col-lg-12'>
				<div class="container-footer" style='font-size: 100%; text-align: center'>
					<p style='min-width:60%; font-size: 85%'>
					<b>Data:</b> <?php echo date('d-m-Y', strtotime($evento->data_evento));	?>
					|
					<b>Hora:</b> <?php echo date('H:i:s', strtotime($evento->hora_evento));	?>
					|
					
					</p>
				</div>
			</div>
			</div>
		</nav>
			
		</main>
	</div>
	

	<br>
	
	@endforeach
	
	
	<br>	


    </body>
</html>
@endsection