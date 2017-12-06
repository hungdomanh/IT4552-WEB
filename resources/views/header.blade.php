<!-- start header_bottom -->
<div class="header-bottom">
	<div class="container">
		<div class="header-bottom_left">
			<i class="phone"> </i><span>1-200-346-2986</span>
		</div>
		<div class="social">	
			<ul>	
				<li class="facebook"><a href="#"><span> </span></a></li>
				<li class="twitter"><a href="#"><span> </span></a></li>
				<li class="pinterest"><a href="#"><span> </span></a></li>	
				<li class="google"><a href="#"><span> </span></a></li>
				<li class="tumblr"><a href="#"><span> </span></a></li>
				<li class="instagram"><a href="#"><span> </span></a></li>	
				<li class="rss"><a href="#"><span> </span></a></li>							
			</ul>
		</div>
		<div class="clear"></div>
	</div>
</div>

<div class="menu" id="menu">
	<div class="container">
		<div class="logo">
			<a href="/"><img src="{{asset('images/logo.png')}}" alt=""/></a>
		</div>
		<div class="h_menu4"><!-- start h_menu4 -->
			<a class="toggleMenu" href="#">Menu</a>
			<ul class="nav">
				<li class="active"><a href="/">Home</a></li>
				<li><a href="/programs">Programs</a></li>
				<li><a href="/search">Search</a></li>

				<li><a href="/#"></a></li>
				@if (Auth::check())
					<li><a href="/my-page">My page</a></li>
					<li><a href="/profile">Profile</a></li>
					<li><a href="/logout">Logout</a></li>
				@else	
					<li><a href="/login">Login</a></li>
					<li><a href="/signup">Signup</a></li>
				@endif
			</ul>
		</div><!-- end h_menu4 -->
		<div class="clear"></div>
	</div>
</div>