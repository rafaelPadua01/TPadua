<h1>Editando{{$data->title}}</h1>

<form action="{{route('products.update', ['id' => $data->id])}}' method='post'">
	<input type='hidden' name='_token' value='{{csrf_token()}}'>
	<input type='hidden' name='_method' value='PUT'>
	Title: <input type='text' name='title' value='{{$data->title}}'><br>
	Description: <textarea  name='body'>{{$data->body}}</textarea><br>
	Value: <input type='number' name='value' value='{{$data->value}}'><br>
	QTD: <input type='number' name='qtd' value='{{$data->qtd}}'><br>
	URL: <input type='text' name='url' value='{{$data->url}}'><br>	
	
	<input type='submit'>
</form>