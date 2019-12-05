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
		{!! Form::open(['url' => 'noticias/store']) !!}
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
			{!! Form::label('titulo', 'titulo:') !!}
				{!! Form::text('titulo', null, ['class' => 'form-control'] )!!}
		</div>
		
		
		<!-- Exibe a categoria tegoria -->
		
		<div class="form-group">
		
			{!! Form::label('categoria', 'Categoria da noticia:') !!}
				{!! Form::hidden('id_categoria', $categoria->id, ['class' => 'form-control']) !!}
					{!!Form::text('nome_categoria', $categoria->nome_categoria, ['class' => 'form-control']) !!}
			
		</div>
		
		<div class="form-group">
			{!! Form::label('fonte', 'fonte:') !!}
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
			
			{!!Form::hidden('id_categoria', $categoria->id, ['class' => 'form-control']) !!}
				
				<a href='/categorias' class='btn btn-danger'>Voltar</a>
			{!! Form::submit('Cadastrar Noticia', ['class' => 'btn btn-success'])!!}
			
		</div>
		{!! Form::close() !!}

</div>

@endsection
	