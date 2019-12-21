@extends('layouts.app')

@section('content')
<div class='container'>
	<div class='row'>
		<div class='col-xs-2 col-sm-2 col-md-2 col-lg-2'></div>
		<div class='col-xs-12 col-sm-12 col-md-12 col-lg-12'>
			
						
						<!-- Tabela de usuarios administradores -->
						<style>
							#tableAdm
							{
								overflow: auto;
							}
						</style>
						<a href='/home' class='btn btn-info'>
							<i class='glyphicon glyphicon-home'></i>
							Voltar para a Página anterior
						</a>
						<table class='table table-striped table-bordered table-hover table-responsive'
								id='tableAdm'>
						<h3 style='text-align: center; background-color: #010101; color: #fff'>
								Usuarios Administradores
						</h3>
						<tr>
							<thead>
								<th>Nome</th>
								<th>Email</th>
							</thead>
						</tr>
						@foreach($users as $user)
						<tr>
						<tbody>
							
									
											
									<td>{{$user->name}}</td>
									<td>{{$user->email}}</td>
								
							</tbody>
						</tr>
						@endforeach
					</table>
			</div>
		</div>
		<div class='col-xs-2 col-sm-2 col-md-2 col-lg-2'></div>
	</div>
</div>


@endsection()