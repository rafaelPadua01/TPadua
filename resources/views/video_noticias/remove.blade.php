@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2"></div>
        <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8" align='center'>
            <h3>Remover {{$video_noticias->titulo}} ?</h3>
            <hr>
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <form action="/video_noticia/{{$video_noticias->id}}/destroy">
                
               <h3 style="text-decoration: blink; color: red">Tem certeza que deseja remover o arquivo de video permanentemente ?</h3>
                <p> 
                    <label>Titulo:</label> {{$video_noticias->titulo}}
                    <label>descrição:</label> {{$video_noticias->descricao}}
                    <label>Data de Upload:</label> {{$video_noticias->created_at}}
                </p>
                  
                
              

                @if($noticias->id == $video_noticias->id_noticia)
                   
               
                
                <p><label>Noticia:</label> {{$noticias->titulo}}</p>
              
                @endif
                <div class="btn-group">
                     <a class="btn btn-success" href="/video_noticia/show">Voltar</a>
                    <button type="submit" class="btn btn-danger">
                        <span class="glyphicon glyphicon-trash"></span> Remover</a>
                    </button>
                      
                </div>
               
            </form>  
            </div>      
        </div>
        <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2"></div>
    </div>
</div>







@endsection