@extends('layouts.app')

@section('content')
<div class='container'>
	<div class='row'>
	<div class='col-xs-2 col-sm-2 col-md-2 col-lg-2'></div>
	<div class='col-xs-6 col-sm-6 col-md-6 col-lg-6'>
	<h1 align='center'>Imagens de Notícias</h1>
	<hr>
	<a href='/home' class='btn btn-info'>
		<i class='glyphicon glyphicon-home'></i>
			Página Inicial
	</a>
	<br><br>
	@foreach($imagens as $imagem)
		<div align='center' class='col-xs-4 col-sm-4 col-md-4 col-lg-4' style='border: 1px solid #ccc'>
			<!-- Noticia a qual a imagem pertence -->
				@foreach($noticias as $noticia)
					@if($imagem->id_noticia == $noticia->id)
						<p class='h5'>{{$noticia->titulo}}</p>
					@endif
				@endforeach
				<br>
			<!-- Imagem -->
			<a href='{{$imagem->nome_imagem}}'>
				<img src='{{$imagem->nome_imagem}}' class='img-thumbnail img-fluid '>
			</a>
			<br>
				<!-- Data e Hora do upload da imagem -->
				<p style='font-size: 0.8rem'>{{$imagem->created_at}}</p>
				<!-- nome/caminho da imagem -->
				
			<!-- Botão remover -->	
			<div class='btn-group'>
				<a href='imagens/{{$imagem->id}}/remove' class='btn btn-danger btn-xs'>Remover</a>
			</div>
	
		</div>
	@endforeach
		
	</div>
</div>
	<div class='row'>
		<div class='col-xs-2 col-sm-2 col-md-2 col-lg-2'>
			<div align='center' class='container'>
				<i>{{ $imagens->links() }}</i>
			</div>
		</div>
	</div>
</div>





@endsection