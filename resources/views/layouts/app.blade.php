<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>heike.tech</title>
	<link href='/node_modules/woofmark/dist/woofmark.css' rel='stylesheet' type='text/css' />
	<link rel="stylesheet" type="text/css" href="/app.css">
</head>
<body>
	<div class="container">
		@include('partials.left_menu')

		@yield('content')
	</div>

	<script src="/node_modules/mithril/mithril.min.js"></script>
	<!-- Markdown Editor -->
	<script src="/node_modules/woofmark/dist/woofmark.min.js"></script>
	<script src='/node_modules/woofmark/example/megamark.js'></script>
	<script src='/node_modules/woofmark/example/domador.js'></script>
	<script src="/app.js"></script>

	@if(Request::is('posts/create'))
	<script src="/editor.js"></script>
	@endif
</body>
</html>