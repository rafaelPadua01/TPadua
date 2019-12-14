@extends('layouts.app')

@section('content')
<div class='container'>
	<div class='row'>
		<div class='col-xs-2 col-sm-2 col-md-2 col-lg-2'></div>
		<div class='col-xs-8 col-sm-8 col-md-8 col-lg-8'>
			<h1 align='center'>Imagens da Galeria</h1>
				<hr>
			<div style='border: 1px solid #ddd; background-color: #808080; padding: 0%'>
			@foreach($galerias as $galeria)
				
				<a href='/storage/galeria_imagens/{{$diretorio}}/{{$galeria->nome_imagem}}'>
				<input type='checkbox' class='btn btn-sm'>
					<img src='/storage/galeria_imagens/{{$diretorio}}/{{$galeria->nome_imagem}}'
						class='img-fluid img-thumbnail' style='width: 30%; display: inline-block'>
							
				</a>
			@endforeach
		</div>
		</div>
	</div>
		<br>
		<div class='row' align='center'>
			<div class='btn-group' >
				<a href='/galeria_imagens/index' class='btn btn-info'>Voltar para a página anterior</a>
				<button type='submit' class='btn btn-danger'>
					<i class='glyphicon glyphicon-trash'></i> 
						Remover imagens selecionadas
				</button>
			</div>
		</div>
		<br>
		
		<div class='row'>
			<div class='col-8'></div>
		</div>
</div>



@endsection