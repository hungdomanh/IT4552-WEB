<div class="blog_grid">
	<h3><a href="blog_single.html">{{$program->name}} </a></h3><i class="document"> </i>
	<a href="blog_single.html"><img src="{{asset('images/programs/'.$program->image)}}" class="img-responsive" alt=""/></a>
	<div class="singe_desc">
		<p>{{$program->content}}</p>
		<div class="comments">
			<ul class="links">
				<li><a href="#"><i class="blog_icon1"> </i><br><span>{{$program->created_at or 'Dec 3, 2017'}}</span></a></li>
				<li><a href="#"><i class="blog_icon2"> </i><br><span>{{$program->instructor}}</span></a></li>
				<li><a href="#">
				
				@for ($i = 1; $i <= $program->level; $i++)
					{{-- expr --}}
					<i class="blog_icon3"> </i>
				@endfor
				
				<br><span>Level {{$program->level}}</span></a></li>
				{{--  --}}
				{{-- <li><a href="#"><i class="blog_icon4"> </i><br><span>1206</span></a></li> --}}
			</ul>
			<div class="btn_blog"><a href="/programs/{{$program->id}}">Read More</a>
			</div>
			<div class="clear"></div>
		</div>
	</div>
</div>