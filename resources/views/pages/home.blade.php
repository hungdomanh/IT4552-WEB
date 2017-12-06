@extends('layout')

@section('title')
	Home
@endsection

@section('banner-top')
	@include('components.home.banner-top')
@endsection

@section('content')

	@include('components.home.trend-program', ['trendPrograms', $trendPrograms])
	@include('components.home.banner-bottom')

@endsection