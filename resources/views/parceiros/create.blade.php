@extends('layouts.app')

@section('content')
<div class='container'>
	@if($errors->any())
			<ul>
				@foreach($errors as $error)
					<li>{{$errror}}</li>
				@endforeach
			</ul>
	@endif
	
	<h1>Assinatura de Novos Parceiros</h1>
	<hr>
	{!! Form::open(['url' => 'parceiros/store', 'method' => 'post']) !!}
	
	<div class='row'>
		<div class='form-group'>
		{!! Form::label('nome_parceiro', 'Nome Parceiro:') !!}
			{!! Form::text('nome_parceiro', null, ['class' => 'form-control', 'placeholder' => 'Portal G1']) !!}
		</div>
		
		<div class='form-group'>
		{!! Form::label('url','Endereço(URL)') !!}
			{!! Form::url('url', null, ['class' => 'form-control', 'placeholder' => 'http://google.com']) !!}
		</div>
		
		<div class='form-group'>
		{!! Form::label('email', 'Email') !!}
			{!! Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'emailparceiro@email.com'])!!}
		</div>
		
		<div class='form-group'>
		<a href='/' class='btn btn-danger'>Voltar</a>
		{!! Form::submit('Cadastrar', ['class' => 'btn btn-success']) !!}
	
		
		</div>
	</div>
	{!! Form::close() !!}
</div>
	

@endsection