

<h1 class="page-header">{{$data->title}}</h1>

@if(count($errors) > 0)
	<div class="alert alert-danger">
		<ul>
			@foreach($errors->all() as $error)
				<li>{{$error}}</li>
			@endforeach
		</ul>
	</div>
@endif

<form action="{{route('products.store')}}" method='post'>
	<input type='hidden' name='_token' value='{{csrf_token()}}'>
	Title: <input type='text' name='title' value="{{old('title')}}"><br> <!-- atributo old(''), 
																		restaura os valores inseridos
																			anteriormente no form-->
	Description: <textarea name='body' value="{{old('body')}}"></textarea><br>
	Value: <input type='text' name='value' value="{{old('value')}}"><br>
	Quantity: <input type='number' name='qtd' value="{{old('qtd')}}"><br>
	URL: <input type='text' name='url' value="{{old('url')}}"><br>
	<input type='submit'>
</form>