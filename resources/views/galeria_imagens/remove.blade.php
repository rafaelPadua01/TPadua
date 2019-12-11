@extends('layouts.app')

@section('content')
<div class='container'>
	<div class='row'>
		<div class='col-xs-2 col-sm-2 col-xmd-2 col-lg-2'></div>
	
		<div class='col-xs-6 col-sm-6 col-md-6 col-lg-6'>
		
			<h1 align='center'>Remover Galeria ?</h1>
			<hr>
	
			<p>Você tem certeza que quer remover a Galeria <strong>{{$galeria_diretorio}}</strong> ? </p>
			<br>
		
		{{$galeria_diretorio}}
			<br><br>
				@foreach($galerias as $galeria)
					@if($galeria_diretorio == $galeria->nome_galeria)
						<img class='img-thumbnail img-fluid' style='display: inline-block; width: 30%' src='/storage/galeria_imagens/{{$galeria_diretorio}}/{{$galeria->nome_imagem}}'>
					@endif
				@endforeach
			<a href='/galeria_imagens/index' class='btn btn-success'>Voltar para o inicio</a>
				<a href='/galeria_imagens/{{$galeria_diretorio}}/destroyGaleria' class='btn btn-danger'>Deletar</a>
		
	</div>
	
	</div>
</div>


@endsection