<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Laravel IRC logs</title>
	<link rel="stylesheet" type="text/css" href="{{ URL::to("css/style.css") }}">
</head>
<body>

	<header class="header">
		<input name="search" value="{{ isset($search) ? $search : null }}" class="header-search" action="{{ URL::to('search/') }}" contenteditable placeholder="Laravel IRC logs" autofocus autocomplete="off" spellcheck="false">
		<a class="logo" href="http://laravel.com">
			{{ HTML::image('img/laravel.png', 'Laravel') }}
		</a>
	</header>

	<section class='container'>
		<main class='content'>
			@yield('content')
		</main>
		<aside class='timeline'>
			@include('partials.timeline')
		</aside>
	</section>

<script src="{{ URL::to("js/infinite-scrolling.js") }}"></script>
<script src="{{ URL::to("js/scripts.js") }}"></script>
	
</body>
</html>