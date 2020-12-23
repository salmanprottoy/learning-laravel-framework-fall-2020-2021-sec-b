<!DOCTYPE html>
<html>
<head>
	<title>Show Employees</title>
</head>
<body>

	<a href="{{route('home.index')}}">Back</a> |
	<a href="/logout">logout</a>

	<br>
		<table border="1">
			<tr>
				<td>Name</td>
				<td>{{$name}}</td>
			</tr>
			<tr>
				<td>Company Name</td>
				<td>{{$company_name}}</td>
			</tr>
			<tr>
				<td>Contact Number</td>
				<td>{{$contact_number}}</td>
			</tr>
		</table>
</body>
</html>