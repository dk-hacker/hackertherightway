@extends('layouts.app')

@section('content')

	@include('partials.main_navbar')

	<div id="main">
		@include('posts.list', ['posts' => $posts])
	</div>

@endsection