<h1 class='page-header'>{{$data->title}}</h1>

<ul>
	<li>Value: {{$data->value}}</li>
	<li>qtd: {{$data->qtd}}</li>
	<li>url: {{$data->url}}</li>
	<li>cadastro: {{$data->created_at}}</li>
	<li>Atualização: {{$data->updated_at}}</li>
</ul>

<hr>

<p>Description</p>
{{$data->body}}