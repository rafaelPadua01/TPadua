@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2"></div>
        <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
            <h3 align='center'>Editar Comentario</h3>
            <hr>
                {!! Form::open(['url' => "/comentarios/{$comentario->id}/update", 'method' => "PUT"]) !!}
               <p> Formulário de revisão e alteração de Comentários</p>
                <label>Autor:</label>
                    {{$comentario->nome}}
                <label>Data/hora</label>
                    {{$comentario->created_at}}
                <br>
                <label for="">Comentario:</label>
                <br>
                    <textarea name="comentario" id="comentario" cols="30" rows="10" class="form-control">{{$comentario->comentario}}</textarea>
                    <br>
                <div class="btn-group">
                    <a href="/denunciaComentario" class='btn btn-danger'>Voltar</a>
                    <button type="submit" class="btn btn-success">Salvar</button>
                </div>
            {!! Form::close() !!}
        </div>
        <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2"></div>
        
    </div>
</div>
@endsection