@extends('_layouts.main')

@section('title', 'Organize Events')

@section('hero-media')
	<video autoplay loop muted playsinline>
		<source src="/assets/video/pexels-julia-m-cameron-6894045.mp4"
		type="video/mp4">
		<!-- TODO: a still image here as a fallback -->
		Sorry, your browser doesn't support embedded videos.
	</video>
@endsection

@section('hero-content')
	<h1>Organize Events</h1>
	<p>Passionate about a cause, but need help? We can connect you with a workforce.</p>
@endsection

@section('content')
<div class="bv-content-container">
	<p>The core of Boston Volunteers is people like you: folks of all ages who are passionate, ready to make a difference, and have a big heart. We’re on a mission to make all corners of Boston cleaner, healthier, and safer, and we’re counting on you to lead the charge in telling us what we’re missing. If you are a nonprofit, or know a nonprofit who could use our help, let’s partner by organizing an event together.</p>
	<p>By organizing an event through Boston Volunteer, you’ll gain access to our near-11,000 person workforce through Meetup. You’ll also have the opportunity to introduce yourself to a whole new network of potential long-term, committed volunteers. Our volunteers are eager to meet you and make Boston better.</p>
	<p>We’ve successfully partnered with dozens of local nonprofits. If you are a local nonprofit in need of extra hands, or if you know of a nonprofit who we could connect with, let’s talk.</p>
	<a href="mailto:josh@bostonvolunteer.org" class="bv-button">Email Josh for more information</a>
</div>
@endsection
