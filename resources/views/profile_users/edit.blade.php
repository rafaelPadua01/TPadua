@extends('layouts.app')

@section('content')
<div class='container'>
	<h1>Editar Perfil</h1>
	@if($errors->any())
		<ul>
			@foreach($errors as $error)
				<li>{{$error}}</li>
			@endforeach
			<li></li>
		</ul>
	@endif
	
	{!! Form::open(['url' => "profile/$profile->id/update", 'method' => 'put']) !!}
	
	<!--Inputs do Form -->
	<div class='form-group'>
	{!! Form::label('data_nascimento', 'Data Nascimento:')!!}
		{!! Form::date('data_nascimento', $profile->data_nascimento, ['class' => 'form-control'])!!}
	</div>	
	
	<div class='form-group'>
	{!! Form::label('endereco', 'Endereco:')!!}
		{!! Form::text('endereco', $profile->endereco, ['class' => 'form-control'])!!}
	</div>
	<div class='form-group'>
	{!! Form::label('telefone', 'Telefone:')!!}
		{!! Form::text('telefone', $profile->telefone, ['class' => 'form-control'])!!}
	</div>
	<div class='form-group'>
	{!! Form::hidden('id_user', $profile->id_user) !!}
	
		{!! Form::submit('Atualizar Perfil', ['class' => 'btn btn-success'])!!}
	</div>	
	{!! Form::close()!!}
</div>


@endsection
