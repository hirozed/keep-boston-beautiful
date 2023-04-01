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
		<link href="https://fonts.googleapis.com/css2?family=Domine&family=Fraunces&family=Newsreader&family=Petrona&display=swap" rel="stylesheet">
		<script defer src="{{ mix('js/main.js', 'assets/build') }}"></script>
	</head>
	<body>
		<header>
			<nav class="bv-nav" role="navigation">
				<a href="/" id="bv-logo">
					<img src="/assets/images/BV-new-01.svg" alt="Boston Volunteer">
				</a>
				<ul id="js-bv-nav" class="bv-nav-list">
					<li class="bv-nav-item"><a class="bv-nav-link" href="/about">About Us</a></li>
					<li class="bv-nav-item"><a class="bv-nav-link" href="/our-story">Our Story</a></li>
					<li class="bv-nav-item"><a class="bv-nav-link" href="/our-goals">Our Goals</a></li>
					<li class="bv-nav-item"><a class="bv-nav-link" href="/organize-events">Organize an Event</a></li>
					<li class="bv-nav-item bv-nav-callout"><a class="bv-nav-link bv-button bv-nav-button" href="https://www.meetup.com/BostonVolunteer/events/">Find an event</a></li>
					<li class="bv-nav-item bv-nav-callout"><a class="bv-nav-link bv-button bv-nav-button" href="/get-involved">Get Involved</a></li>
					<li class="bv-nav-item bv-nav-callout"><a class="bv-nav-link bv-button bv-nav-button" href="https://www.paypal.com/donate/?hosted_button_id=SDBG7NMRENJ7U" target="_blank">Donate</a></li>
				</ul>
			</nav>
		</header>
		<main>
			<section class="bv-hero">
				<div class="bv-hero-video">
					@yield('hero-media')
				</div>
				<section class="bv-hero-content">
					@yield('hero-content')
				</section>
			</section>
			<!--section class="bv-content"-->
				@yield('content')
			<!--/section-->
		</main>
		<footer>
			<address class="footer-logo">
				<img src="/assets/images/BV-new-01.svg" alt="Boston Volunteer">
				<div class="footer-tagline">
					<p><em>Big enough to deliver, small enough to care.</em></p>
					<p><a href="mailto:josh@bostonvolunteer.org">Contact Us</a></p>
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
					in Boston by <a href="https://ashleykolodziej.com/">Ashley Kolodziej</a> &amp; <a href="https://jimreevior.com/">Jim Reevior</a> for <a href="https://newenglandgivecamp.org/">New England GiveCamp</a>
				</p>
			</address>
		</footer>
	</body>
</html>
