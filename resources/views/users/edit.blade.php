@extends('layouts.app')

@section('content')
<div class='container'>
	<div class='row'>
		<div class='col-xs-2 col-sm-2 col-md-2 col-lg-2'></div>
		<div class='col-xs-6 col-sm-6 col-md-6 col-lg-6'>
			<h4 align='center'>Edição de configurações de usuário</h4>
			<hr>
			
			{!! Form::open(['url' => "/users/Auth:user()->id/update", 'method' => 'PUT'])!!}
			<div class='form-group'>
				{!! Form::label('name', 'Nome:') !!}
					{!! Form::text('name',  Auth::user()->name, ['class' => 'form-control'])!!}
			</div>
		
			<div class='form-group'>
				{!! Form::label('email', 'Email:') !!}
				{!! Form::email('email', Auth::user()->email, ['class' => 'form-control'])!!}
			</div>
		
			<div class='form-group'>
				{!! Form::label('password','Nova Senha:') !!}
				{!! Form::password('password', null, ['class' => 'form-control'])!!}
			</div>
		
			<div class='form-group' align='center'>
				<div class='btn-group'>
				<a href='/home' class='btn btn-danger'>
					<i class='glyphicon glyphicon-home'></i>
						página inicial
				</a>
				{!! Form::submit('Atualizar', ['class' => 'btn btn-success']) !!}
				</div>
			</div>
			{!! Form::close() !!}
			
		</div>
		<div class='col-xs-2 col-sm-2 col-md-2 col-lg-2'></div>
	</div>

</div>

@endsection