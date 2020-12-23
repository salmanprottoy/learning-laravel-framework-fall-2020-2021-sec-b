<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>
</head>
<body>

	<h1>@yield('head')</h1>
	<nav>
		@yield('navbar')
	</nav>

	<div id="main-content">
		@yield('content')
	</div>

	<div id="footer">
		<!-- <p>copyright@2020</p> -->
	</div>
</body>
</html>