@extends('_layouts.main')

@section('hero-media')
		<video autoplay loop muted playsinline>
			<source src="/assets/video/pexels-julia-m-cameron-6894187.mp4"
			type="video/mp4">
			<!-- TODO: a still image here as a fallback -->
			Sorry, your browser doesn't support embedded videos.
		</video>
@endsection

@section('hero-content')
		<h1>For over 12 years, the Boston Volunteers have been locally fighting for a cleaner, safer, and better Boston.</h1>
		<p>And we’re just getting started.</p>
		<a href="/our-story" class="bv-button bv-hero-button">Read our story</a>
@endsection

@section('content')
	<div class="bv-center">
		<h2>Imagine the impact you could have here.</h2>
		<p>From many ideas, ONE vision.</p>
		<p>From many events, ONE adventure.</p>
		<p>From many people, ONE community.</p>
		<p>From many priorities, ONE purpose.</p>
	</div>
	<section class="bv-impact">
		<aside class="bv-impact-large">
			<h3>Helping local residents</h3>
			<p>
				Keith, a middle-aged local Boston resident, reached out and told us that he lacked some basic computer skills. He mentioned how hard it is to find gainful employment with almost no computer skills, and asked if we could help. Even though it was different from what we’ve done before, we thought - this is what we’re here for.
			</p>
			<p>This is what the Boston Volunteers is about.</p>
		</aside>
		<aside class="bv-impact-results">
			<div class="bv-impact-fact">
				<em>10,970</em> Boston Volunteers
			</div>
			<div class="bv-impact-fact">
				<em>32</em> Upcoming Boston Volunteer events
			</div>
			<div class="bv-impact-fact span-2">
				<em>13 years</em> of volunteering
			</div>
		</aside>
	</section>
	<section class="bv-quotes">
		<div class="bv-center">
			<h2>Be a part of something bigger.</h2>
			<p>Whether you are looking to create change in your neighborhood, make new friends, or bring new meaning to your free time, becoming active with Boston Volunteer can help you acheive your goals.</p>
		</div>
		<div class="bv-impact">
			<blockquote>
				<p>“Wonderful dedicated people came and helped the students. They really cared about the students and the work they had done. Really helped the students learn how to present their work with confidence.”</p>
				<figcaption>— Sally Ann on Apr 22, 2014.</figcaption>
			</blockquote>
			<blockquote>
				<p>“I liked the volunteers participating in this event, very friendly bunch of people, always smiling, very courteous to the families and worked very hard to help out nearly 600 families!”</p>
				<figcaption>— Mohan Karkada on Jan 15, 2018.</figcaption>
			</blockquote>
			<blockquote>
				<p>“Boston Volunteers is a big group of some of the best people I've met in Boston. Everyone is caring, with wonderful positive energy. Thank you! I'm so glad to have joined this big volunteers family.”</p>
				<figcaption>— Anara on Jul 12, 2013.</figcaption>
			</blockquote>
		</div>
	</section>
	<section class="bv-center">
		<h2 class="bv-callouts-title">Ready to make a difference?</h2>
		<div class="bv-callouts">
			<aside class="bv-callout">
				<h3>Become an organizer</h3>
				<p>Help us connect 11,000 people with 11,000 opportunities. As an organizer, you'll gain valuable skills in leadership and make connections to communities and organizations we can't reach right now.</p>
				<a href="/get-involved" class="bv-button">Get Involved</a>
			</aside>
			<aside class="bv-callout">
				<h3>Donate your time</h3>
				<p>Our mission is to help you give back on your schedule. Whether it's an evening in a Boston soup kitchen or rebuilding your neighborhood playground so kids can play safely, you'll find something that works for you here.</p>
				<a href="https://www.meetup.com/BostonVolunteer/events/" class="bv-button">Find an Event</a>
			</aside>
			<aside class="bv-callout">
				<h3>Get inspired</h3>
				<p>Learn how Boston Volunteer started, and how people just like you built this charity from the ground up. We'll show you how you can make a difference today and keep the momentum going.</p>
				<a href="/our-story" class="bv-button">Our Story</a>
			</aside>
			<aside class="bv-callout">
				<h3>What's next?</h3>
				<p>We're ready to get to work making Boston even better. Learn what we're dreaming about, and how with your help, we plan to make those dreams a reality.</p>
				<a href="/our-goals" class="bv-button">Our Goals</a>
			</aside>
		</div>
	</section>

<!--
	TODO: Include a credits page.
	Video by Pressmaster from Pexels
	Video by Julia M Cameron from Pexels
-->
@endsection
