@extends('layouts.app')

@section('content')
<body style="background-image: url('../../img/icon/earth3.jpg')">
<div class="container">
        <div class="row">
            <div class="col-12 shadow p-1 mb-3 rounded" style="background-image: url('../../img/icon/Banner/backgroundR.png'); width: 100%; height: 120px;">
                <!-- Carrega imagem do texto AlistPadua -->
					<a href='/'>
						<img src='../../img/icon/Banner/textoPrincipal.png' class='img-fluid' style='width: 75%; height: 100%; margin-top: 0.2%; 
							margin-left: 15%; opacity: 0.8; position:static'>
					</a>
					<a href='#' alt='tpadua7@gmail.com'>
							<img src='../../img/icon/Banner/textoEmail.png' class='img-fluid'
							 style='width: 60%; margin-top: -14%; margin-left: 30%; opacity: 0.8'> 
					</a>
            </div>
        </div>
 </div>
<br>
<div class="container-fluid">
    <div class="row">   
        <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3"></div>
        <div class="col-xs-8 col-sm-8 col-md-6 col-lg-8" 
            style="border: 1px solid #ddd; padding: 0%; margin: 0%; 
                background-color: #D3D3D3; opacity: 0.8">
            <h3 align='center'>Videos Informativos</h3>
            <hr>
            @foreach($videos_info as $v)
                <p align='center'><strong>Titulo:<strong></p>
                    <p align='center'> {{$v->titulo}}</p>

                    
                        <div class="embed embed-responsive-4by3" style="margin-left:25%">
                            <video src="/storage/videos/{{$v->nome_arquivo}}" alt="storage/videos/{{$v->nome_arquivo}}" 
                                    class="embed embed-item" style="width: 70%; height: 20%;margin: 0%" controls></video>
                        </div>
                <p align='center' style="margin-top: -70%">{{$v->descricao}}</p>
                <hr>
            @endforeach
            <div class="btn-group">
                <a href="/" class="btn btn-link" align='center' >
                    <span class="glyphicon glyphicon-home"></span>Voltar para o inicio</a>
            </div> 
        </div>
        <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3"></div>
    </div>

</div>


</body>

@endsection