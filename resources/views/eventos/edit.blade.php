@extends('layouts.app')

@section('content')
<nav>
	<div class='row'>
		<div class='container'>
			<h1>Cadastro de Eventos</h1>
			<hr>
			
			{!! Form::open(['url' => "eventos/$eventos->id/update", 'method' => 'put']) !!}
			
			<div class='form-group'>
				{!! Form::label('nome_evento', 'Nome do Evento:') !!}
					{!! Form::text('nome_evento', $eventos->nome_evento, ['class' => 'form-control', 'placeholder' => 'Feira da Lua']) !!}
			</div>
			
			<div class='form-group'>
				{!! Form::label('data_evento', 'Data do Evento:') !!}
					{!! Form::date('data_evento', $eventos->data_evento, ['class' => 'form-control']) !!}
			</div>
			
			<div class='form-group'>
				{!! Form::label('hora_evento', 'Hora do Evento:') !!}
					{!! Form::time('hora_evento', $eventos->hora_evento, ['class' => 'form-control']) !!}
			</div>
			
			<div class='form-group'>
				{!! Form::label('descricao_evento', 'Descrição do Evento:') !!}
					{!! Form::textarea('descricao_evento', $eventos->descricao_evento, ['class' => 'form-control']) !!}
			</div>
			
			<div class='form-group'>
			<a href='/eventos' class='btn btn-danger'>Voltar para pagina anterior</a>
				{!! Form::submit('Atualizar', ['class' => 'btn btn-success']) !!}
				
					
			</div>
			{!! Form::close()!!}
		</div>
	</div>
</nav>
@endsection