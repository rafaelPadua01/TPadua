@extends('layouts.app');

@section('content');

<div class='container'>
	<div class='row'>
		<div class='col-xs-2 col-sm-2 col-md-2 col-lg-2'></div>
		<div class='col-xs-8 col-sm-8 col-md-8 col-lg-8' align='center'>
			<h1 style='text-align:center'>Galeria de videos</h1>
			<hr>
			<div class='btn-group'>
				<a href='/home' class='btn btn-info btn-sm'>
					<i class='glyphicon glyphicon-home'></i>
						Página inicial
				</a>
				<a class='btn btn-info btn-sm' href='videos/{{Auth::user()->id}}/create'>
					<i class='glyphicon glyphicon-facetime-video'> </i>
							Upload de novo video
				</a>
			</div>
		<br><br>
		</div>
		<div class='col-xs-2 col-sm-2 col-md-2 col-lg-2'></div>
	</div>	
	<div class='row'>
		<div class='col-xs-2 col-sm-2 col-md-2 col-lg-2'></div>
		<div class='col-xs-8 col-sm-8 col-md-8 col-lg-8'>
			
					
					
						<div style='background-color: #fff; border: 1px solid #ddd; box-shadow: 0px 0px 5px #080808' align='center'>
							@foreach($videos as $video)
							<div class=''  style='width: 30%'>  
							<p style='font-size: 1.2rem' align='center'><strong>{{$video->titulo}}</strong></p>
							
								<video controls='controls' style='min-width: 50px; max-height: 100%; width: 95%; heigth: 75px;
									margin-left: 1%;'>
									<source src='/storage/videos/{{$video->nome_arquivo}}' alt='{{$video->nome_arquivo}}' type='video/mp4'>
									<object data=''>
										<embed src='/{{$video->nome_arquivo}}'>
					
									</object>
								</video>
								<p  style='font-size: 0.9rem' align='center'>{{$video->created_at}}</p>
								<div class='btn-group' >
								<a href='videos/{{$video->id}}/remove' class='btn btn-danger btn-xs'>
									Remover
								</a>
								</div>
							</div>
							<hr>
							@endforeach
						</div>
					
					
			
			
		</div>
		<div class='col-xs-2 col-sm-2 col-md-2 col-lg-2'></div>
	</div>
	<div class='row'>
		<div class='col-xs-2 col-sm-2 col-md-2 col-lg-2'>
			
		</div>
		<div class='col-xs-8 col-sm-8 col-md-8 col-lg-8' align='center'>
			{{$videos->links()}}
		</div>
		<div class='col-xs-2 col-sm-2 col-md-2 col-lg-2'>
			 
		</div>
	</div>
</div>

@endsection