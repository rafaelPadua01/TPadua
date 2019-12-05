@extends('layouts.app');

@section('content');
<div class='container'>
	<h1>Formulário de Perfil de Usuario</h1>
	<hr>
	@if($errors->any())
		<ul class="alert alert-warning">
			@foreach($errors->all() as $error)
				<li>{{$error}}</li>
			@endforeach
		
		</ul>
	@endif
	
	{!! Form::open(['url' => 'profile/store']) !!}
	
	<!-- Inputs do form -->
	<div class='form-group'>
	{!! Form::label('data_nascimento', 'data de nascimento:' ) !!}
		{!! Form::date('data_nascimento', null, ['class' => 'form-control']) !!}
	</div>
	
	<div class='form-group'>
	{!! Form::label('lb_endereco', 'Endereco:')!!}
		{!! Form::text('endereco', null, ['class' => 'form-control']) !!}
	
	</div>
	
	<div class='form-group'>
		{!! Form::label('telefone', 'Telefone:') !!}
			{!! Form::text('telefone', null, ['class' => 'form-control'])!!}
	</div>
	
	<div class='form-group'>
	{!!Form::hidden('id_user', Auth::user()->id, ['class' => 'form-control']) !!}
	
	{!! Form::submit('Cadastrar Perfil', ['class' => 'btn btn-success']) !!}
	</div>
	{!! Form::close()!!}
</div>
@endsection;