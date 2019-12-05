@extends('layouts.app')

@section('content')

	<div class='container'>
	<div class='row'>
	<h3 align='center'>Galeria de Imagens de Eventos</h3>
	<hr>
	
	<div class='btn-group' align='center'>
		<a href='/home' style='float: left' class='btn btn-info'>
			<i class='glyphicon glyphicon-home'></i>
				Pagina Inicial
		</a>
		<a href='/eventos' style='float: left' class='btn btn-info'>
			<i class='glyphicon glyphicon-return'></i>
				Voltar para os eventos
		</a>
	</div>
	<br>
	<br>
	<div class='col-xs-2 col-sm-2 col-md-2 col-lg-2'></div>
	
		
		
		@foreach($imagem_eventos as $evento)
		<div class='col-xs-4 col-sm-4 col-md-4 col-lg-4' style='border: 1px solid #ddd'>
		
		
			
			<a href='{{$evento->nome_imagem}}'> <img src='{{$evento->nome_imagem}}' alt='{{$evento->nome_imagem}}'
				class='img-thumbnail img-fluid'>
			</a>
			
			<!--<p style='font-size: 0.9rem'>{{$evento->descricao}}</p>-->
			<p align='center' style='font-size: 0.9rem'>{{$evento->created_at}}</p>
			<!-- Percorre os registros de eventos cadastrados 
				-- armazena na variavel $e e compara as ids com a das imagens
				-- na variavel $eventos que recebe os registros da variavel $imagem_eventos
			-->
			@foreach($eventos as $e)
			@if($e->id == $evento->id_evento)	
			
			<p align='center' style='font-size: 0.9rem'>{{$e->nome_evento}}</p>
		
			@endif
			@endforeach
			
			<!-- Botão para remover a Imagem do evento -->
			<a href='/imagem_eventos/{{$evento->id}}/remove' class='btn btn-danger btn-xs'>Remover</a>
		
			
		
		</div>
		
		
		@endforeach
			<div class='col-xs-2 col-sm-2 col-md-2 col-lg-2'></div>
	</div>
	<div class='row'>
		<div class='col-xs-4 col-sm-4 col-md-4 col-lg-4'></div>
		<div class='col-xs-8 col-sm-8 col-md-8 col-lg-8'>
			{{$imagem_eventos->links()}}
		</div>
		<div class='col-xs-2 col-sm-2 col-md-2 col-lg-2'></div>
	</div>
	
	
</div>

@endsection