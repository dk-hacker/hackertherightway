@extends('layouts.app')


@section('content')
	@include('partials.show_navbar', ['post' => $post])

	<div id="main">
		<form method="POST" action="/posts" style="padding:10px;margin-top:60px;">
			<input type="text" name="title" placeholder="What is the article title ?" required>
			<br >
			<textarea name="description" placeholder="Write a brief description for this article... (optional)"></textarea>
			<input type="text" value="{{csrf_token()}}" name="_token" style="display:none;"> 
			@include('partials.editor', ['post' => $post])
			<button type="submit">Publish</button>
		</form>
	</div>
@endsection