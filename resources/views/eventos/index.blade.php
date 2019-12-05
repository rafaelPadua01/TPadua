@extends('layouts.app')

@section('content')
<div class='container'>
	<div class='row'>
		<div class='col-xs-2 col-sm-2 col-md-2 col-lg-2'></div>
		<div class='col-xs-6 col-sm-6 col-md-6 col-lg-6'>
			<h1 align='center'>Eventos</h1>
			<hr>
			<div class='btn-group'>
				<a href='/home' class='btn btn-info'>
					<span class='glyphicon glyphicon-home'></span>
						Página Inicial
				</a>
				<a href='/eventos/{{Auth::user()->id}}/create' class='btn btn-info'>Cadastrar Eventos</a>
				<a href='/imagem_eventos' class='btn btn-info'>Galeria de Imagens</a>
			</div>
			<br><br>
			<table class='table table-striped table-hover table-bordered table-responsive'>
				<thead>
					<tr>
						<th>id</th>
						<th>Usuario(criador)</th>
						<th>Data(inicio)</th>
						<th>Hora(inicio)</th>
						<th>Descrição</th>
						<th>Ações</th>
					</tr>
				</thead>
				
				
				
					<tbody>
					@foreach($eventos as $evento)
						<tr>
						
							<td>{{$evento->id}}</td>
							@if($evento->id_user == Auth::user()->id)
								<td>{{Auth::user()->name}}</td>
							@endif
							<td> <?php echo date('d-m-Y', strtotime($evento->data_evento));?> </td>
							<td>{{$evento->hora_evento}}</td>
							<td>{!! str_limit($evento->descricao_evento, 100,'...') !!}</td>
							<td>
								<div class='btn-group'>
									<a href='/eventos/{{$evento->id}}/remove' class='btn btn-danger btn-xs'>Remover</a>
									<a href='/eventos/{{$evento->id}}/edit' class='btn btn-warning btn-xs'>Editar</a>
									<a href='/imagem_eventos/{{$evento->id}}/create' class='btn btn-info btn-xs'>Upload de Imagem</a>
								</div>
							</td>
						</tr>
					@endforeach
					</tbody>
				
			</table>
		</div>
		<div class='col-xs-3 col-sm-3 col-md-3 col-lg-3'></div>
	</div>
	<div class='row'>
		<div class='col-xs-3 col-sm-3 col-md-3 col-lg-3'></div>
		<div class='col-xs-6 col-sm-6 col-md-6 col-lg-6'>
			<div class='container' style='text-align:center'>
				<span>{{ $eventos->links() }}</span>
			</div>
		</div>
		<div class='col-xs-3 col-sm-3 col-md-3 col-lg-3'></div>
	
	</div>
</div>



@endsection