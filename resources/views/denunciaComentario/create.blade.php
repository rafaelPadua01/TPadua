@extends('layouts.app')

@section('content')
<div class="conainer">
    <div class="row">
    <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2" style='border: 1px solid #000'></div>
    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6" style='border: 1px solid #000'>
        <h3 align="center" style="font-size: 1.6rem">Formulário de Denuncia...</h3>
        <hr>
        {!! Form::open(['url' => "/denunciaComentario/$c->id/store", 'method' => 'post'])!!}
       
            
           <p style="font-size: 1.2rem" align="center"> Nós gostariamos de saber o motivo pelo qual você
             <br>
            está denunciando este comentário, para que ele seja avaliado
            por nossa equipe
            <br>
             e assim, sejam tomadas as medidas cabiveis.
            </p>
        
            <p>
            <label>Comentário:</label>
            
                {{$c->comentario}}
            </p>

            <p>
            <label>Autor:</label>
            
                {{$c->nome}}
            </p>
            <input type="hidden" value="{{$c->id}}" name="id_comentario" id="id_comentario">
            <hr>
            <div class='form-check'>
                <input class="form-check-input" type="radio" name="denuncia" id="denuncia" value="ofensivo">
                <label style="font-size:1rem">
                    Este comentário é ofensivo. 
                </label>
            </div>
            <div class='form-check'>
                <input class="form-check-input" type="radio" name="denuncia" id="denuncia" value="baixo calão">
                <label style="font-size:1rem">
                    Este comentário possui palavras de baixo calão.
                </label>
            </div>
            <div class='form-check'>
                <input class="form-check-input" type="radio" name="denuncia" id="denuncia" value="Revisão">
                <label style="font-size:1rem">
                    Revisão deste comentário.
                </label>
            </div>
            <div class='form-group'>
                <label style="font-size:1rem" style="font-size:1rem">Outro Tipo de denuncia:</label>
                <br>
                    <textarea class='form-control' name="denuncia_op" id="denuncia_op" cols="30" rows="10" placeholde="Digite aqui a sua denuncia..."></textarea>    
            </div>

            <div class='btn-group'>
                <a href="/" class='btn btn-danger'>
                    <span class='glyphicon glyphicon-home'></span>
                        Voltar para á página inicial
                </a>
                <button type='submit' class='btn btn-success'>Salvar</button>
                
            </div>
       {!! Form::close() !!}
    </div>
    <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2" style='border: 1px solid #000'></div>
</div>


@endsection