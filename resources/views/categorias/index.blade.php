<?php
	//$id_user = $_GET['id_user'];
?>

@extends('layouts.app')

@section('content')
<div class='container'>
	<h1 align='center'>Categorias</h1>
	<hr>
	<!--Div dos botões superiores -->
	<div class='btn-group'>
	<!-- link para a home -->
		<a href='/home' class='btn btn-info'>
			<i class='glyphicon glyphicon-home'></i>
				iníco
		</a>
		<!-- link de cadastro de categorias -->
		<a class='btn btn-info' 
			href='categorias/{{Auth::user()->id}}/create'
					align='center'>
						<i class='glyphicon glyphicon-calendar'></i>
							Nova Categoria
		</a>
	
		
	</div>
	<br>
	<br>
	<!-- link de cadastro de noticias -->
	
	
	<table class='table table-sm table-dark table-striped table-hover table-bordered table-fluid'>
		<thead class="thead-dark">
			<tr>
				<th scope="col">id</th>
				<th scope="col">Categoria</th>
				<th scope="col">Criado por</th>
				<th scope="col">Ações</th>
			</tr>
		</thead>
		<tbody>
		@foreach($categorias as $categoria)
			<tr>
				<th scope="row">{{$categoria->id}}</th>
				<td>{{$categoria->nome_categoria}}</td>
				<td>
					@if($categoria->id_user == Auth::user()->id)
						{{Auth::user()->name}}
					@endif
				</td>
				<td>
					<div class='btn-group'>
						<a class='btn btn-sm btn-danger' href="categorias/{{$categoria->id}}/remove">
							Remover Categoria
						</a>
						<a href="categorias/{{$categoria->id}}/edit" class='btn btn-sm btn-primary'>Editar Categoria</a>
					
						<!--<a href="noticias/{{$categoria->id}}/create" class='btn btn-sm btn-default'>Cadastrar nova noticia</a>-->
					</div>
				</td>
			</tr>
			
		@endforeach
		</tbody>
	</table>
	
	<div class='container' style='text-align:center'>
		<span>{{ $categorias->links() }}</span>
	</div>
	
	
</div>

@endsection