@extends('layouts.app')

@section('content')
<div class='container'>
	<div class='row'>
		<div class='col-xs-12'>
			
			
			
		</div>
	</div>
	<div class='row'>
		<div class='col-xs-2'>
			
		</div>
		<div class='col-xs-8'>
			
		</div>
		<div class='col-xs-2'>
			
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
			<div class='col-xs-2 col-sm-2 col-md-2 col-lg-2'></div>
			<div class='col-xs-8 col-sm-8 col-md-8 col-lg-8'>
				<h1 style='text-align: center; font-size: 1.6rem'>Seja Bem Vindo ao @aliástpadua.com.br</h1>
				<hr>
				
			</div>
		</div>
	<div class='row'>
		<div class='col-xs-2 col-sm-2 col-md-2 col-lg-2'></div>
		<div class='col-xs-8 col-sm-8 col-md-8 col-lg-8'>
			<p style='font-size: 0.9rem' align='center'>Receba nossas atualizações por e-mail, sempre que houver uma nova notícia em nossa
			<br>
			página Você será notificado,dessa forma, esperamos que seja sempre um dos primeiros a saber quais as novidades na pagina,
					novas notícias<br> e tudo que está acontecendo no site:
					<b>@aliastpadua.com.br</b>
			</p>
		</div>
		<div class='col-xs-2 col-sm-2 col-md-2 col-lg-2'></div>		
	</div>
	<div class='row'>
		<div class='col-xs-2 col-sm-2 col-md-2 col-lg-2'></div>
		<div class='col-xs-8 col-sm-8 col-md-8 col-lg-8'>
			<!--<a class="navbar-brand" href="/" >
				<img src='../../img/icon/TpaduaDefault.bmp' alt="@aliastpadua" 
					style='background-color: #000;' class='img-thumbnail img-fluid img-responsive'>
			</a>-->
			
		</div>
		<div class='col-xs-2 col-sm-2 col-md-2 col-lg-2'></div>
	</div>
	<br>
	<br>
	<div class='row'>
		<div class='col-xs-2 col-sm-2 col-md-2 col-lg-2'></div>
		<div class='col-xs-8 col-sm-8 col-md-8 col-lg-8'>
			{!! Form::open(['url' => "newsletter/store", 'method' => 'post']) !!}
				<div class='form-group'>
					{!! Form::label('nome', 'Nome:') !!}
					{!! Form::text('nome_user_newsLetter', null,
						['class' => 'form-control', 'placeholder' => 'Nome Sobrenome'])!!}
				</div>
	
				<div class='form-group'>
					{!! Form::label('email', 'Email:') !!}
					{!! Form::email('email_user_newsLetter', null,
						['class' => 'form-control', 'placeholder' => 'email@email.com']) !!}
				</div>
		
				<div class='btn-group'>
					<a href='/' class='btn btn-danger'>Voltar</a>
					{!! Form::submit('Inscrever-se', ['class' => 'btn btn-success']) !!} 
		
				</div>
			{!! Form::close()!!}
		</div>
		<div class='col-xs-2 col-sm-2 col-md-2 col-lg-2'></div>
	</div>
</div>

@endsection