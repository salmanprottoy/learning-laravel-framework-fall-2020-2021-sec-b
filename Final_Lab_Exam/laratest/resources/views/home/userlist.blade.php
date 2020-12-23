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
	<hr>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script type="application/javascript">
    $(document).ready(function(){

        $('#txtSearch').on('keyup', function(){

            var text = $('#txtSearch').val();

            $.ajax({

                type:"GET",
                url: '/search',
                data: {text: $('#txtSearch').val()},
                success: function(data) {

					data = JSON.parse(data);
					for (var employee of data) {
						console.log(employee);
					}
                 }
            });


        });

    });
    </script>
    <input type="text" id="txtSearch" name="txtSearch" class="form-control"  placeholder="Search..." >
    <input type="submit" name="search" value="Search">
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