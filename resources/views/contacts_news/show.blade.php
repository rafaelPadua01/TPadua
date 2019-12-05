@extends('layouts.app')

@section('content')
<div class='container'>
	<h1 style='text-align: center'>Visualização de notícia recebidas</h1>
	<hr>
	
	@foreach($contacts_news as $c_news)
		<b>Nome:</b> {!! $c_news->noticia !!}
		<br>
		<b>Email:</b> {!! $c_news->email!!}
		<br>
		<b>Noticia:</b>
		<br>
		{!! $c_news->noticia !!} 
	@endforeach
	<br><br>
	<a href='/home' class='btn btn-danger'>Voltar para à pàgina anterior</a>
</div>
@endsection