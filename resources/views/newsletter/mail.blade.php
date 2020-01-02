
<!doctype>
<html>
	<head>
		<meta charset='utf-8'>
		 <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>AliasTPadua.com.br @yield('title')</title>
																		
		<!-- Códigos Bootstrap 4 -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" 
			integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" 
																		crossorigin="anonymous">
		<!-- Icones do bootstrap 4 (fontawesome, poderia user o google material design tambem) -->
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
		
		<!--Scripts do Bootstrap 4 -->
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
			integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" 
			integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" 
		integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	
		<!-- script facebook,Novo botão compartilhar
				Agora com contador de compartilhamentos 
		-->
	</head>
	<body>
		
		<div class='container'>
			
			<div class='row'>
				<div class='col-xs-2 col-md-2 col-sm-2 col-lg-2'></div>
				<div class='col-xs-6 col-md-6 col-sm-2 col-lg-6' style='background-color: #fff'>
					<h1 style='text-align: center'><a href='tpadua.aliastpadua.com.br'>Newsletter AliasTPadua</a></h1>
					
					<!-- Menu drop down -->
						<div class=''>
							<div class=''>
								<p style='text-align: center'>Acompanhe nossas novas notícias e fique atualizado com as melhores informações de Brasília e região.</p>
										
								<h2 style='text-align: center'>Novas Noticias:</h2> 
								
								@foreach($noticias as $n)
									<label><strong>Titulo:</strong></label>
										{{$n->titulo}}
										<br>
									<label><b>Data / Hora</b></label>
										<?php echo date('d/m/y H:i:s', strtotime($n->created_at))?>
										
									<label><b>Fonte:</b></label>
										{{$n->fonte}}
										<br>
									<label><strong>Leia Mais:</strong></label>
										<a href='http://tpadua.aliastpadua.com.br/noticias/{{$n->id}}/show' class=''>Clique aqui...</a>
									<br>
								@endforeach
								
							</div>
						</div>
						<br>
				</div>
				<hr>
				
				<div class='col-xs-2 col-md-2 col-sm-2col-lg-2' style='text-align:center;'>
					<h4>Equipe AliasTPadua:</h4>
					
						<a href='http://tpadua.aliastpadua.com.br'>Página Inicial</a>
						|
						<a href='http://tpadua.aliastpadua.com.br/contacts'>Fale com a gente</a>
						|
						<a href='#'>Facebook</a>
						|
						<a href='#'>Email: tpadua7@gmail.com</a>
						<hr>
					</div>
			</div>
			
		</div>
	</body>

</html>






