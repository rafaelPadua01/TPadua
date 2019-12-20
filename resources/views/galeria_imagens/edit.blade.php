@extends('layouts.app')

@section('content')
<div class='container'>
	<div class='row'>
		<div class='col-xs-2 col-sm-2 col-md-2 col-lg-2'></div>
		<div class='col-xs-8 col-sm-8 col-md-8 col-lg-8' style='border: 1px solid #000'>
			<h3 align='center'>Atualizar Galeria de imagens</h3>
			<hr>
			
			{!! Form::open(['url' => "/galeria_imagens/$diretorio/update", 'method' => 'put', 'enctype' => 'multipart/form-data']) !!}
				<div class='form-group'>
				{!!Form::label('Nome da Galeria Selecionada', 'nome_galeria')!!}
					{!! Form::text('nome_galeria', $diretorio, ['class' => 'form-control'])!!}
				</div>
				
				<hr>
				
				<div class='form-group'>
					<label>Upload de Arquivos:</label>
					<input type='file' name='nome_imagem[]' class='form-control' multiple>
				</div>
				
				<div class='btn-group'>
					
					<a href='/galeria_imagens/index' class='btn btn-danger'>Voltar para a pagina anterior</a>
					<button type='submit' class='btn btn-success'>Atualizar</button>
					{!! Form::hidden('id_user', Auth::user()->id) !!}
					
					@foreach($noticias as $noticia)
						@foreach($galerias as $galeria)
							@if($galeria->id_noticia == $noticia->id)
								{!! Form::hidden('id_noticia', $noticia->id) !!}
							@endif
						@endforeach
					@endforeach
					
				</div>
				
			{!!Form::close() !!}
		<br>
		</div>
		
		<div class='col-xs-2 col-sm-2 col-md-2 col-lg-2'></div>
	</div>
</div>


@endsection