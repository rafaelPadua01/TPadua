@extends('layouts.app')

@section('content')

<div class='container'>
	<div class="row">
		<div class="col-6"> 
		<h1>Upload de imagens</h1>
		<hr>
		<!-- Inicia (abre) um form para Upload das imagens-->
		{!! Form::open(['url' => "imagens/$noticias->id/upload", 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
		
		<!-- inputs do form -->
		<div class='form-group'>
		{!! Form::label('nome_imagem', 'Arquivo:') !!}
			{!! Form::file('nome_imagem', null, ['class' => 'form-control']) !!}
		</div>	
		
		<!-- Submit -->
		
		<!--<input type='hidden' name='id_noticia' id='id_noticia' value='{{$noticias->id}}'>-->
		<div class="btn-group">
			<a href='/noticias' class='btn btn-danger'>Voltar para a página inicial</a>
			{!! Form::hidden('id_user', Auth::user()->id) !!}
			{!! Form::submit('Salvar Imagem', ['class' => 'btn btn-success'])!!}
		</div>
		{!! Form::close()!!}
	</div>
	</div>
</div>
<hr>
<!-- Formulário de Upload dos videos-->
<div class="container">
	<div class="row">
		<div class="col-8">
			{!! Form::open(['url' => "video_noticia/$noticias->id/upload", 'method' => 'post', 'enctype' => 'multipart/form-data']) !!}
				<h1>Formulário de Upload de video</h1>
				<hr>

				<div class="form-group">
					<label>Selecione o Video:</label>
					{!! Form::file('nome_arquivo', null, ['class' => 'form-control'])!!}
					
				</div>
				<div class="form-group">
					<label>Titulo</label>
					<input type="text" name="titulo" id="titulo" placeholder="Titulo Aqui..." class="form-control">
					
				</div>
				<div class="form-group">
					<label>Descrição:</label>
					<textarea name="descricao" id="descricao" cols="30" rows="10" class="form-control" placeholder="Descrição do Video"></textarea>
					
				</div>
				<div class="btn-group">
					<input type="hidden" name="id_noticia" id="id_noticia" value="{{$noticias->id}}">
					<input type="hidden" name="id_user" id="id_noticia" value="{{Auth::user()->id}}">
					<a href="/noticias" class="btn btn-danger">Voltar para a página inicial</a>
					{!! Form::submit('Salvar Video', ['class' => 'btn btn-success']) !!}
				</div>
			{!! Form::close() !!}
		</div>
	</div>
</div>

@endsection