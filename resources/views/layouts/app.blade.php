<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@AliasTPádua.com.br</title>

    <!-- Scripts -->
    
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	
	
</head>
<body>
    <div id="app">
       <nav class='navbar navbar-inverse'>
            <div class="container-fluid">
            
			</div>
			<!-- Navbar -->
			<a class="navbar-brand" href="/"><img src='../../img/icon/TpaduaDefault.bmp' 
					alt="@aliastpadua" style=' width: 100%;margin-top: -8%;' class='img-responsive'>
			</a>
			
            <!--    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>
			-->
                <div class="collapse navbar-collapse" id="myNavbar">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
						 <!-- Authentication Links -->
                     
						<li class="nav-item">
							<!--<a class="nav-link"href="{{ route('login') }}">Login</a> -->
							</li>
						
						<li class="nav-item">
						<!--<a class="nav-linkl" href="{{ route('register') }}">Register</a>-->
						</li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav ">
                        <!-- Authentication Links -->
                        @guest
                           <!-- <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li> -->
                            @if (Route::has('register'))
                               <!-- <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li> -->
                            @endif
                        @else
                            <li class="nav-item dropdown">

                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span></span>
                                </a>
										
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
									<a href='/home'><span class='glyphicon glyphicon-home'>&nbsp </span>Inicio</a>
									<br>
									
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
													 <span class='glyphicon glyphicon-log-out'>&nbsp </span>
                                        {{ __('Logout') }}
                                    </a>
									
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
									
                                </div>
								
                            </li>
							
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
