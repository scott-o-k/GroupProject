<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>HikingTrailz</title>
	<link rel="stylesheet" href="http://necolas.github.io/normalize.css/3.0.2/normalize.css">
	<link href='http://fonts.googleapis.com/css?family=Rock+Salt|Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="{{ URL::asset('css/styles.css') }}">
	<link rel="stylesheet" href="{{ URL::asset('fonts/font-awesome/css/font-awesome.min.css') }}">
	<link rel="stylesheet" href="{{ URL::asset('fonts/weather-icons/css/weather-icons.min.css') }}">
</head>
<body>
	<div class="hero">
		<div class="photo" style="background-image: url(<?php if (isset($imageURL)) { echo $imageURL;} else { echo '/css/images/Sup2HDR.jpg';} ?>)">
			<header>
				<nav>
					<span class="logo">
						<a href="/">Hiking Trailz</a>
					</span>
					<div>
						<div class="options browse">
							<div>Browse All</div>
							<div>See All The Mountains</div>
						</div>
						<a href="/suggest"><div class="options suggest">
							<div>Suggest A Trail</div>
							<div>Send Us What You Wanna See</div>
						</div></a>
						<div class="options randomtrail">
							<div>Random Trail</div>
							<div>Any Random Trail</div>
						</div>
					</div>
					<span class="user-options">
						@if(Auth::guest())
						<a href="/auth/register" title="Signup"><i class="fa fa-user-plus scale"></i></a>
						<a href="/auth/login" title="Login"><i class="fa fa-sign-in scale"></i></a>
						@else
						<a href="/profile" title="Edit Profile"><i class="fa fa-cogs scale"> </i></a>
						<a href="{{ url('/auth/logout') }}" title="Logout"><i class="fa fa-external-link scale"></i></a>
						@endif
					</span>
				</nav>
			</header>
			<div class="title">
				@section('title')
				@show
			</div>
		</div>

	</div>
	<div class="blah">
		@section('featured')
		@show
	</div>
	<main>

		@section('tagline')
		@show
		<div class="browse-section">
			
		@yield('main_content')

		</div>

	</main>

	<footer>
		<span class="logo-footer">
			<a href="/">Hiking Trailz</a>
		</span>
		<span class="about">
			<h2><a href="/about">About Us</a> | 
			<a href="/faq">FAQ</a></h2>
		</span>
		<span class="social-logos">
			<a href="https://instagram.com/"><i class="fa fa-instagram fa-3x"></i></a>
			<a href="https://www.facebook.com/"><i class="fa fa-facebook-official fa-3x"></i></a>
			<a href="https://twitter.com/"><i class="fa fa-twitter fa-3x"></i></a>
		</span>
	</footer>
	<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
	<script src="http://cdnjs.cloudflare.com/ajax/libs/handlebars.js/2.0.0/handlebars.js"></script>
	<script type="text/javascript" src="{{ URL::asset('javascript/instafeed.min.js') }}"></script>
	<script type="text/javascript" src="{{ URL::asset('javascript/jquery.simplyscroll.min.js') }}"></script>
	<script src="{{ URL::asset('javascript/main.js') }}"></script>
	<script src="{{ URL::asset('/masonry.pkgd.js') }}"></script>
</body>
</html>