@extends('layouts.app')

@section('content')
<div class='container'>
	<div class='row'>
		<div class='col-xs-2 col-sm-2 col-md-2 col-lg-2'></div>
		<div class='col-xs-8 col-sm-8 col-md-8 col-lg-8'>
			<h1 align='center'>Imagens Da galeria</h1>
				<hr>
			<div style='border: 1px solid #ddd;background-color: #ccc; paddin: 10%'>
			@foreach($galerias as $galeria)
				<img src='/storage/galeria_imagens/{{$diretorio}}/{{$galeria->nome_imagem}}'
						class='img-fluid img-thumbnail' style='width: 30%; display: inline-block'>
			@endforeach
		</div>
		
		</div>
	</div>
</div>


@endsection