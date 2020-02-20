@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3"></div>

        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" align='center'>
            <h3>Galeria de Videos de notícias</h3>
            
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="padding: 0%; margin: 0%">
                <div class="row justify-content-center">
                <div clas="col-xs-12 col-sm-12 col-md-12 col-lg-12a" style="padding: 0%; margin: 0%">
                     <h3 align="center"><strong>Videos:</strong></h3>
                     <hr>
                        <!-- Loop que Carregar os videos -->
                        @foreach($video_noticias as $v_n)
                        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4" style="background-color: #fff; border: 1px solid #D3D3D3; padding: 1%; margin: 0%">
                        <p><strong>{{$v_n->titulo}}<strong></p> 
                            <div class="embed-reponsive embed-responsive-16by9" style="padding: 0%; margin: 0%">
                            <!-- foi ultilizada a classe img-responsive pois a versão
                                bootstrap 3 nao possuia uma classe válida --> 
                                 <video class="img-responsive" controls>
                                    <source src="/storage/videos_noticias/{!! $v_n->nome_arquivo !!}" alt="{{$v_n->nome_arquivo}}">
                                </video>
                                
                            </div>
                            <p style="font-size: 1rem">data de upload: {{$v_n->created_at}}</p>
                               
                            @foreach($noticias as $n)
                                @if($n->id == $v_n->id_noticia)
                                    <p style="font-size: 1rem">Noticia: </p>
                                    <?php echo "<p>".str_limit($n->conteudo, 100, '...')."</p>"; ?>
                                @endif
                            @endforeach
                                <hr>
                                <p style="font-size: 1rem">Descrição: </p>
                                <?php echo "<p>".str_limit($v_n->descricao, 100, '...')."</p>"; ?>
                               
                                <hr>
                                <div class="btn-group">
                                    <a class="btn btn-danger" href="/video_noticia/{{$v_n->id}}/remove">Remover Video</a>
                                </div>
                            
                        </div>
                        @endforeach

                </div>
            </div>
        
        </div>
        <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3"></div>
    </div>
</div>


@endsection