<div class="col-md-8">
	@foreach ($programs as $program)
		<div class="blog_box">
			@include('components.programs.block-medium-program', ['program'=>$program])
		</div>
	@endforeach
	{{-- <div class="blog_box">
		@include('components.programs.block-medium-program')
	</div>
	<div class="blog_box">
		@include('components.programs.block-medium-program')
	</div>
	<div class="blog_box">
		@include('components.programs.block-medium-program')
	</div>
	<div class="blog_box">
		@include('components.programs.block-medium-program')
	</div>
	<div class="blog_box">
		@include('components.programs.block-medium-program')
	</div> --}}
	
	<ul class="dc_pagination dc_paginationA dc_paginationA06">
		<li><a href="#" class="current">Prev</a></li>
		<li><a href="#">1</a></li>
		<li><a href="#">2</a></li>
		<li><a href="#">3</a></li>
		<li><a href="#">4</a></li>
		<li><a href="#">5</a></li>
		<li><a href="#">...</a></li>
		<li><a href="#">19</a></li>
		<li><a href="#">20</a></li>
		<li><a href="#" class="current">Next</a></li>
	</ul>
</div>