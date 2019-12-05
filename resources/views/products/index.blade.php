<h1>Maconha</h1>

<table>
	<thead>
		<tr>
			<th>ID</th>
			<th>Title</th>
			<th>Actions</th>
		</tr>
	</thead>
	<tbody>
		@foreach($data as $k=>$data)
		<tr>
			<td>{{ $data->id }}</td>
			<td>{{ $data->title }}</td>
			<td class="text-right">
				<a href="{{route('products.show', ['id' => $data->id]) }}">View</a>
				<a href="{{route('products.edit', ['id' => $data->id]) }}">Edit</a>
				<a href="{{route('products.destroy', ['id' => $data->id]) }}">Remove</a>
				<a href="{{route('products.categories', ['id'=>$data->id])}}">Relacionamentos</a>
			<form action="{{route('products.update', ['id' => $v->id])}}" method="post" style='display: inline-block;'>	
			<input type='hidden' name='_token' value='{{csrf_token()}}'>
			<input type='hidden' name='_method' value='DELETE'>
			<input type='submit' value='remove' class='btn btn-sx btn-danger'>
			
			</td>
		</tr>
		@endforeach
	</tbody>
</table>