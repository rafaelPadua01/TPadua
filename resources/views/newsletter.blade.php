@extends('layouts.app')

@section('content')
<div class='container'>
	<div class='row'>
		<div class='col-xs-12'>
			<h1>Enviar Newsletter</h1>
			<hr>
			
		</div>
	</div>
	<div class='row'>
		<div class='col-xs-2'>
			row-2 col-1
		</div>
		<div class='col-xs-8'>
			row-2 col-2
		</div>
		<div class='col-xs-2'>
			row-2 col-2
		</div>
	</div>
	
</div>


<div class='content'>
	<div class='row'>
	
		<!-- verifica se usuario não está com sessão ativa e retorna um sucesso-->
	@if(\Session::has('success'))
		<div class='alert alert-success'>
			<p>{{\Session::get('success')}}</p>
		</div>
	@endif
	
	@if(\Session::has('failure'))
		<div class='alert alert-danger'>
			<p>{{\Session::get('failure')}}</p>
		</div>
		<br>
	@endif
	
	@if($errors->any())
		<ul>
			@foreach($errors as $error)
				<li>{{$error}}</li>
			@endforeach
		</ul>
		
	@endif
	
	<div class='container'>
		<div class='row'>
			<div class='col'>
	<h1 style='text-align: center'>Olá, Seja Bem Vindo ao @aliástpadua.com.br</h1>
	<hr>
	<br>
		<a class="navbar-brand" href="/">
			<img src='../../img/icon/TpaduaDefault.bmp' 
					alt="@aliastpadua" style='background-color: #000' class='img-responsive'>
		</a>
	<br>
	<br>
	<br>
	<br>
 <div class='col-sm-12'>
	<p>Receba nossas atualizações por e-mail, sempre que houver uma nova notícia em nossa página 
			Você será notificado,
			<br> dessa forma, esperamos que seja sempre um dos primeiros a saber quais as novidades na pagina,
					novas notícias<br> e tudo que está acontecendo no site:
					<b>@aliastpadua.com.br</b>
			</p>	
				
	
	{!! Form::open(['url' => "newsletter/store", 'method' => 'post']) !!}
		<div class='form-group' style='width:30%;'>
			{!! Form::label('nome', 'Nome:') !!}
				{!! Form::text('nome_user_newsLetter', null, ['class' => 'form-control', 'placeholder' => 'Nome Sobrenome'])!!}
		</div>
	
		<div class='form-group' style='width: 30%;'>
		{!! Form::label('email', 'Email:') !!}
			{!! Form::email('email_user_newsLetter', null, ['class' => 'form-control', 'placeholder' => 'email@email.com']) !!}
		</div>
		
		<div class='form-group'>
		<a href='/' class='btn btn-danger'>Voltar</a>
		{!! Form::submit('Inscrever-se', ['class' => 'btn btn-success']) !!} 
		
		</div>
	{!! Form::close()!!}
			</div>
		</div>
	</div>
</div>

@endsection