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
			
			@include('components.program.left-side', ['program', $program])
			@include('components.program.right-side')

			<div class="clear"></div>
		</div>
	</div> 
	
@endsection