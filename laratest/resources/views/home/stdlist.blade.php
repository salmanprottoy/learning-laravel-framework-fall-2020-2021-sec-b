<!DOCTYPE html>
<html>
<head>
	<title>Student List</title>
</head>
<body>
	<a href="/home">Back</a> |
	<a href="/logout">logout</a>
	<br>

	<table border="1">
		<tr>
			<td>id</td>
			<td>Name</td>
			<td>cgpa</td>
			<td>email</td>
			<td>Action</td>
		</tr>

		@for($i=0; $i < count($students); $i++)

			<tr>
				<td>{{$students[$i]['id']}}</td>
				<td>{{$students[$i]['name']}}</td>
				<td>{{$students[$i]['cgpa']}}</td>
				<td>{{$students[$i]['email']}}</td>
				<td>
					<a href="/edit/{{$students[$i]['id']}}">Edit </a> |
					<a href="/details/{{$students[$i]['id']}}">Details </a> |
					<a href="/delete/{{$students[$i]['id']}}">Delete </a> 
				</td>
			</tr>

		@endfor


	</table>
</body>
</html>