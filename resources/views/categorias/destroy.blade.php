
<form action="{{route('users.update', ['id'=>$user->id])}}" class='form'
	method='post' style='display: inline-block'>
		<input type='hidden' name='_token' value='{{csrf_token()}}'>
		<input type='hidden' name='_method' value='DELETE'>
		<input type='submit' value='remove'>
		
</form>