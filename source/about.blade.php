@extends('_layouts.main')

@section('title', 'Our Story')

@section('hero-media')
		<video autoplay loop muted playsinline>
			<source src="/assets/video/video-optimized-further.mp4"
			type="video/mp4">
			<!-- TODO: a still image here as a fallback -->
			Sorry, your browser doesn't support embedded videos.
		</video>
@endsection

@section('hero-content')
		<h1>About Us</h1>
		<p>Boston Volunteers is a non-profit organization fighting to make Boston cleaner, safer, and better.</p>
@endsection

@section('content')
<div class="bv-content-container bv-content-text bv-content-profiles">
<h2>We’re working together to make Boston even better.
</h2>
<aside class="bv-impact-results">
	<div class="bv-impact-fact">
		<em>10,970</em> Boston Volunteers strong
	</div>
	<div class="bv-impact-fact">
		<em>33</em> Upcoming Boston Volunteer events
	</div>
</aside>
<p>When Boston Volunteer was founded in 2006, we had one goal: to ensure everyone in Boston has the opportunity to succeed. And now, we’re ready to take that challenge to the next level. Our leadership team is committed to bringing even more volunteers and nonprofit organizations together with the help of our local partners and generous volunteers.</p>
<a href="/get-involved/" class="bv-button">Learn how you can help</a>
</div>
	<section class="bv-quotes bv-profiles">
		<div class="bv-center bv-content-text">
			<h2>Our Leadership Team</h2>
			<p>We are thrilled to have some of the most committed, passionate, and innovative Bostonians around leading the charge at Boston Volunteer. Here's who you'll be working with:</p>
		</div>
		<section class="bv-content-text">
			<img class="bv-profile-image" src="/assets/images/josh_suit.jpg" alt="Josh Konoff">
			<h2>Josh Konoff</h2>
			<h3>Founder</h3>
			<p>Josh Konoff is the entrepreneur and Executive Director of the Boston Volunteers, one of Boston’s most popular nonprofits. Josh also enjoys reading, coding, and being immersed in nature. His favorite books are War and Peace and Atomic Habits. </p>
			<p>Josh is a data analyst who uses his natural talents for statistics and programming to help people live better, happier lives. Check out his GitHub for meaningful, measurable results.</p>
			<p>Send Josh a message at <a href="mailto:josh@bostonvolunteer.org">josh@bostonvolunteer.org</a> or <a href="https://www.linkedin.com/in/joshuakonoff8/">connect with Josh on LinkedIn.</a></p>
		</section>
		<section class="bv-content-text">
			<img class="bv-profile-image" src="/assets/images/zach.jpg" alt="Zach H.">
			<h2>Zach H.</h2>
			<!--h3>Title?</h3-->
			<p>Zach found his passion for technology when he was a kid playing video games. Pursuing this passion, he decided to go into software engineering and has been looking to help others break into the industry as well.</p>
			<p>Though coding and gaming while he is indoors, he is also an outdoorsman. Zach enjoys paddleboarding, jetskiing, racing, and many other adrenaline junkie activities!</p>
		</section>
		<section class="bv-content-text">
			<img class="bv-profile-image" src="/assets/images/ashley-avatar.jpg" alt="Ashley Kolodziej">
			<h2>Ashley Kolodziej</h2>
			<h3>Chief Creative Officer</h3>
			<p>Ashley Kolodziej serves as the Chief Creative Officer for Boston Volunteer, and is responsible for managing the design and development of all creative and marketing materials. With over a decade of experience in design and web development, she brings a sharp eye and clear vision to Boston Volunteer's messaging. She can't wait to see it grow.</p>
			<p>Ashley's prior volunteering and speaking experience includes <a href="https://newenglandgivecamp.org/">New England GiveCamp</a>, <a href="https://boston.wordcamp.org">WordCamp Boston</a>, and <a href="https://www.wpcampus.org/">WPCampus</a>. As an Assistant Creative Director and lecturer at Boston University, she also has a passion for education, and maintains a YouTube channel to help further web design and development education, <a href="https://www.youtube.com/channel/UCEH9yYZu65uFf9CEB-aH7tg">Professor K Explains</a>.</p>
			<p>You can see her latest work on <a href="https://www.polywork.com/ashleykolodziej/">her Polywork profile</a>.</a></p>
		</section>
		<section class="bv-content-text">
			<img class="bv-profile-image" src="/assets/images/jim-avatar.jpg" alt="Jim Reevior">
			<h2>Jim Reevior</h2>
			<h3>Chief Technical Officer</h3>
			<p>Jim Reevior serves as the Chief Technical Officer for Boston Volunteer, and is responsible for managing the development and maitenance of the Boston Volunteer website and associated technologies. A longtime self-learner, Jim worked his way up from IT and helpdesk work to building some of the most visible sites in Boston, including <a href="https://www.statnews.com/">The Boston Globe's STAT</a> and numerous sites at <a href="http://www.bu.edu/">Boston University</a>.</p>
			<p>Jim brings extensive volunteering leadership experience to the table, serving as a longtime organizer for <a href="https://newenglandgivecamp.org/">New England GiveCamp</a> and <a href="https://boston.wordcamp.org">WordCamp Boston</a>. He currently works at Boston University as a web developer, and never left his drive to help from his helpdesk days behind.</p>
			<p>You can see his latest work on <a href="https://work.hirozed.com/">his website</a>.</a></p>
		</section>
	</section>
@endsection
