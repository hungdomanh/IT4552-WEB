<div class="about_banner_img">
	<img src="{{asset('images/blog_img1.jpg')}}" class="img-responsive" alt=""/>
</div>
<div class="about_banner_wrap">
	@if (Request::path() == 'programs/suggest')
		<h1 class="m_11">Suggest</h1>
	@elseif (Request::path() == 'my-page')
		<h1 class="m_11">MY Programs</h1>	
	@else
		<h1 class="m_11">Blogs</h1>	
	@endif
</div>
<div class="border"> </div>