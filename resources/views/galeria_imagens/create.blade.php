@extends('layouts.app')

@section('content')

<div>
	<h1>Criar uma Galeria de Imagens</h1>
	<hr>
	<br>
		<div class='container'>
		{!! Form::open(['url' => "/galeria_imagens/$noticias->id/upload", 'method' => 'post', 'enctype' => 'multipart/form-data'])!!}
		
			{{csrf_field()}}
			
			<div class='input-group control-group increment'>
				<input type='file' name='nome_imagem[]' class='form-control' multiple>
				
			</div>
			<br>
			
			<div class='form-group'>
				<a href='/noticias' class='btn btn-danger'>Voltar</a>
				{!! Form::submit('upload', ['class' => 'btn btn-success'])!!}
			</div>
			<!--</form> -->
			{!! Form::close() !!}	
		</div>

@endsection