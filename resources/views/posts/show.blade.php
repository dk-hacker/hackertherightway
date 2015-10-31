@extends('layouts.app')


@section('content')
	@include('partials.show_navbar', ["post" => $post])

	<div id="main">
		<div style="padding:10px 10px 100px">
		{!! $post->content !!}			
		</div>
	</div>
@endsection