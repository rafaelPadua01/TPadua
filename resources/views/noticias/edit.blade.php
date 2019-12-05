@extends('layouts.app')

@section('content')

<script src="https://cdn.ckeditor.com/4.12.1/standard/ckeditor.js"></script>

<div class='container'>
	<h1>Editar Noticia: <b>{{$noticia->titulo}}</b></h1>
	<hr>
	@if($errors->any())
		@foreach($errors as $error)
			<ul class='alert alert-warning'>
				<li>{{$error}}</li>
			</ul>
		@endforeach
	@endif
	<div class='form-goup'>
	{!! Form::open(['url' => "noticias/$noticia->id/update", 'method' => 'put']) !!}
	<!--Inputs da Noticia -->
	{!! Form::label('titulo', 'Titulo') !!}
		{{Form::text('titulo', $noticia->titulo, ['class' => 'form-control'])}}
	</div>
	
	
	<div class='form-group'>
		{!! Form::label('fonte', 'Fonte:') !!}
			{!! Form::text('fonte', $noticia->fonte, ['class' => 'form-control']) !!}
	</div>
	
	<div class='form-group'>
		<div class="form-group">
		<!-- Script CKEditor -->
			 <textarea name="conteudo" value='$noticias->conteudo'>{{$noticia->conteudo}}</textarea>
                <script>
                        CKEDITOR.replace( 'conteudo' );
                </script>
				
			<!--{!! Form::label('conteudo') !!}
				{!! Form::textarea('conteudo', null, ['class' => 'form-control'])!!} -->
				
				
				
			
		</div>
		<!--{!! Form::label('conteudo', 'Conteudo:') !!}
			{!!Form::textarea('conteudo', $noticia->conteudo, ['class' => 'form-control'])!!} -->
	</div>

	<div class='form-group'>
		{!!Form::label('destaque','Destaque:')!!}
		
			<br>
				{!! Form::radio('destaque', '1' , true) !!} Sim
				
				{!! Form::radio('destaque', '0') !!} Não
	</div>
	<div class='form-group'>
	<a href='/noticias' class='btn btn-danger'>Voltar</a>
	{!! Form::submit('Editar Noticia', ['class' => 'btn btn-success'])!!}
	
	</div>	
	{!! Form::close()!!}
	
</div>



@endsection