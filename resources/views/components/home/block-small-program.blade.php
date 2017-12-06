<a href="/programs/detail/{{$program->id}}">
	<ul class="spinning">
		<li class="live">{{$program->name}}<span class="m_1"></span></li>
		<li class="room">Level {{$program->level}}</li>
		<div class="clear"></div>	
	</ul>
	<div class="view view-fifth">
		<img src="{{asset('images/programs/'.$program->image)}}" class="img-responsive" alt=""/>
		<div class="mask">
			<div class="info">Read More</div>
		</div>
	</div>
</a>