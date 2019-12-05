@extends('layouts.app')

@section('content')

<div class='container'>
	<div class='row'>
		<div class='col-xs-2 col-sm-2 col-md-2 col-lg-2'></div>
		<div class='col-xs-12 col-sm-12 col-md-12 col-lg-12'>
			<h1 style='text-align: center'>Fale com a gente</h1>
			<hr>
			
		</div>
		<div class='col-xs-2'></div>
	</div>
	<div class='row'>
		<div class='col-xs-2 col-sm-2 col-md-2 col-lg-2'></div>
		<div class='col-xs-8 col-sm-8 col-md-8 col-lg-8 shadow p-2 mb-3 rounded ' style='background-color: #080808; display: inline-block'>
			<h4 style='text-align: center;color: #fff'>Porque não nos aproxímamos ainda mais ?</h4>
			<hr>
			<div align='center'>
				<i class='glyphicon glyphicon-envelope' style='color: #fff; font-size: 3rem; width: 25%'></i>
				
				<i class='glyphicon glyphicon-earphone' style='color: #fff; font-size: 3rem; text-align: center; width: 45%'></i>
				
				<i class='glyphicon glyphicon-duplicate' style='color: #fff;font-size: 3rem; width: 25%'></i>
				
			</div>
				
		</div>
		<div class='col-xs-2 col-sm-2 col-md-2 col-lg-2'></div>
	</div>
	<div class='row'>
		<div class='col-xs-2'></div>
		
		<div class='col-xs-8 col-sm-8 col-md-8 col-lg-8 shadow p-2 mb-3 rounded' style='background-color: #080808; display-inline:block'>
		<div class='col-xs-4 col-sm-4 col-md-4 col-lg-4'>
			<p  style='font-size: 1rem; color: #fff'>
				 Email: <strong>tpadua7@gmail.com</strong>
			</p>
		</div>	
		<div class='col-xs-4 col-sm-4 col-md-4 col-lg-4'>
			<p style='font-size: 1rem; color: #fff'>
				What's App: <strong>...</strong>
			</p>
		</div>
		<div class='col-xs-4 col-sm-4 col-md-4 col-lg-4'>
			<p style='font-size: 1rem; float: left;color: #fff;'>
					Envie sua Notícia: 
									<!-- Esta ancora chama uma janela modal contendo o form de inserção de noticia  -->
									
									<strong><a href='#' data-toggle='modal' data-target='#exampleModal'>
												<b>Clique Aqui</b></a></strong>
								
			</p>
							<!-- Janela Modal Do form de Envio de Notícias -->
							<div class='modal fade' id='exampleModal' tabindex='1' role='dialog' 
										aria-labelledby='exampleModalLabel' aria-hidden='true'>
								<div class='modal-dialog' role='document'>
									<div class='modal-content'>
										<div class='modal-header'>
										<!-- Cabeçalho da Janela Modal -->
										<button type='button' class='close' data-dismiss='modal' aria-label='close'>
												<span aria-hidden='true'>&times;</span>
											</button>
											<h3 class='modal-title' id='exampleModalLabel' 
													style='color: #000; text-align: center'>
												Formulário De Envio de Notícias
											</h3>
											
										</div>
										<!-- Corpo da Janela modal, aqui deve conter o Form -->
										<div class='modal-body' style='color: #000'>
										<p style='text-align: center'>
											Sua Notícia será avaliada, sendo aprovada será 
												postada em nosso site de noticias.
											<br>
											Não esqueça de preencher todos os campos corretamente 
											<br>
											para que possamos entrar em contato.
										
										</p>
										<br>
										
										<form action='contacts_news/store'>
											<div class='form-group'>
												<label>Nome:</label>
												<input type='text' name='nome' id='nome' required>
											</div>
											<br>
											
											<div class='form-group'>
												<label>Email</label>
												<input type='email' name='email' id='email' required>
											</div>
											<br>
											
											<div class='form-group'>
											<label>Notícia:</label>
											<br>
												<textarea id='noticia' name='noticia' required></textarea>
											</div>
												<button type='submit' class='btn btn-success'>Enviar Notícia</button>
											</form>
										</div>
										
										<div class='modal-footer'>
											<button type='button' class='btn btn-default' data-dismiss='modal'>Close</button>
											
										</div>
										
									</div>
				</div>
			</div>
		</div>
			
		</div>
		<div class='col-xs-2'></div>
	</div>
</div>




@endsection