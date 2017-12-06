@extends('layout')

@section('title')
Programs
@endsection

@section('banner-top')
@endsection

@section('content')

	@include('components.programs.banner-top')
	
	<div class="container">
		<div class="row single-top">
			
			@include('components.programs.left-side')
			@include('components.programs.right-side')

			<div class="clear"></div>
		</div>
	</div> 

@endsection