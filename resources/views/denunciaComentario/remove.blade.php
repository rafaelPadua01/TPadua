@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2"></div>
        <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
            <h3 align='center'>Remover Denuncia</h3>
            <hr>
              <label>Denuncia:</label>
               {{$denuncia->denuncia}}
               <label>Data/hora:</label>
               {{$denuncia->created_at}}
               <br>
                <div class="btn-group">
                    <a href="/denunciaComentario" class='btn btn-danger'>Voltar</a>
                    <a href="/denunciaComentario/{{$denuncia->id}}/destroy" class="btn btn-success">Remover</a>
                </div>
            {!! Form::close() !!}
        </div>
        <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2"></div>
        
    </div>
</div>
@endsection