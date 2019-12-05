<h1>Editando</h1>
@include('helpers.validate_errors');

<form action="{{route('categories.update', ['id' => $data->id])}}" method='post'>
	<input type='hidden' name='_token' value="{{csrf_token()}}">
	<input type='hidden' name='_method' value='PUT'>
	Title: <input type='text' name='title' value='{{$data->title}}'>
	<br>
	<input type='submit'>
	
</form>