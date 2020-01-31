@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2"></div>
            <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
                <h3 align="center">Previsualização</h3>
                <hr>
                 
                  @foreach($comentario as $c)
                    @if($c->id == $denuncia->id_comentario)
                    <div style="border: 1px solid #000" align="center">
                        <h3 align="center">Comentário:</h3>
                        <br>
                        <label>Comentário:</label>
                        <p>{{$c->comentario}}</p>
                        <label>Autor:</label>
                        <p>{{$c->nome}}</p>
                        <label >Data:</label>
                        <p>{{$c->created_at}}</p>
                    </div>
                  
                  <div style="border: 1px solid #000" align="center">
                        <h3>Denuncia:</h3>
                        <label>Denuncia:</label>
                        <p>{{$denuncia->denuncia}}</p>
                        <label>Data</label>
                        <p>{{$denuncia->created_at}}</p>
                  </div>
                <hr>
                <div class="btn-group">
                    <a href="/denunciaComentario" class="btn btn-success">Voltar</a>
                    <a href="/denunciaComentario/{{$denuncia->id}}/destroyDenunciaComentario" class="btn btn-danger">Remover Comentário</a>
                </div>
                    @endif
                  @endforeach
                  
            </div>
            <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2"></div>

        </div>
    </div>

@endsection