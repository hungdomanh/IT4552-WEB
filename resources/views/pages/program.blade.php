@extends('layout')

@section('title')
	Program
@endsection

@section('banner-top')
@endsection

@section('content')

	@include('components.programs.banner-top')
	
	<div class="container">
		<div class="row single-top">
			
			@include('components.program.left-side')
			@include('components.programs.right-side')

			<div class="clear"></div>
		</div>
	</div> 
	
@endsection