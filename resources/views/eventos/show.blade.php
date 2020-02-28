@extends('layouts.app')

@section('content')


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
    <body style="background-image: url('../../img/icon/earth3.jpg')">
	
		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3"></div>
				<div class="col-xs-6 col-sm-8 col-md-6 col-lg-6" style="background-color: #D3D3D3;opacity: 0.8; padding: 2%; margin: 0%">
					<h3 align='center'>Eventos</h3>
					<hr>
					
						@foreach($eventos as $e)
						<h3 align='center'>{{$e->nome_evento}}</h3>
						<hr>
						
						
						@foreach($imagem_eventos as $imagem_evento)
						<!-- Se a id da nioticia for igual ao da id_noticia da tabela imagens
							exibe imagem da notiica -->
						@if($e->id == $imagem_evento->id_evento)
					
						<a href='/{{$imagem_evento->nome_imagem}}'>
							<img src='/{{$imagem_evento->nome_imagem}}' alt='{{$imagem_evento->nome_imagem}}' 
							style='width: 40%; height: 60%; margin-left:30%;' class='img-fluid img-thumbnail'>
						</a>		
						@endif
						@endforeach

						<p align='center'>{!! $e->descricao_evento !!}</p>
						<p align='center'><strong>Data / Hora: </strong><?php echo date('d-m-Y H:m:s', strtotime($e->created_at)); ?></p>
						<p align='center'>
							<a href="/eventos/{{$e->id}}/display">
								<span class="glyphicon glyphicon-plus"></span>
									Veja Mais
							</a>
						</p>
						
						<hr>
					@endforeach
				</div>
				<div></div>
			</div>
		</div>

    </body>
</html>
@endsection