<div class="blog_single_grid">
	<ul class="links_blog">
		<h3><a href="blog_single.html">{{$program->name}} </a></h3>
		<li><a href="#"><i class="blog_icon5"> </i><span>{{$program->created_at or 'Dec 3, 2017'}}</span></a> <div class="clear"></div></li>
		<li><a href="#"><i class="blog_icon6"> </i><span>{{$program->instructor}}</span></a><div class="clear"></div></li>
		<li><a href="#">
			@for ($i = 1; $i <= $program->level ; $i++)
			<i class="blog_icon7"> </i>
			@endfor
			<span>Level {{$program->level}}</span></a><div class="clear"></div></li>
		</ul>
		<img src="{{asset('images/programs'.$program->image)}}" class="img-responsive" alt=""/>
		<div class="blog_single_desc">
			{{$program->content}}
		</div>
		<ul class="social_blog">	
			<h3>Share</h3>
			<li class="fb"><a href="#"><span> </span></a></li>
			<li class="tw"><a href="#"><span> </span></a></li>
			<li class="google_blog"><a href="#"><span> </span></a></li>
			<li class="linkedin"><a href="#"><span> </span></a></li>	
			<div class="clear"></div>
		</ul>
		<ul class="comments">
			@if (Auth::check())
			<form action="/programs/add" method="POST" id="commentform">
				<input type="hidden" name="_token" value="{{ csrf_token() }}"> 
				<p class="form-submit">
					<input hidden type="number" name="programId" value="{{$program->id}}">
					@if ($isMyProgram)
						<h1>Following...</h1>
						<input name="submit" type="submit" id="submit" value="Cancel">
					@else
						<input name="submit" type="submit" id="submit" value="Start Now">
					@endif
				</p>
				<div class="clear"></div>
			</form>

			@else
			<form action="/login" method="GET" id="commentform">
				<p class="form-submit">
					<input name="submit" type="submit" id="submit" value="Login to Start">
				</p>
				<div class="clear"></div>
			</form>
			@endif
		</ul>
	</div>