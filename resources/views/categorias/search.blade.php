@extends('layouts.app')

@section('content')
<div class='container'>
	<h1>Resultado da Busca {{$search}}</h1>
	<hr>
	<h3>Noticias Encontradas:</h3>
	
		<div>
			<ul>
			@foreach($categorias as $categoria)
				@foreach($noticias as $noticia)
					@if($categoria->id == $noticia->id_categoria)
						@if($categoria->nome_categoria == ucfirst(trans($search)))
							<li><a href='/noticias/{{$noticia->id}}/show'>{{$noticia->titulo}}</a></li>
						@endif
					@endif
				@endforeach
			@endforeach	
			</ul>
		</div>
		
		<div class='container' style='text-align: center'>
			<span>{{ $paginates->links() }}</span>		
		</div>
</div>	

@endsection