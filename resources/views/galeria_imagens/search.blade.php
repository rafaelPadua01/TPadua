@extends('layouts.app')

@section('content')
<div class='container'>
	<div class='row'>
	<div class='col-xs-2 col-sm-2 col-md-2 col-lg-2'></div>
	<div class='col-xs-8 col-sm-8 col-md-8 col-lg-8'>
		
		<h3 align='center'>Resultado da Busca</h3>
		<hr>
		<a href='/galeria_imagens/index' class='btn btn-info'>Voltar para a página anterior</a>
		<br><br>
			<a align='center' href='/{{$search}}/show'>
					<div align='center' class='col-xs-4 col-sm-4 col-md-4 col-lg-4'  style='border: 1px solid #ddd; padding: 1%; margin-left: 0%'>
						
						<span class='glyphicon glyphicon-folder-open' style='font-size: 6rem'></span>
						<p style='font-size: 1rem'>{!! $search !!}</p>
						
						<div class='btn-group'>
					
							<!--<button type='submit' class='btn btn-danger'>
								<i class='glyphicon glyphicon-trash'></i>
									Remover Galeria
							</button>-->
							<br>
						</div>
						
					</div>
				</a>
				<br>
				<br>
				<br>
				
	</div>
	
	<div class='col-xs-2 col-sm-2 col-md-2 col-lg-2'></div>
	</div>
</div>


@endsection