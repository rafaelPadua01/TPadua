@extends('layouts.app')

@section('content')
<div class='container'>
	<div class='row'>
		<div class='col-xs-2 col-sm-2 col-md-2 col-lg-2'></div>
		<div class='col-xs-12 col-sm-12 col-md-12 col-lg-12'>
			<!-- Verifica se a variavel está vazia -->
			@if(empty($user_news_letters))
				<script>window.alert('Nenhum usuario cadastrado ainda')</script>
				<a href='/home' class='btn btn-info'>
					<i class='glyphicon glyphicon-home'></i>
					Voltar para a Página anterior
				</a>
				<!-- se possuir 1 ou mais registros retorna a tabela-->
			@else
				<a href='/home' class='btn btn-info'>
					<i class='glyphicon glyphicon-home'></i>
					Voltar para a Página anterior
				</a>
					<!-- Tabela de usuarios da newsletter -->
				<!-- Tabela de usuarios cadastrados na newsletter -->
					<div id='overflowA'>
					<!-- Scroll da table -->
					<style>
					
					 #overflowA
					{
						
						overflow: auto;
					}	
					</style>
					<table class='table table-striped table-hover table-bordered table-responsive' 
							id='overflowA'>
						<h3 style='text-align: center; background-color: #010101;
								color: #fff;'>Novos Usuarios da NewsLetter
						</h3>
						
					<tr>
						<thead>
							<th>Nome</th>
							<th>Email</th>
							<th>Data de Assinatura</th>
							<th>Data de Atualização</th>
							<th>Ações</th>
							
						</thead>
					</tr>
						@foreach($user_news_letters as $user_news_letter)
						<tr>
							<tbody>
							
						
								<td>{!! $user_news_letter->nome_user_newsLetter !!}</td>
								<td>{!! $user_news_letter->email_user_newsLetter !!}</td>
								<td>{!! $user_news_letter->created_at !!}</td>
								<td>{!! $user_news_letter->updated_at !!}</td>
								
								<td style='display: inline-block'>
									<a class='btn btn-danger' href='/newsletter/{{$user_news_letter->id}}/remove'>Remover</a>
									
									<a class='btn btn-primary' href='newsletter/{{$user_news_letter->id}}/edit'>Atualizar</a>
								</td>
							
							
							</tbody>
						</tr>
								@endforeach
						
						</table>
					</div>
				<br>
			
			@endif
			<div align='center'>
			{{$user_news_letters->links()}}
			</div>
		</div>
		<div class='col-xs-2 col-sm-2 col-md-2 col-lg-2'></div>
	</div>
</div>


@endsection