@extends('layouts.app')

@section('content')
<!-- CDN do CKEditor -->
<script src="https://cdn.ckeditor.com/4.12.1/standard/ckeditor.js"></script>

<div class='container'>
	<div class='row'>
		<div class='col-xs-12 col-md-12 col-sm-12 col-lg-12'>
			@if($errors->any())
				<ul class='alert alert-warnign'>
					@foreach($errors as $error)
						<li>{{$error}}</li>
					@endforeach
				</ul>
			@endif
			<h1 align='center'>Enviar Newsletter</h1>
			<hr>
			
		</div>
	</div>
	<div class='row'>
		<div class='col-xs-2 col-sm-2 col-md-2 col-lg-2'>
			
		</div>
		<div class='col-xs-8 col-md-8 col-sm-8 col-lg-8' style='border: 1px solid #ddd'>
			{!! Form::open(['url' => 'newsletter/sendmail', 'method' => 'post']) !!}
				<br>
				<div class='form-group'>
					{!! Form::label('assunto', 'Assunto:') !!}
						{!! Form::text('assunto', 'NewsLetter AliasTPadua.com.br', ['class' => 'form-control', 'style' => 'width: 40%']) !!}
				</div>
				<br>
				<div class='form-group'>
					
				 {!! Form::label('email', 'Emails:') !!}
				 <br>
					@foreach($users_news_letters as $users_news_letter)
						@if($users_news_letters)
							
							{!! Form::email('email[]',  $users_news_letter->email_user_newsLetter , ['class' => 'form-control-sm'])!!}
								<button type='close' data-dismiss='close'>X</button>
						@endif	
					@endforeach
				 
				</div>
				
				<div class='form-group'>
				{!! Form::label('conteudo', 'Conteudo:')!!}
				<br><br>
					<textarea id='conteudo' name='conteudo' class='form-control-sm col-xs-4 col-sm-4 col-md-4 col-lg-4'>
						
					</textarea>
					<script>
                        CKEDITOR.replace( 'conteudo' );
                </script>
				</div>
				
				<div class='btn-group'>
				<a href='/home' class='btn btn-danger'>Voltar a página inicial</a>
				{!! Form::submit('Enviar', ['class' => 'btn btn-success']) !!}
				
				</div>
			{!! Form::close() !!}
			
		</div>
		<div class='col-xs-2 col-sm-2 col-md-2 col-lg-2'>
			
		</div>
	</div>
	
	</div>
</div>


@endsection