@extends('_layouts.main')

@section('hero-media')
	<video autoplay loop muted playsinline>
		<source src="/assets/video/park-cleanup.mp4"
		        type="video/mp4">
		<!-- TODO: a still image here as a fallback -->
		Sorry, your browser doesn't support embedded videos.
	</video>
@endsection

@section('hero-content')
	<h1>Creating Community and Keeping Boston Beautiful</h1>
@endsection

@section('content')
	<section class="kbb-center">
		<aside>
			<h3>Helping local residents</h3>
			<p>
				A leading local nonprofit, Keep Boston Beautiful inspires and educates people to take action every day
				to improve and beautiful their local community.<br/>
				We envision a Boston which is a cleaner, greener, and more beautiful place to live.
			</p>
			<p>
				Learn how you can make a tax deductible contribution and Keep Boston Beautiful.
			</p>
			<p>
				<a href="mailto:josh@keepbostonbeautiful.org" class="kbb-button">Contact us to learn more</a>
			</p>
		</aside>
	</section>
@endsection
