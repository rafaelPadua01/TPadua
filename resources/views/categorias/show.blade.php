@extends('layouts.app')

@section('content')
<nav class='container'>
	<h1>{!! $categorias->nome_categoria!!}</h1>
	<hr>
	
	
		@foreach($noticias as $noticia)
			@if($noticia->id_categoria == $categorias->id)
				<!-- cria as divs para as nóticias relacionadas a categoria -->
				<div class='container' style='border: 1px solid #808080; height: 25%; width: 60%; background-color: #fff;
							box-shadow: -2px 1px #9c9c9c; border-radius: 1%'>
							<!-- Titulo da noticia -->
					<div class='container-header'>
						<h4 style='font-family: arial; sans-serif; font-size: 200%; 
						text-align: center; margin-top: 1%;padding: 3%; 
							text-shadow: 1px 1px #ccc; color: #1c1c1c; text-decoration: underline'>
							{{$noticia->titulo}}
						</h4>
					</div>
					
					<div class='container-body' style='background-color: #fff;'>
						<p style='font-family: arial; sans-serif; text-align: center; color: #000; font-size: 100%;'>
							@foreach($imagens as $imagem)
								@if($imagem->id_noticia == $noticia->id) 
								<img src='/{{$imagem->nome_imagem}}' alt='{{$imagem->nome_imagem}}' 
									style='width: 30%'>
								@endif
							@endforeach
							
							<br>
							
							{!! $noticia->conteudo !!}
						</p>
					</div>
					
					<hr>
					
					<div class='container-footer' style='font-size: 100%; text-align: center'>
						<b>Autor:</b> <a href='#'>{{$noticia->fonte}}</a>
						| 
						<b>Data:</b> {{$noticia->created_at}}	
						|
						<b>Atualizado em:</b> {{$noticia->updated_at}}
					</div>
				</div>
				<br><br>
			@endif
		@endforeach
</nav>


@endsection