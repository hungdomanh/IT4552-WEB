<div class="col-md-8">
	@foreach ($programs as $program)
	<div class="blog_box">
		@include('components.programs.block-medium-program', ['program'=>$program])
	</div>
	@endforeach
	<ul class="dc_pagination dc_paginationA dc_paginationA06">

		<li><a href="{{$programs->previousPageUrl()}}" class="current">Prev</a></li>
		@if ($programs->currentPage() != 1)
			<li><a href="#!">...</a></li>
		@endif

		@if ($programs->currentPage() - 1 > 1)
			<li><a href="/programs?page={{$programs->currentPage() - 1}}">{{$programs->currentPage() - 1}}</a></li>
		@endif

		<li><a href="#!" style="background: #69d6f2;">{{$programs->currentPage()}}</a></li>

		@if ($programs->lastPage() - $programs->currentPage() > 1)
			<li><a href="/programs?page={{$programs->currentPage()+1}}">{{$programs->currentPage()+1}}</a></li>
		@endif

		@if ($programs->currentPage() != $programs->lastPage())
			<li><a href="#!">...</a></li>
		@endif
		<li><a href="{{$programs->nextPageUrl()}}" class="current">Next</a></li>
	</ul>
</div>