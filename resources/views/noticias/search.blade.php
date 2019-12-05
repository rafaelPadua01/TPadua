@extends('layouts.app')

@section('content')
<div class='container'>
	<div class='row'>
		<div class='col-xs-3 col-sm-3 col-md-3 col-lg-3'></div>
		<div class='col-xs-6 col-sm-6 col-md-6 col-lg-6'>
			<h1 align='center'>Resultado da Busca</h1>
			<hr>
			@foreach($data as $d)
				
				<ul class='list-group'>
					
					<li class='list-group-item-success'>
					{{ $d->titulo }}
					<div class='btn-group'> 
					<a href='/noticias/{{$d->id}}/edit' class='btn btn-link btn-sm'>Editar</a>
					
					<a href='/noticias/{{$d->id}}/remove' class='btn btn-link btn-sm'>Remover</a>
					
					<!-- Link de upload de imagens -->
					<a href='/imagens/{{$d->id}}/create' class='btn btn-link btn-sm'>Upload de imagem</a>
					
					<a href='/galeria_imagens/{{$d->id}}/create' class='btn btn-link btn-sm'>Criar Galeria</a>	
				
					<a href='/noticias/{{$d->id}}/show' class='btn btn-link btn-sm'>Pré-visualizar</a>
					
				
					</div>
					</li>
						
				</ul>
					
			@endforeach
			<a href='/noticias' class='btn btn-danger'>Voltar para a página inicial</a>
			
		</div>
		<div class='col-xs-2 col-sm-2 col-md-2 col-lg-2'></div>
	</div>
</div>
@endsection