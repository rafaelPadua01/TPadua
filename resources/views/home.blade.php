@extends('layouts.app')

@section('content')

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
	<!--@toastr_css  -->
	
	<!-- Códigos Bootstrap 4 -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" 
			integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" 
																		crossorigin="anonymous">
		<!-- Icones do bootstrap 4 (fontawesome, poderia user o google material design tambem) -->
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
		
		<!--Scripts do Bootstrap 4 -->
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
			integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" 
			integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" 
		integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	
	
</head>
<body>
<nav>
<div class='container'>
	<div class='row'>
		<!-- Menu lateral -->
		<style>
			#menu1{
				overflow: auto;
			}
		</style>
		<div class='col-3 shadow p-3 mb-5 rounded' style='background-color: #080808;
				color: #fff' id='menu1'>
			<h4 align='center'>
				<i class='fas fa-bars'></i>
					Menu
			</h4>
			<hr style='background-color: #fff'>
			
			<h4 align='center'>
				Seja bem vindo
				<br>
				<b> Sr.{{Auth::user()->name}}</b>
			</h4>
			<br>
			<!--<a href='profile/{{Auth::user()->id}}' class='btn btn-default btn-lg'>Perfil &nbsp
				<span class='glyphicon glyphicon-user'>&nbsp </span>
			</a> -->
			<hr> 
	<!-- Botões de seleção de área -->
	<a href='categorias' class='btn btn-default'>
			<i class="fas fa-clipboard-list"></i>
			Categorias
		
	</a>
	<br>
	<hr style='background-color: #fff'>
	
	<a href='noticias' class='btn btn-default'>
		<i class="far fa-newspaper"></i>
			Noticias
	</a>
	
	<hr style='background-color: #fff'>
	
	<a href='imagens' class='btn btn-default'>
		<i class="fas fa-camera-retro"> </i>
		Imagens
	</a>
	
	<hr style='background-color: #fff'>
	<a href='galeria_imagens/index' class='btn btn-default'>
			<i class='fas fa-images'></i>
			Galeria
	</a>
	
	<hr style='background-color: #fff'>
	<!-- Botão deacesso aos Videos -->
	<a href='videos' class='btn btn-default'>
		<i class='fas fa-video'></i>
			Videos
	</a>
	<hr style='background-color: #fff'>
	<!--
	<a href='https://webmail-seguro.com.br/' class='btn btn-default btn-lg'>Mail Marketing
		&nbsp
		<span class='glyphicon glyphicon-envelope'></span>
	</a >
	<hr style='background-color: #fff'>
	-->
	<!-- Botão dos parceiros -->
	<a href='parceiros' class='btn btn-default'>
		<i class='fas fa-wine-bottle'></i>
			Parceiros
	</a>
	<!-- Botão para criação de Novos eventos, atualização e etc -->
	<hr style='background-color: #fff'>
	<a href='eventos' class='btn btn-default'>
		<i class='fas fa-calendar-check'></i>
		Eventos 
		
	</a>
	<!-- Botão de acesso ao formulário de configurações -->
	<hr style='background-color: #fff'>
	<a href='/users/{{Auth::user()->id}}/edit' class='btn btn-default'>
				<i class='fas fa-user-cog'></i>
				Configurações
		
	</a>
	<br>
	<!-- Botão de cadastro de novo administrador -->
	<hr style='background-color: #fff'>
	<a href='register' class='btn btn-default'>
				<i class='fas fa-user-cog'></i>
				Cadastrar Novo Administrador
		
	</a>
