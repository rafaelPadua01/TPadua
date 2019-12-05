@extends('layouts.app')

@section('content')
<nav>
	<div class='row'>
		<div class='col-xs-8 col-sm-8 col-md-8 col-lg-8' style='padding-left: 25%'>
			
	<div class='container-fluid'>
		<main class='col' style='border: 1px solid #000; box-shadow: -2px 1px #A9A9A9'>
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
						<h4 style='min-width: 25%; font-family: arial, sans-serif; 
							 margin-top: 1%; padding-left: 14.5%; 
								text-shadow: 1px 1px #ccc; color: #1c1c1c'>
								
									 {{$eventos->nome_evento}}
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
					@if($eventos->id == $imagem_evento->id_evento)
					
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
						<p style='padding: 4%'>
							<!-- Conteudo da noticia -->
							{{$eventos->descricao_evento}}
						</p>
						
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
					<b>Data:</b> <?php echo date('d-m-Y', strtotime($eventos->data_evento));	?>
					|
					<b>Hora:</b> <?php echo date('H:i:s', strtotime($eventos->hora_evento));	?>
					|
					
					</p>
				</div>
			</div>
			</div>
		</nav>
			
		</main>
	</div>
	

	<br>
	

	
	
	<br>	

		</div>
	</div>
</nav>
@endsection