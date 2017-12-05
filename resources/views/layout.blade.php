<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>
	@include ('head')
</head>
<body>
	@include ('header')
	<div class="main">
		@yield('content')  
	</div>
	@include ('footer')  
</body>
</html>