<hr style='background-color: #fff'>
	
	</div>
		<!-- Div Principal -->
		<div class='col-6 shadow p-3 mb-5 rounded' align='center'>
			<br>
			<br>
			<!-- Tabela de Comentários -->
			<table class='table table-striped table-hover table-bordered table-responsive'>
				<h3 style='text-align: center; background-color: #010101;
					color: #fff; margin-bottom: 0%'>Novos Comentários</h3>
				<tr>
				<thead>
					
						<th>Nome</th>
						<th>Comentario</th>
						<th>Noticia</th>
						<th>Ações</th>
										
					
				</thead>
				</tr>
				@foreach($comentarios as $comentario)
				<tr>				
				<tbody>
					
				
						<td>{!! $comentario->nome !!}</td>
						<td>{!! $comentario->comentario!!}</td>
						
						<td>
							@foreach($noticias as $noticia)
								@if($noticia->id == $comentario->id_noticia)
									{{$noticia->titulo}}
								@endif
							@endforeach
						</td>
							
							
						
						
						<td>
							<a class='btn btn-danger' href='/comentarios/{{$comentario->id}}/remove'>Remover</a>
						</td>
						
				
					</tbody>
				</tr>
					@endforeach
			</table>
			<br>
				
			<!-- Div Das noticias Enviadas -->
				
			<table class='table table-striped table-hover table-bordered table-responsive'>
				<h3 style='text-align: center; background-color: #010101;
					color: #fff'>Notícias Recebidas</h3>
				<thead>
					<tr>
						<th>ID</th>
						<th>Nome</th>
						<th>Email</th>
						<th>Noticia</th>
						<th>Data de Envio</th>
						<th>Ações</th>
					</tr>
				</thead>
				@foreach($contacts_news as $c_news)
				<tr>
				<tbody>
					
					
						<td>{!! $c_news->id !!}</td>
						<td>{!! $c_news->nome !!}</td>
						<td>{!! $c_news->email!!}</td>
						<td>{!! str_limit($c_news->noticia, 55, '...') !!}</td>
						<td>{!! $c_news->created_at !!}</td>
								
						<td>
							<a href='contacts_news/{{$c_news->id}}/show'>Visualizar</a>
							|
							<a href='contacts_news/{{$c_news->id}}/edit'>Editar</a>
							|
							<a href='contacts_news/{{$c_news->id}}/remove'>
								<i class='fas fa-trash'></i>
										Remover
							</a>
							|
									
						</td>
					
				</tbody>
				</tr>
				@endforeach
			</table>
				
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
						
						<!-- Tabela de usuarios administradores -->
						<style>
							#tableAdm
							{
								overflow: auto;
							}
						</style>
						<table class='table table-striped table-bordered table-hover table-responsive'
								id='tableAdm'>
						<h3 style='text-align: center; background-color: #010101; color: #fff'>
								Usuarios Administradores
						</h3>
						<tr>
							<thead>
								<th>Nome</th>
								<th>Email</th>
							</thead>
						</tr>
						@foreach($users as $user)
						<tr>
						<tbody>
							
									
											
									<td>{{$user->name}}</td>
									<td>{{$user->email}}</td>
								
							</tbody>
						</tr>
						@endforeach
					</table>
			</div>
		<!-- Div Menu 2 --> 
		<style>
			#menu2
			{
				overflow: auto;
			}
		</style>
	<div class='col-3 shadow p-3 mb-5 rounded' style='background-color: #080808; 
				color: #fff;' id='menu2'>
			<h4 align='center'>
				<i class='fas fa-bars'></i>
						Menu 2
			</h4>
			
			<hr style='background-color: #fff'>
			
			<!-- Botões Enviar Newsletter, notificações e outros -->
				<!-- Botão de Envio de Notificações -->
			
				<button  class='btn btn-sm btn-info' id='btn_push'>
					<i class='fas fa-bell'></i> 
						Notificações de Notícias
				</button>
				<script>
					function spawnNotification(opcoes)
					{
						var n = new Notification(opcoes.title, opcoes.opt);
			
						if(opcoes.link !== '')
						{
							n.addEventListener('click', function(){
							n.close();
							window.focus();
							window.location.href = opcoes.link;
					
							});
						}
					}
		
					document.getElementById('btn_push').onclick = evt => {
						spawnNotification({
						opt: {
							body: 'Temos novas Noticias que podem te interessar, Visite nossa página para conferir',
							icon: 'img/icon/thumbTpadua.jpg'
						},
								title: 'AliaTPádua Diz:',
								link: 'http://tpadua.aliastpadua.com.br'
				
						});
					}
					</script>
				<hr style='background-color: #fff'>
				
				<!-- Botão de disparo NewsLetter -->
				<a href='newsletter/create' class='btn btn-sm btn-info'>
					<i class='fas fa-rss-square'></i>	Enviar NewsLetter
				</a>
				<hr style='background-color: #fff'>	
				
				
			
			</div>
		</div>
	</div>
</nav>
</body>
@endsection
