<h1>Cadastrar</h1>

@include('helpers.validate_errors');

<form action="{{route('categories.store')}}" method="post">
	<input type="hidden" name="_token" value="{{csrf_token()}}">
	Title: <input type="text" name="title" value="{{old('title')}}">
	<!--metodo old, tras o valor antigo do atributo-->
	<input type="submit">
</form>