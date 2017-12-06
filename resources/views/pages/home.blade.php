@extends('layout')

@section('title')
	Home
@endsection

@section('banner-top')
	@include('components.home.banner-top')
@endsection

@section('content')

	@include('components.home.trend-program')
	@include('components.home.banner-bottom')

@endsection