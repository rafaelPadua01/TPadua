@extends('layouts.app')

@section('content')
<nav>
	<div class='container'>
	<div class='row'>
	<div class='col-xs-2 col-sm-2 col-md-2 col-lg-2'></div>
	<div class='col-xs-6 col-sm-6 col-md-6 col-lg-6'>
		<h1 align='center'>Remover Imagem ??</h1>
			<hr>
			<br>
	
			<p style='font-size:1.6rem' align='center'>Você tem certeza que quer remover a imagem ? </p>
			<br>
	
			<a href='{{$imagem_eventos->nome_imagem}}'>
				<img src='/{{$imagem_eventos->nome_imagem}}' alt='{{$imagem_eventos->nome_imagem}}' 
					style='width: 25%; border: 1px solid #ccc' class='img-fluid img-thumbnail'>
			</a>
			<br><br>
	
			<p style='font-size: 1rem'><b>Nome da imagem:</b> {{$imagem_eventos->nome_imagem}}</p>
			<br>
	
			<p style='font-size: 1rem'><b>upload em :</b> {{$imagem_eventos->created_at}}</p>
			<br><br>
	
				<a href='/imagem_eventos' class='btn btn-success'>Voltar para o inicio</a>
				<a href='/imagem_eventos/{{$imagem_eventos->id}}/destroy' class='btn btn-danger'>Deletar</a>
			</div>
		</div>
	</div>
</nav>


@endsection