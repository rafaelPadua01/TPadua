<?php 
	

?>

@extends('layouts.app')

@section('content')
<!-- Script do editor de textos -->
<!-- CDN do CKEditor -->
<script src="https://cdn.ckeditor.com/4.12.1/standard/ckeditor.js"></script>


<div class="container">
	<h1>Cadastro de notícias</h1>
	<!--Inicia o form  -->
		{!! Form::open(['url' => "noticias/store", 'method' => 'post']) !!}
		<!-- Div 'Destaque' da notícia -->
		<div class='form-group'>
			{!! Form::label('destaque', 'Destaque:') !!}
			<br>
				{!! Form::radio('destaque', '1' , true) !!} 
						
										Sim
				
				{!! Form::radio('destaque', '0') !!} Não
		</div>
		
		<!-- Form input titulo Noticia -->
		<div class="form-group">
			{!! Form::label('titulo', 'Titulo:') !!}
				{!! Form::text('titulo', null, ['class' => 'form-control'] )!!}
		</div>
		
		
		<!-- Exibe a categoria tegoria -->
		
		<div class="form-group">
		
			{!! Form::label('categoria', 'Selecione uma categoria:') !!}
				
					<select class="form-control" id="id_categoria" name="id_categoria">
					<option>Escolha a categoria...</option>
						@foreach($categorias as $c)
							<option value="{{$c->id}}">{{$c->nome_categoria}}</option>
						@endforeach
					</select>
				
				
			
		</div>
		
		<div class="form-group">
			{!! Form::label('fonte', 'Fonte:') !!}
				{!! Form::text('fonte', null, ['class' => 'form-control'] )!!}
		</div>
		
		<div class="form-group">
		<!-- Script CKEditor -->
			 <textarea name="conteudo"></textarea>
                <script>
                        CKEDITOR.replace( 'conteudo' );
                </script>
				
			<!--{!! Form::label('conteudo') !!}
				{!! Form::textarea('conteudo', null, ['class' => 'form-control'])!!} -->
				
				
				
			
		</div>
		
		<div class="form-group">
			
				<a href='/categorias' class='btn btn-danger'>Voltar</a>
				<input type="hidden" name="id_user" id="id_user" value="{{Auth::user()->id}}">
			{!! Form::submit('Cadastrar Noticia', ['class' => 'btn btn-success'])!!}
			
		</div>
		{!! Form::close() !!}

</div>

@endsection
	