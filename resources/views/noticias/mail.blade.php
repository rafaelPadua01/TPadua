

	<h2>{{$noticias->titulo}}</h2>
	<hr>
		<nav>
			<div class='container'>
				@foreach($imagens as $imagem)
					@if($imagem->id_noticia == $noticias->id)
						<!--<img src='{{$imagem->nome_imagem}}'> -->
					@endif
				@endforeach
			</div>
		</nav>
	<nav>
				<div class='row'>
					<div class='col-xs-12 col-md-12 col-sm-12 col-lg-12'>
						<p>
							<!-- Conteudo da noticia -->
							{!! str_limit($noticias->conteudo, 501, '...') !!}
						</p>
						<div style='text-align: center;' class='col-sm-12 offset-md-3'>	
							<a href='http://tpadua.aliastpadua.com.br/noticias/{{$noticias->id}}/show'>
								leia Mais
							</a>
						</div>
					</div>
				</div>
			</nav>
		
		
		
