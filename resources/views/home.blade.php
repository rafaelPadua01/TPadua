@extends('layouts.app')

@section('content')


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
	
		<script>
			$(function () {
			$('[data-toggle="tooltip"]').tooltip()
			});
		</script>

<body>
<nav>
<div class='container'>
	<div class='row'>
		<!-- Menu lateral -->
		
		<div class='col-2 shadow p-3 mb-5 rounded' style='background-color: #080808;
				color: #fff; padding: 0%' id='menu1'>
				<style>
			#menu1{
				overflow: auto;
				max-height: 510px;
			}
		</style>
			<h4 align='center' style='font-size: 0.9rem'>
				<i class='fas fa-bars'></i>
					Menu
			</h4>
			<hr style='background-color: #fff'>
			
			<!--<a href='profile/{{Auth::user()->id}}' class='btn btn-default btn-lg'>Perfil &nbsp
				<span class='glyphicon glyphicon-user'>&nbsp </span>
			</a> -->
			 
		<!-- Botões de seleção de área -->
		
		<a href='categorias' class='btn btn-default btn-sm' data-toggle="tooltip" data-placement="top"
			title="Lista de categorias e cadastro de noticias">
			<i class="fas fa-clipboard-list"></i>
				Categorias
		</a>
		
	<hr style='background-color: #fff'>
	
	<a href='noticias' class='btn btn-default btn-sm' data-toggle="tooltip" data-placement='top'
			title='Lista de noticias cadastradas'>
		<i class="far fa-newspaper"></i>
			Noticias
	</a>
	
	<hr style='background-color: #fff'>
	
	<a href='imagens' class='btn btn-default btn-sm' data-toggle='tooltip' data-placement='top'
		title='Imagens principais das noticias'>
		<i class="fas fa-camera-retro"> </i>
		Imagens
	</a>
	
	<hr style='background-color: #fff'>
	<a href='galeria_imagens/index' class='btn btn-default btn-sm' data-toggle='tooltip' data-placement='top'
			title='Galeria de imagens das notícias'>
			<i class='fas fa-images'></i>
			Galeria
	</a>
	<hr style='background-color: #fff'>
	<!-- Botão deacesso aos Videos -->
	<a href='video_noticia/show' class='btn btn-default btn-sm' data-toggle='tooltip' data-placement='top'
			title='Videos Das notícias'>
		<i class='fas fa-video'></i>
			Galeria de Noticias
	</a>
	<hr style='background-color: #fff'>
	<!-- Botão deacesso aos Videos -->
	<a href='videos' class='btn btn-default btn-sm' data-toggle='tooltip' data-placement='top'
			title='Videos do menu informartivo'>
		<i class='fas fa-video'></i>
			Galeria de Informativos
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
	<a href='parceiros' class='btn btn-default btn-sm' data-toggle='tooltip' data-placement='top'
		title='Lista de parceiros'>
		<i class='fas fa-wine-bottle'></i>
			Parceiros
	</a>
	<!-- Botão para criação de Novos eventos, atualização e etc -->
	<hr style='background-color: #fff'>
	<a href='eventos' class='btn btn-default btn-sm' data-toggle='tooltip' data-placement='top'
		title='Lista de Eventos cadastrados'>
		<i class='fas fa-calendar-check'></i>
		Eventos 
		
	</a>
	<!-- Botão de acesso ao formulário de configurações -->
	<hr style='background-color: #fff'>
	<a href='/users/{{Auth::user()->id}}/edit' class='btn btn-default btn-sm' data-toggle='tooltip' data-placement='top'
			title='Configurações de usuário'>
				<i class='fas fa-user-cog'></i>
				Configurações
		
	</a>
	<br>
	<!-- Botão de cadastro de novo administrador -->
	<hr style='background-color: #fff'>
	<a href='register' class='btn btn-default btn-sm' data-toggle='tooltip' data-placement='top'
		title='Cadastro de novos Administradores'>
				<i class='fas fa-user-cog'></i>
				Cadastrar Novo Administrador
		
	</a>
