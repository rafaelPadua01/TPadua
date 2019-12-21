@extends('layouts.app')

@section('content')
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
			<h3>Atualizar as informações do Usuario ? 	</h3>

	<hr>
	
 <div class='col-sm-12'>
	
	
		
	
	{!! Form::open(['url' => "newsletter/$user_news_letter->id/update", 'method' => 'put']) !!}
		<div class='form-group' style='width:30%;'>
			{!! Form::label('nome', 'Nome:') !!}
				{!! Form::text('nome_user_newsLetter', $user_news_letter->nome_user_newsLetter, ['class' => 'form-control', 'placeholder' => 'Nome Sobrenome'])!!}
		</div>
	
		<div class='form-group' style='width: 30%;'>
		{!! Form::label('email', 'Email:') !!}
			{!! Form::email('email_user_newsLetter', $user_news_letter->email_user_newsLetter, ['class' => 'form-control', 'placeholder' => 'email@email.com']) !!}
		</div>
		
		<div class='form-group'>
		
		{!! Form::submit('Atualizar', ['class' => 'btn btn-success']) !!} 
		<a href='/newsletter' class='btn btn-danger'>Voltar</a>
		</div>
	{!! Form::close()!!}
			</div>
		</div>
	</div>
</div>

@endsection