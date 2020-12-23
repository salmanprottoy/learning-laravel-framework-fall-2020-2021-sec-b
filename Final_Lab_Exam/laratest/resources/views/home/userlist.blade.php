<!DOCTYPE html>
<html>
<head>
	<title>Employee list page</title>
</head>
<body>

	<h3>All Employee</h3>
	<a href="{{route('home.index')}}">Back</a> |
	<a href="/logout">logout</a>

	<br>
	<br>

	<table border="1">
		<tr>
			<td>ID</td>
			<td>Username</td>
			<td>Name</td>
			<td>Company Name</td>
			<td>Contact Number</td>
			<td>Action</td>
		</tr>

		@for($i=0; $i < count($employees); $i++)
		<tr>
			<td>{{$employees[$i]['id']}}</td>
			<td>{{$employees[$i]['username']}}</td>
			<td>{{$employees[$i]['name']}}</td>
			<td>{{$employees[$i]['company_name']}}</td>
			<td>{{$employees[$i]['contact_number']}}</td>
			<td>
				<a href="/details/{{$employees[$i]['id']}}">Details</a> |
				<a href="{{route('home.edit', $employees[$i]['id'])}}">Edit</a> |
				<a href="/delete/{{$employees[$i]['id']}}">Delete</a> 
			</td>
		</tr>
		@endfor
	</table>

</body>
</html>