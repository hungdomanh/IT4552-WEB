<div class="container">
	<!-- start content-top -->
	<div class="row content-top">
		<div class="col-md-5">
			<img src="images/pic.png" class="img-responsive" alt=""/> 
		</div>
		<div class="col-md-7 content_left_text">
			<h3>EXPERIENCE THE DIFFERENCE</h3>
			<p style="font-size: 16px;">Whatever your goal or experience level, our wide range of fitness classes and offerings can help you reach your goals</p>
		</div>
	</div>
</div>
<!-- end content-top -->
<div class="container">
	<div class="row content-middle">
		<!-- start content-middle -->
		@foreach ($trendPrograms as $program)
			<div class="col-md-4">
				@include('components.home.block-small-program', ['program', $program])
				<br>
			</div>
		@endforeach
	</div>
	<!-- end content-middle -->
</div>