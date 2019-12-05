
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@liásTPadua.com.br - O informativo do Distrito Federal e região</title>

        <!-- Fonts -->
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
	
		<nav class='navbar navbar-inverse'>
		
			<div class='container-fluid'>
		
					<button type='button' class='navbar-toggle' data-toggle='collapse'
						data-target='#myNavbar'>
							<span class='icon-bar'></span>
							<span class='icon-bar'></span>
							<span class='icon-bar'></span>
						</button>
					
						
				</div>
				<a class="navbar-brand" href="/"><img src='../../img/icon/TpaduaDefault.bmp' 
					alt="@aliastpadua" style='margin-top: -8%;' class='img-responsive'></a>
				<div class='collapse navbar-collapse' id='myNavbar'>
				
					<ul class="nav navbar-nav">
					
						<!--<li class='active'><a href="#">Home</a></li>-->
						<li class='dropdown'>
							<a class='dropdown-toggle' data-toggle='dropdown' href='#'>Categorias 
								<span class="caret"></span></a>
								
								
								<ul class="dropdown-menu">
								
								@foreach($categorias as $categoria)
									<li><a href="#">1</a></li>
									<li><a href="#">Noticia 1-2</a></li>
									<li><a href="#">Noticia 1-3</a></li>
								@endforeach
								</ul>
						
								
						</li>
						<li><a href="#">Page 2</a></li>
						<li><a href="#">Page 3</a></li>
					</ul>
					
					
					<ul class="nav navbar-nav navbar-right">
						<li><a href="#"><span class="glyphicon glyphicon-user">
									</span> Sign Up</a></li>
						<li><a href="/home"><span class="glyphicon glyphicon-log-in">
									</span> Login</a></li>
					</ul>
				</div>
			</div>
		</nav>
	
			<!--<ul class="nav navbar-nav">
			<!--	<li><a href='#' style='margin-top: 8%'>
					<span class="glyphicon glyphicon-align-justify">
					</span></a></li>
					
				</a></li>
				
				<li><a href="#"><img src='../../img/icon/TpaduaDefault.bmp' 
					alt="@aliastpadua" style='width: 15%; 
						margin-left: 43%; margin-top: -8%; position: static'></a></li>
			</ul> -->
		</div>
	</nav>
	<!-- Container do carrosel -->
	<div class="container" style='border: 1px solid #ccc; height: 15%; width: 80%; background-color: #ccc'>
		Carroussel Aqui ...
	</div>

	<br>
	
	<nav class="container" style='border: 1px solid #ccc; height: 50%; width: 40%; background-color: #ccc'>
		<div class='container-header' style='background-color: #fff; height: 15%;'>
			<h4 style='font-family: arial; sans-serif; font-size: 18px; 
						text-align: center; margin-top: 1%; padding: 3%;'>Titulo da Noticia</h4>
		</div>
		<hr>
		<div class='container-body' style='background-color: #fff;'>
			<p style='font-family: arial; sans-serif; text-align: center; color: #000;'>
				Lorem Ipsum is simply dummy text of the printing and typesetting industry.
				<br>
				Lorem Ipsum has been the industry's standard dummy text ever since the 
				<br>1500s, when an unknown printer took a galley of type and scrambled it
				<br>to make a type specimen book. It has survived not only five centuries,
				<br> but also the leap into electronic typesetting, remaining essentially unchanged.
				<br> It was popularised in the 1960s with the release of Letraset sheets containing
				<br> Lorem Ipsum passages, and more recently with desktop publishing software like Aldus
				<br> PageMaker including versions of Lorem Ipsum.
			</p>
		</div>
		
		
		<div class="container-footer">
			Autor: 				| 	Data: 	|
		</div>
	</nav>
	
 <!--
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                   Tpadua
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Docs</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://blog.laravel.com">Blog</a>
                    <a href="https://nova.laravel.com">Nova</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div>
        </div> -->




    </body>
</html>
