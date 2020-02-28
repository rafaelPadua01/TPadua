@extends('layouts.app')

@section('content')
<body style="background-image: url('../../img/icon/earth3.jpg')">
<div class="container-fluid">
	<div class="row">
		<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3"></div>
		<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6" style="width: 100%; height: 100%; text-align: center;
			 border: 1px solid #000; background-color: #D3D3D3; opacity: 0.8;padding: 0%; margin: 0%" align='center'>
			 <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6" style="width: 100% ;height: 100%; background-color: #fff;
			 	padding:0%; margin:0%"> 
			<h3>{{$categorias->nome_categoria}}</h3>
			<hr>
			@foreach($noticias as $n)
				@if($n->id_categoria == $categorias->id)
					<p align='center'><strong>{{$n->titulo}}</strong></p>
					<p>{!! str_limit($n->conteudo, 500) !!}</p>
					@foreach($imagens as $img)
						@if($img->id_noticia == $n->id)
							<img source="/{{$img->nome_arquivo}}" alt="{{$img->nome_arquivo}}" 
									class="img-fluid img-thumbnail">{{$img->nome_arquivo}}
						@endif
					@endforeach
					<a href="/noticias/{{$n->id}}/show">
						<span class="glyphicon glyphicon-plus"></span>
						Veja Mais
					</a>
					<p>Data / Hora: {{$n->created_at}}</p>

					
					<hr>
				@endif
			@endforeach

			{{$noticias->onEachSide(5)->links()}}
		</div>
			
		</div>
		<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3"></div>
	</div>
</div>
</body>

@endsection