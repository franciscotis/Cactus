<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="{{(asset('css/app.css'))}}" rel = "stylesheet">
	<link rel="stylesheet" type="text/css" href="{{(asset('css/style.css'))}}" rel = "stylesheet">
	<title></title>
</head>
<body>

	<div class = "container">

		@hasSection('body')
			@yield('body')
		@endif

	</div>
	<script src="{{asset('jd/app.js')}}" type="text/javascript"></script>
</body>
</html>