<hr style='background-color: #fff'>
	
	</div>
		<!-- Div Principal -->
		<div class='col-8 shadow p-3 mb-5 rounded' align='center'>
			<h5 align='center' style='font-size: 1.2rem'>Seja bem vindo <b> Sr.{{Auth::user()->name}}</b></h5>
			<hr>
			<br>
			
			<!-- Div central com os menus de acesso Rápido -->
			<div class='col-12' style='display: inline-block; padding: 0%'>
	
				<!-- Botão de Novos Comentarios -->
				<a align='center' href='/comentarios' style='font-size: 0.8rem'>
					<div class='col-4 shadow p-3 mb-5 rounded' style='display: inline-block; padding: 2%'>
						<h1 style='font-size: 0.7rem'>Novos Comentários</h1>
							<i class='fas fa-comments' style='font-size: 2rem'></i>
							<hr>
						@if(empty($data))
							Sem novos comentários
						@else 
							@foreach($data as $notification)
								Novo Comentário
								<i class='fas fa-exclamation' style='font-size: 1.2rem; color: red'></i>
								
							@endforeach
						@endif
					</div>
				</a>
				<!-- Botão de Noticias recebidas -->
				<a align='center' href='/contacts_news'  style='font-size: 0.8rem'>
					<div class='col-4 shadow p-3 mb-5 rounded' style='display: inline-block; padding: 2%'>
						<h1 style='font-size: 0.7rem'>Notícias Recebidas</h1>
						<i class='fas fa-newspaper' style='font-size: 2rem;'></i>
						<hr>
						@if(empty($contacts_news->id))
							nenhuma noticia recebida
						@else
							Veja as noticias
						@endif
						
						<br>
					</div>
				</a>
				
				<!-- Botão de novos usuarios da newsletter -->
				<a href='/newsletter' style='font-size: 0.8rem'>
					<div class='col-4 shadow p-3 mb-5 rounded' style='display: inline-block'>
						<h1 style='font-size: 0.7rem'>Usuários da Newsletter</h1>
						<i class='fas fa-users' style='font-size: 2rem;'></i>
						<hr>
							@if(empty($user_news_letters) || $user_news_letters->count() == 0)
								Usuários da newsletter
							@else
								@if($user_news_letters->count() > 0)
									usuarios da newsletter:
									(
										{{$user_news_letters->count()}}
									)
								@endif
							@endif
						<br>
					</div>
				</a>
				
				<!-- Botão dos Administradores -->
				<a href='/users' style='font-size: 0.8rem'>
				<div class='col-4 shadow p-3 mb-5 rounded' style='display: inline-block'>
					<h1 style='font-size: 0.7rem'>Administradores</h1>
					<i class='fas fa-user-shield' style='font-size: 2rem;'></i>
					<hr>
						@if($users->count() >= 0)
							Administradores: 
							(
								{{$users->count()}}
							)						
						@endif
					<br>
				</div>
				</a>
				
			</div>
		</div>
			
			
		<!-- Div Menu 2 --> 
		<style>
			#menu2
			{
				overflow: auto;
			}
		</style>
	<div class='col-2 shadow p-3 mb-5 rounded' style='background-color: #080808; 
				color: #fff;' id='menu2'>
			<h4 align='center' style='font-size: 0.9rem'>
				<i class='fas fa-bars'></i>
						Menu 2
			</h4>
			
			<hr style='background-color: #fff'>
			
			<!-- Botões Enviar Newsletter, notificações e outros -->
				<!-- Botão de Envio de Notificações -->
			
				<button  class='btn  btn-info btn-sm' id='btn_push' data-toggle='tooltip' data-placement='top'
					title='Enviar notificações de novas notícias.'>
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
				<a href='newsletter/create' class='btn btn-sm btn-info' data-toggle='tooltip' data-placement='top'
					title='Abre a lista de usuarios cadastrados e dispara a newsletter'>
					<i class='fas fa-rss-square'></i>	Enviar NewsLetter
				</a>
				<hr style='background-color: #fff'>	
				
				<a href="/denunciaComentario" class="btn btn-info btn-sm" data-toggle="tooltip" data-placement='top' 
					title="Exibe os Comentários denunciados">
					<i class='fas fa-exclamation-circle' ></i>
							Comentários denunciados	
				</a>
				<hr style='background-color: #fff'>		
			</div>
		</div>
	</div>
</nav>
</body>
@endsection
