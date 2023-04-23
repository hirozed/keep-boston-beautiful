@extends('_layouts.main')

@section('title', 'Our Story')

@section('hero-media')
	<img src="/assets/images/dorchester-park.jpg" type="image/jpeg" alt="Dorchester Park"/>
@endsection

@section('hero-content')
	<h1>About Us</h1>
	<p>We serve as one of the many chapters of the leading national nonprofit, Keep Massachusetts Beautiful</p>
@endsection

@section('content')
	<section class="kbb-quotes kbb-profiles">
		<div class="kbb-center kbb-content-text">
			<h2>Our Leadership Team</h2>
			<p>We are thrilled to have some of the most committed, passionate, and innovative Bostonians around leading
				the charge at Boston Volunteer. Here's who you'll be working with:</p>
		</div>
		<section class="kbb-content-text">
			{{--<img class="kbb-profile-image" src="/assets/images/josh_suit.jpg" alt="Josh Konoff">--}}
			<h2>Josh Konoff</h2>
			<p>Josh Konoff is the founder of Keep Brookline Beautiful and the Boston Volunteers.
				Josh is a dedicated volunteer who has early memories of cleaning local parks.
				In 2008 Josh founded bostonvolunteer.org and partners with great communities including Framingham Public
				School and Boston University. Upcoming events include cleaning the Charles.
			</p>
			<p>In addition to creating local parks and creating community, Josh is the top-performer realtor in the
				Brookline and Boston area. Josh believes that you can have a massive positive impact on happiness by
				helping people find a good place to live. For fun Josh also enjoys hiking, reading, and learning
				languages. Josh speaks Spanish and is continuously improving his Chinese.</p>
			<p>Send Josh a message at <a href="mailto:josh@keepbostonbeautiful.org">josh@keepbostonbeautiful.org</a></p>
		</section>
		<section class="kbb-content-text">
			{{--<img class="kbb-profile-image" src="/assets/images/image.jpg" alt="Zach H.">--}}
			<h2>Neil Rhein</h2>
			<p>Neil Rhein is the founder and executive director of Keep Massachusetts Beautiful. Neil’s career in litter
				abatement began in 2008, when he organized the first Great Mansfield Cleanup and launched a local
				organization called Keep Mansfield Beautiful. In 2014, Neil founded Keep Massachusetts Beautiful to help
				bring these successful programs to towns and cities across Massachusetts.
			</p>
			<p>When he’s not working to advance the cause of Keep Massachusetts Beautiful, Neil operates Bullseye
				Communications, where he provides professional writing, editing, proofreading, and graphic design
				services to corporate and nonprofit clients. He also serves as a member of the Mansfield Select Board
				and is a member of the Massachusetts Municipal Association's Energy and Environment Policy
				Committee.
			</p>
			<p>Send Neil a message at <a href="mailto:neil@keepbostonbeautiful.org">neil@keepbostonbeautiful.org</a></p>
		</section>
		<section class="kbb-content-text">
			{{--<img class="kbb-profile-image" src="/assets/images/jim-avatar.jpg" alt="Jim Reevior">--}}
			<h2>Grace</h2>
			<p>Bio to come.</p>
			{{--<p>Send Grace a message at <a href="mailto:grace@keepbostonbeautiful.org">grace@keepbostonbeautiful.org</a></p>--}}
		</section>
		<section class="kbb-content-text">
			<p>Are you interested in learning more about how you could join our leadership team.</p>
			<p>Learn more: <a href="mailto:grace@keepbostonbeautiful.com">grace@keepbostonbeautiful.com</a></p>


		</section>
	</section>
@endsection
