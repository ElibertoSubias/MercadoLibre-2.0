<!DOCTYPE html>
<html>
<head>
	<title>Custom Login</title>  
	<link rel="stylesheet" type="text/css" href="css/app.css">
</head>
<body>
	<div class="container">
		<hr>
		@if (session()->has('flash'))
			<div class="alert alert-info">
				{{ session('flash') }}
			</div>
		@endif
		@yield('content')
	</div>
</body>
</html>