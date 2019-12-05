<h1>Categories</h1>

<table>
	<thead>
		<tr>
			<th>id</th>
			<th>Title</th>
			<th>actions</th>
			
		</tr>
	</thead>
	<tbody>
		@foreach($data as $k => $v)
			<tr>
				<td>{{$k+1}}</td>
				<td>{{$v->title}}</td>
				<td>
					<a href='{{route.('categories.show', ['id' => $v->id])}}'>View</a>
					<a href='{{route.('categories.edit', ['id' => $v->id])}}'>Edit</a>
					<form action='{{route.('categories.update', ['id' => $v->id])}}'
						method='post' style='display: inline-block'>View</a>
						
						<input type='hidden' name='_token' value='{{csrf_token()}}'>
						<input type='hidden' name='_method' value='DELETE'>
						<input type='submit'  value='remove'>
					</form>
				</td>
			</tr>
		@endforeach
	</tbody>
</table>