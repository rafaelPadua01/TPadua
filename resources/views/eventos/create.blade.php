@extends('layouts.app')

@section('content')
<nav>
	<div class='row'>
		<div class='container'>
			<h1>Cadastro de Eventos</h1>
			<hr>
			
			{!! Form::open(['url' => "eventos/$users->id/store", 'method' => 'post']) !!}
			
			<div class='form-group'>
				{!! Form::label('nome_evento', 'Nome do Evento:') !!}
					{!! Form::text('nome_evento', null, ['class' => 'form-control', 'placeholder' => 'Feira da Lua']) !!}
			</div>
			
			<div class='form-group'>
				{!! Form::label('data_evento', 'Data do Evento:') !!}
					{!! Form::date('data_evento', null, ['class' => 'form-control']) !!}
			</div>
			
			<div class='form-group'>
				{!! Form::label('hora_evento', 'Hora do Evento:') !!}
					{!! Form::time('hora_evento', null, ['class' => 'form-control']) !!}
			</div>
			
			<div class='form-group'>
				{!! Form::label('descricao_evento', 'Descrição do Evento:') !!}
					{!! Form::textarea('descricao_evento', null, ['class' => 'form-control']) !!}
			</div>
			
			<div class='form-group'>
			<a href='/eventos' class='btn btn-danger'>Voltar para pagina anterior</a>
				{!! Form::submit('Cadastrar', ['class' => 'btn btn-success']) !!}
				
					{{Form::hidden('id_user', $users->id)}}
			</div>
			{!! Form::close()!!}
		</div>
	</div>
</nav>
@endsection