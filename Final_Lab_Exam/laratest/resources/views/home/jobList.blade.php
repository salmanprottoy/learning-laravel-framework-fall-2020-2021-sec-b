<!DOCTYPE html>
<html>
<head>
	<title>Job list page</title>
</head>
<body>

	<h3>All Jobs</h3>
	<a href="{{route('home.index')}}">Back</a> |
	<a href="/logout">logout</a>

	<br>
	<br>

	<table border="1">
		<tr>
			<td>ID</td>
			<td>Company Name</td>
			<td>Job Title</td>
			<td>Job Location</td>
			<td>Salary</td>
			<td>Action</td>
		</tr>

		@for($i=0; $i < count($jobs); $i++)
		<tr>
			<td>{{$jobs[$i]['id']}}</td>
			<td>{{$jobs[$i]['company_name']}}</td>
			<td>{{$jobs[$i]['job_title']}}</td>
			<td>{{$jobs[$i]['job_location']}}</td>
			<td>{{$jobs[$i]['salary']}}</td>
			<td>
				<a href="/details/{{$jobs[$i]['id']}}">Details</a> |
				<a href="{{route('home.edit', $jobs[$i]['id'])}}">Edit</a> |
				<a href="/delete/{{$jobs[$i]['id']}}">Delete</a> 
			</td>
		</tr>
		@endfor
	</table>

</body>
</html>