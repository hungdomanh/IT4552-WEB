<div class="col-md-4 ">
	<ul class="blog-list">
		<h4>Categories</h4>
		@foreach ($programs as $program)
			<div class="blog_box">
			<li><a href="#program-{{$program->id}}">{{$program->name}}</a></li>
			</div>
		@endforeach
	</ul>
{{-- 	<ul class="recent-list">
		<h4>Recent Posts</h4>
		<li><a href="#">aliquam erat volutpat</a><br><span>25 April 2014</span></li>
		<li><a href="#">aliquam erat volutpat</a><br><span>25 April 2014</span></li>
		<li><a href="#">aliquam erat volutpat</a><br><span>25 April 2014</span></li>
		<li><a href="#">aliquam erat volutpat</a><br><span>25 April 2014</span></li>
	</ul> --}}
{{-- 	<ul class="single_times">
		<h3>Opening <span class="opening">Hours</span></h3>
		<li><i class="calender"> </i><span class="week_class">Monday</span><div class="hours_class">h.6:00-h.24:00</div>  <div class="clear"></div></li>
		<li><i class="calender"> </i><span class="week_class">Tuesday</span><div class="hours_class">h.6:00-h.24:00</div>  <div class="clear"></div></li>
		<li><i class="calender"> </i><span class="week_class">Wednesday</span><div class="hours_class">h.6:00-h.24:00</div>  <div class="clear"></div></li>
		<li><i class="calender"> </i><span class="week_class">Thrusday</span><div class="hours_class">h.6:00-h.24:00</div>  <div class="clear"></div></li>
		<li><i class="calender"> </i><span class="week_class">Friday</span><div class="hours_class">h.6:00-h.24:00</div>  <div class="clear"></div></li>
		<li><i class="calender"> </i><span class="week_class">Saturday</span><div class="hours_class">h.6:00-h.24:00</div>  <div class="clear"></div></li>
		<li><i class="calender"> </i><span class="week_class">Sunday</span><div class="hours_class">h.6:00-h.24:00</div>  <div class="clear"></div></li>
	</ul> --}}
	{{-- <div class="course_demo">
		<ul id="flexiselDemo3">	
			<li><img src="{{asset('images/pic4.jpg')}}" /><div class="desc">
				<h3>Lorem Ipsum<br><span class="m_text">Spinning</span></h3>
				<p>Lorem ipsum dolor<br> sit amet, consectetuer.</p>
				<div class="coursel_list">
					<i class="heart1"> </i>
					<i class="like"> </i>
				</div>
				<div class="coursel_list1">
					<i class="twt"> </i>
					<i class="fb"> </i>
				</div>
				<div class="clear"></div>
			</div></li>
			<li><img src="{{asset('images/pic5.jpg')}}" /><div class="desc">
				<h3>Lorem Ipsum<br><span class="m_text">Kik Boxing</span></h3>
				<p>Lorem ipsum dolor<br> sit amet, consectetuer.</p>
				<div class="coursel_list">
					<i class="heart2"> </i>
					<i class="like1"> </i>
				</div>
				<div class="coursel_list1">
					<i class="twt"> </i>
					<i class="fb"> </i>
				</div>
				<div class="clear"></div>
			</div></li>	
			<li><img src="{{asset('images/pic4.jpg')}}" /><div class="desc">
				<h3>Lorem Ipsum<br><span class="m_text">Spinning</span></h3>
				<p>Lorem ipsum dolor<br> sit amet, consectetuer.</p>
				<div class="coursel_list">
					<i class="heart2"> </i>
					<i class="like1"> </i>
				</div>
				<div class="coursel_list1">
					<i class="twt"> </i>
					<i class="fb"> </i>
				</div>
				<div class="clear"></div>
			</div></li>	
			<li><img src="{{asset('images/pic5.jpg')}}" /><div class="desc">
				<h3>Lorem Ipsum<br><span class="m_text">Kik Boxing</span></h3>
				<p>Lorem ipsum dolor<br> sit amet, consectetuer.</p>
				<div class="coursel_list">
					<i class="heart2"> </i>
					<i class="like1"> </i>
				</div>
				<div class="coursel_list1">
					<i class="twt"> </i>
					<i class="fb"> </i>
				</div>
				<div class="clear"></div>
			</div></li>	
			<li><img src="{{asset('images/pic4.jpg')}}" /><div class="desc">
				<h3>Lorem Ipsum<br><span class="m_text">Spinning</span></h3>
				<p>Lorem ipsum dolor<br> sit amet, consectetuer.</p>
				<div class="coursel_list">
					<i class="heart2"> </i>
					<i class="like1"> </i>
				</div>
				<div class="coursel_list1">
					<i class="twt"> </i>
					<i class="fb"> </i>
				</div>
				<div class="clear"></div>
			</div></li>							    	  	       	   	    	
		</ul>
		<script type="text/javascript">
			$(window).load(function() {
				$("#flexiselDemo3").flexisel({
					visibleItems: 4,
					animationSpeed: 1000,
					autoPlay: true,
					autoPlaySpeed: 3000,    		
					pauseOnHover: true,
					enableResponsiveBreakpoints: true,
					responsiveBreakpoints: { 
						portrait: { 
							changePoint:480,
							visibleItems: 1
						}, 
						landscape: { 
							changePoint:640,
							visibleItems: 2
						},
						tablet: { 
							changePoint:768,
							visibleItems: 2
						}
					}
				});

			});
		</script>
		<script type="text/javascript" src="{{asset('js/theme/jquery.flexisel.js')}}"></script>
	</div> --}}
	
{{-- 	<ul  class="blog-list1">
		<h4>Tags</h4>
		<li><a href="#">Web Design</a></li>
		<li><a href="#">Html5</a></li>
		<li><a href="#">Wordpress</a></li>
		<li><a href="#">Logo</a></li>
		<li><a href="#">Web Design</a></li>
		<li><a href="#">Web Design</a></li>
		<li><a href="#">Wordpress</a></li>
		<li><a href="#">Web Design</a></li>
		<li><a href="#">Html5</a></li>
		<li><a href="#">Wordpress</a></li>
		<li><a href="#">Logo</a></li>
		<div class="clear"></div>
	</ul> --}}
	<ul class="archive-list">
		<h4>Archive</h4>
		<li><a href="#">2018</a></li>
		<li><a href="#">2017</a></li>
		<li><a href="#">2016</a></li>
	</ul>
	<h3 class="m_15">Partner</h3>
	<ul class="partner_blog">
		<li><img src="{{asset('images/p6.png')}}" alt=""/></li>
		<li><img src="{{asset('images/p5.png')}}" alt=""/></li>
		<li><img src="{{asset('images/p4.png')}}" alt=""/></li>
		<li><img src="{{asset('images/p3.png')}}" alt=""/></li>
		<li><img src="{{asset('images/p2.png')}}" alt=""/></li>
		<li><img src="{{asset('images/p1.png')}}" alt=""/></li>
		<div class="clear"></div>
	</ul>
</div>