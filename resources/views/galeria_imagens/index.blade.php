@extends('layouts.app')

@section('content')
<div class='container'>
	<div class='row'>
	<h1 align='center'>Galeria de Imagens</h1>
	<hr>
		<a href='/home' class='btn btn-info'>
			<i class='glyphicon glyphicon-home'></i>
					Pagina Inicial
		</a>
		<br><br>
			<div class='col-xs-2 col-sm-2 col-md-2 col-lg-2'>
			
			</div>
			@foreach($galerias as $galeria)
			<div class='col-xs-4 col-sm-4 col-md-4 col-lg-4'  style='border: 1px solid #ddd'>
				
				@foreach($noticias as $noticia)
					@if($noticia->id === $galeria->id_noticia)
						<p>{{$noticia->titulo}}</p>
						<hr>
					@endif	
				@endforeach
						<a href='/storage/galeria_imagens/{{$galeria->nome_imagem}}'>
							<img src='/storage/galeria_imagens/{{$galeria->nome_imagem}}'
										alt='{{$galeria->nome_imagem}}' class='img-thumbnail img-fluid'>
						</a>
						<p style='font-size: 0.9rem' align='center'>{{$galeria->created_at}}</p>
						<br></br>
						
						<div class='btn-group'>
							<a href='/galeria_imagens/{{$galeria->id}}/remove' class='btn btn-danger btn-xs'>Remover</a>
						</div>
						
						<br>
						
			</div>
			@endforeach
			<div class='col-xs-2 col-sm-2 col-md-2 col-lg-2'></div>
		
	</div>
</div>


	
	<div class='container' style='text-align:center'>
		<span>{{ $galerias->links() }}</span>
	</div>
</div>
@endsection