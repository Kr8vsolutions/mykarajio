@extends('layouts.homepage_layout')
@section('content')
	<div class="homepage-hero">
		<div class="container">
			<h1 class="hero-heading">Job Cards, Finances,<br> Employees And Payments, Managed</h1>
			<p class="hero-sub-heading">Garage Management Has Never Been Easier! Get It For Free Now And Benefit From The Wide<br> Range Of Features The Mykaraj System Offers.</p>
			<div class="hero-btns">
				<a href="javascript:void(0)" class="demo-btn">Get a Demo</a>
				<a href="https://app.mykaraj.com/garage/subscribe-now" class="subscribe-btn">Subscribe Now</a>
			</div>
		</div>
	</div>
	<div class="homepage-about">
		<div class="container">
			<h1 class="about-heading">About</h1>
			<p class="about-sub-heading">New Entrants To The Automotive Market, Struggle To Find A Platform That Makes Car Service Management & Experiences Easy For The Layman. We Gamify The Servicing Process To Make Car Servicing Approachable And More Convenient.</p>
		</div>
	</div>
	<div class="homepage-features">
		<div class="container" data-aos="fade-down">
			<h1 class="features-heading">Features</h1>
			<p class="features-sub-heading">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua.</p>
		</div>
		<div class="features-row">
			<div class="container">
				<div class="features-row-left">
					<h2 data-aos="fade-right">Manage all your booking requests</h2>
					<p data-aos="fade-left">Check your daily calendar to see the upcoming bookings with all the details needed for the service.</p>
				</div>
				<div class="features-row-img" data-aos="fade-left">
					<img src="{{ asset('img/homepage/Group 69709.png') }}" height="500">
				</div>
			</div>	
		</div>
	</div>
	<div class="homepage-features-2">
		<div class="features-2-row">
			<div class="container">
				<div class="features-2-row-img" data-aos="fade-up-right">
					<img src="{{ asset('img/homepage/Group 69574.png') }}" height="500">
				</div>
				<div class="features-2-row-right" data-aos="fade-up-left">
					<h2>Create digital job cards</h2>
					<p>Start the requested job, assign the technicians handle it and then update the customers just few steps. A list of your jobs with the status of each will be shown, with all the details about customer and the car.</p>
				</div>
			</div>	
		</div>
	</div>
	<div class="homepage-features-3">
		<div class="features-3-row">
			<div class="container">
				<div class="features-3-row-left" data-aos="fade-up-right">
					<h2>Send quotations, offers and payment links</h2>
					<p>Send customized quotations, offers and payment links through Mykaraj app, Whatsapp and Emails.</p>
				</div>
				<div class="features-3-row-img" data-aos="fade-up-left">
					<img src="{{ asset('img/homepage/Group 69875.png') }}" height="500">
				</div>
			</div>	
		</div>
	</div>
	<div class="homepage-features-4">
		<div class="features-4-row">
			<div class="container">
				<div class="features-4-row-img" data-aos="fade-up-right">
					<img src="{{ asset('img/homepage/Group 69612.png') }}" height="500">
				</div>
				<div class="features-4-row-right" data-aos="fade-up-left">
					<h2>Manage your financials</h2>
					<p>Keep an eye on your monthly revenue and expenses. Save you jobs history and financial details of each service done. Create your custom invoices and share them with your customers through the Mykaraj app, Whatsapp and Emails.</p>
				</div>
			</div>	
		</div>
	</div>
	<div class="homepage-features-5">
		<div class="features-5-row">
			<div class="container">
				<div class="features-5-row-left" data-aos="fade-up-right">
					<h2>Manage your employees</h2>
					<p>Create limited access accounts, assign tasks and check their efficiency and generate productivity reports.</p>
				</div>
				<div class="features-5-row-img" data-aos="fade-up-left">
					<img src="{{ asset('img/homepage/Group 69813.png') }}" height="500">
				</div>
			</div>	
		</div>
	</div>
	<div class="homepage-features-6">
		<div class="features-6-row">
			<div class="container">
				<div class="features-6-row-img" data-aos="fade-up-right">
					<img src="{{ asset('img/homepage/Group 69814.png') }}" height="500">
				</div>
				<div class="features-6-row-right" data-aos="fade-up-left">
					<h2>Easy customer management</h2>
					<p>Create offers, discounts, service packages and loyality programs digitally.</p>
				</div>
			</div>	
		</div>
	</div>
	<div class="homepage-features-7">
		<div class="features-7-row">
			<div class="container">
				<div class="features-7-row-left" data-aos="fade-up-right">
					<h2>Create marketing campgains</h2>
					<p>Send single bulk SMS, Whatsapp and email promotion messages to all your clients/employees.</p>
				</div>
				<div class="features-7-row-img" data-aos="fade-up-left">
					<img src="{{ asset('img/homepage/Group 69856.png') }}" height="500">
				</div>
			</div>	
		</div>
	</div>
	<div class="homepage-request-for-demo">
		<div class="container">
			<h1>Request For A Demo</h1>
			<br>
			<p>Get Benefit From The Wide Range Of Features The MyKaraj System Offers.</p>
			<a href="javascript:void(0)" class="get-a-demo-btn">Get a Demo</a>
		</div>	
	</div>
@endsection
	