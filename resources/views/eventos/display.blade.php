@extends('layouts.app')

@section('content')
<body style="background-image: url('../../img/icon/earth3.jpg')">
<div class="container-fluid">
			<div class="row">
				<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3"></div>
				<div class="col-xs-6 col-sm-8 col-md-6 col-lg-6" style="background-color: #D3D3D3;opacity: 0.8; padding: 2%; margin: 0%">
						<h3 align='center'>{{$eventos->nome_evento}}</h3>
						<hr>
						
						
						@foreach($imagem_eventos as $imagem_evento)
						<!-- Se a id da nioticia for igual ao da id_noticia da tabela imagens
							exibe imagem da notiica -->
						@if($eventos->id == $imagem_evento->id_evento)
					
						<a href='/{{$imagem_evento->nome_imagem}}'>
							<img src='/{{$imagem_evento->nome_imagem}}' alt='{{$imagem_evento->nome_imagem}}' 
							style='width: 40%; height: 60%; margin-left:30%;' class='img-fluid img-thumbnail'>
						</a>		
						@endif
						@endforeach

						<p align='center'>{!! $eventos->descricao_evento !!}</p>
						<p align='center'><strong>Data / Hora: </strong><?php echo date('d-m-Y H:m:s', strtotime($eventos->created_at)); ?></p>
						<p align='center'>
							
						</p>
						
						<hr>
					
				</div>
				<div></div>
			</div>
		</div>
</body>
@endsection