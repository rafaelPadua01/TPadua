@extends('layouts.app')

@section('content')
<div class='content'>
    <div class='row'>
        <div class='col-xs-2 col-md-2 col-sm-2 col-lg-2' >
            
        </div>
        <div class='col-xs-8 col-md-8 col-sm-8 col-lg-8'>
        
            <h5 align='center'><b>Comentários que receberam alguma denuncia...</b></h5>
            <hr>
            <div class="btn-goup">
                <a href="/" class="btn btn-info">
                    <span>
                        <i class="glyphicon glyphicon-home"></i>
                            Voltar para a página inicial
                    </span>
                </a>
            </div>
            <div class="table-responsive-xs">
            <table class="table table-sm table-hover table-bordered table-striped" style="font-size: 1.2rem;">
                <caption>Lista de Denuncias</caption>
                <tr>
                  <thead>
                        <th scope="col">id</th>
                        <th scope="col">id_comentario</th>
                        <th scope="col">Comentário</th>
                        <th scope="col">Autor</th>
                        <th scope="col">Data</th>
                        <th scope="col">Denuncia</th>
                        <th scope="col">Ações</th>  
                   </thead>
                 </tr>
                 @foreach($denuncia as $d)
                 <tr>
                    <tbody>
                        <td>{{$d->id}}</td>
                        <td>{{$d->id_comentario}}</td>
                        @foreach($comentarios as $c)
                            @if($c->id == $d->id_comentario)
                              <td>{{$c->comentario}}</td>
                              <td>{{$c->nome}}</td>
                              <td>{{$c->created_at}}</td>
                            @endif
                        @endforeach
                        <td>{{$d->denuncia}}</td>
                        <td>
                            <div class="btn-group">
                                <a class="btn btn-sm btn-info" href="/denunciaComentario/{{$d->id}}/show">
                                 <span class="glyphicon gliphycon-eye-open"></span> 
                                    pré-visualizar
                                </a>
                                
                            
                                <a class="btn btn-sm btn-primary" href="/denunciaComentario/{{$d->id}}/edit">
                                 <span class="glyphicon gliphycon-pencil"></span> 
                                    Editar
                                </a>

                                <a class="btn btn-sm btn-danger" href="/denunciaComentario/{{$d->id}}/remove">
                                 <span class="glyphicon glyphicon-trash"></span> 
                                    Remover
                                </a>
                                
                            </div>
                        </td>
                    </tbody>
                 </tr>
                 @endforeach
            </table>
            </div>
        </div>
        <div class='col-xs-2 col-md-2 col-sm-2 col-lg-2'>
            
        </div>
    </div>
</div>


@endsection