@extends('_layouts.main')

@section('title', 'Get Involved')

@section('hero-media')
	<video autoplay loop muted playsinline>
		<source src="/assets/video/potting-plants.mp4"
		        type="video/mp4">
		<!-- TODO: a still image here as a fallback -->
		Sorry, your browser doesn't support embedded videos.
	</video>
@endsection

@section('hero-content')
	<h1>Get Involved</h1>
	<p>Creating a country where every community is a clean, green, beautiful and resilient place to live starts with
		people taking individual responsibility and collective action. Keep Boston Beautiful.
	</p>
@endsection

@section('content')
	<section class="kbb-get-involved">
		<p>
			<a href="mailto:josh@keepbostonbeautiful.org" class="kbb-button">Start the Conversation</a>
		</p>
	</section>
@endsection
