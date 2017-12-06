<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>
	@include ('head')
</head>
<body>
	@yield('banner-top')
	@include ('header')
	<div class="main">
		@yield('content')  
	</div>
	@include ('footer')  
</body>
</html>