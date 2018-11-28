<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="{{(asset('css/app.css'))}}" rel = "stylesheet">
	<link rel="stylesheet" type="text/css" href="{{(asset('css/style.css'))}}" rel = "stylesheet">
	<title></title>
</head>
<body>


		@hasSection('body')
			@yield('body')
		@endif

	<script src="{{asset('jd/app.js')}}" type="text/javascript"></script>
</body>
</html>