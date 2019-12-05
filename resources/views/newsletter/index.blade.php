@extends('layouts.app')

@section('content')
<div class='col-sx-8 col-sm-8 col-md-8 col-lg-8'>
				<main>
					<table class='table table-stripped table-hover table-bordered' style='width: 100%'>
						<h3 style='text-align: center; background-color: #010101;
								color: #fff; margin-bottom: 0%'>Novos Usuarios da NewsLetter</h3>
						<thead>
							<tr>
								<th>Nome</th>
								<th>Email</th>
								<th>Data de Assinatura</th>
								<th>Data de Atualização</th>
								<th>Ações</th>
							</tr>
						</thead>
						<tbody>
							@foreach($user_news_letters as $user_news_letter)
							<tr>
								<td>{!! $user_news_letter->nome_user_newsLetter !!}</td>
								<td>{!! $user_news_letter->email_user_newsLetter !!}</td>
								<td>{!! $user_news_letter->created_at !!}</td>
								<td>{!! $user_news_letter->updated_at !!}</td>
								<td>
									<a href='/newsletter/{{$user_news_letter->id}}/remove'>Remover</a>
									|
									<a href='newsletter/{{$user_news_letter->id}}/edit'>Atualizar</a>
								</td>
							</tr>
							@endforeach
						</tbody>
					</table>
				</main>
			</div>
@endsection