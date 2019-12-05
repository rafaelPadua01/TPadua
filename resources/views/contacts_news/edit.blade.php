@extends('layouts.app')

@section('content')
<script src="https://cdn.ckeditor.com/4.12.1/standard/ckeditor.js"></script>

<div class='container'>
	<h1>Editar Noticia</h1>
	<hr>
	{!! Form::open(['url' => "contacts_news/$contacts_news->id/update", 'method' => 'get']) !!}
		<div class='form-group'>
		{!! Form::label('nome', 'Nome:') !!}
			{!! Form::text('nome', $contacts_news->nome, ['class' => 'form-control'])!!}
		</div>
		
		<div class='form-group'>
		{!! Form::label('email', 'Email:') !!}
			{!! Form::text('email', $contacts_news->email, ['class' => 'form-control'])!!}
		</div>
		<div class='form-group'>
		{!! Form::label('noticia', 'Noticia:') !!}
			<textarea name='noticia' id='noticia' value='$contacts_news->noticia'>
							{{$contacts_news->noticia}}
			</textarea>
			
			<script>
                        CKEDITOR.replace( 'noticia' );
             </script>
				
		</div>
		
		<div class='form-group'>
			<a href='/home' class='btn btn-danger'>Voltar para à página anterior</a>
			{!! Form::submit('Salvar', ['class' => 'btn btn-success'])!!}
		</div>
	{!! Form::close() !!}
</div>


@endsection