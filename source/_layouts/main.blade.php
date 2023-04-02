<!DOCTYPE html>
<html lang="{{ $page->language ?? 'en' }}">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="canonical" href="{{ $page->getUrl() }}">
	<meta name="description" content="{{ $page->description }}">
	<title>{{ $page->title }}</title>
	<link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Domine&family=Fraunces&family=Newsreader&family=Petrona&display=swap"
	      rel="stylesheet">
	<script defer src="{{ mix('js/main.js', 'assets/build') }}"></script>
</head>
<body>
<header>
	<nav class="kbb-nav" role="navigation">
		<a href="/" id="kbb-logo">
			<img src="/assets/images/kbb-logo.svg" alt="Keep Boston Beautiful">
		</a>
		<ul id="js-kbb-nav" class="kbb-nav-list">
			<li class="kbb-nav-item">
				<a class="kbb-nav-link" href="/about">Who We Are</a>
			</li>
			<li class="kbb-nav-item kbb-nav-callout">
				<a class="kbb-button" href="/get-involved">Get Involved</a>
			</li>
		</ul>
	</nav>
</header>
<main>
	<section class="kbb-hero">
		<div class="kbb-hero-video">
			@yield('hero-media')
		</div>
		<section class="kbb-hero-content">
			@yield('hero-content')
		</section>
	</section>
	<!--section class="kbb-content"-->
	@yield('content')
	<!--/section-->
</main>
<footer>
	<address class="footer-logo">
		<img src="/assets/images/kbb-logo.svg" alt="Boston Volunteer">
		<div class="footer-tagline">
			<p><a href="mailto:josh@keepbostonbeautiful.org">Reach out to see how you can get involved.</a></p>
		</div>
	</address>
	<address class="footer-credit">
		<p>
			Made with
			<svg viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg" aria-labelledby="heart-icon" role="img">
				<title id="heart-icon">love</title>
				<path d="M 10,30
							A 20,20 0,0,1 50,30
							A 20,20 0,0,1 90,30
							Q 90,60 50,80
							Q 10,60 10,30 z"/>
			</svg>
			in Boston by <a href="https://ashleykolodziej.com/">Ashley Kolodziej</a> &amp; <a
					href="https://jimreevior.com/">Jim Reevior</a> for <a href="https://newenglandgivecamp.org/">New
				England GiveCamp</a>
		</p>
	</address>
</footer>
</body>
</html>
