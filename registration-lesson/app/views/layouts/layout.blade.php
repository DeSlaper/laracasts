
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>@yield('meta-title', 'Larademo')</title>

	<!-- Bootstrap core CSS -->
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet">

	<link rel="stylesheet" href="/assets/css/style.css">
</head>

<body>
	@include('layouts.partials.navbar')
	<div class="container">
		@yield('content')
	</div>

	<script src="//code.jquery.com/jquery-2.1.1.min.js"></script>
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</body>
</html>
