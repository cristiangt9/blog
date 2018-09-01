<!DOCTYPE html>
<html lang="en">
<head>
<title>CG - Contact</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="RanGO Project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon" href="{{ asset('img/mifavicon.png')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('rango/styles/bootstrap4/bootstrap.min.css')}}">
<link href="{{ asset('rango/plugins/fontawesome-free-5.0.1/css/fontawesome-all.css')}}" rel="stylesheet" type="text/css">
<link href="{{ asset('rango/plugins/colorbox/colorbox.css')}}" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="{{ asset('rango/styles/contact_styles.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('rango/styles/contact_responsive.css')}}">
</head>

<body>

<div class="super_container">
	
	<!-- Header -->
	<header class="header d-flex flex-row justify-content-end align-items-center trans_200">
		
		<!-- Logo -->
		@include('partials-rango.logo')


		<!-- Navigation -->
		<nav class="main_nav justify-self-end text-right">
			<ul>
				<li><a href="{{ route('home')}}">Inicio</a></li>
				<li><a href="{{ route('sobre-mi')}}">Sobre mi</a></li>
				<li><a href="{{ route('habilidades')}}">Habilidades</a></li>
				<li><a href="{{ route('servicios')}}">Servicios</a></li>
				<li><a href="{{ route('portafolio')}}">Portafolio</a></li>
				<li><a href="{{ route('blog')}}">Blog</a></li>
				<li class="active"><a href="{{ route('contactame')}}">Contactame</a></li>
			</ul>
	@include('partials-rango.header-home')

	<!-- Menu -->

	<div class="menu_container">
		<div class="menu menu_mm text-right">
			<div class="menu_close"><i class="far fa-times-circle trans_200"></i></div>
				<li class="menu_mm"><a href="{{ route('home')}}">Home</a></li>
				<li class="menu_mm"><a href="{{ route('sobre-mi')}}">Sobre mi</a></li>
				<li class="menu_mm"><a href="{{ route('habilidades')}}">Habilidades</a></li>
				<li class="menu_mm"><a href="{{ route('servicios')}}">Servicios</a></li>
				<li class="menu_mm"><a href="{{ route('portafolio')}}">Portafolio</a></li>
				<li class="menu_mm"><a href="{{ route('blog')}}">Blog</a></li>
				<li class="menu_mm active"><a href="{{ route('contactame')}}">Contactame</a></li>
		</div>
	</div>

	<!-- Home -->

	<div class="home">
		<div class="home_background_container prlx_parent">
			<div class="home_background prlx" style="background-image:url(rango/images/home_background1.png)"></div>
		</div>
		
		<div class="home_title">
			<h2>Contact</h2>
			<div class="next_section_scroll">
				<div class="next_section nav_links" data-scroll-to=".contact">
					<i class="fas fa-chevron-down trans_200"></i>
					<i class="fas fa-chevron-down trans_200"></i>
				</div>
			</div>
		</div>
	
	</div>

	<!-- Contact -->

	<div class="contact">
		
		<div class="container">
			
			<!-- Google Map Container -->

	<!-- 		<div class="row">
				<div class="col">
					<div id="google_map">
						<div class="map_container">
							<div id="map">mapa</div>
						</div>
					</div>
				</div>
			</div>-->

			<div class="row contact_row">
				<div class="col-lg-8">
					
					<!-- Reply -->

					<div class="reply">
						
						<div class="reply_title">Leave a reply</div>
						<div class="reply_form_container">
							
							<!-- Reply Form -->

							<form id="reply_form" action="post">
								<div>
									<input id="reply_form_name" class="input_field reply_form_name" type="text" placeholder="Name" required="required" data-error="Name is required.">
									<input id="reply_form_email" class="input_field reply_form_email" type="email" placeholder="E-mail" required="required" data-error="Valid email is required.">
									<input id="reply_form_subject" class="input_field reply_form_subject" type="text" placeholder="Subject" required="required" data-error="Subject is required.">
									<textarea id="reply_form_message" class="text_field reply_form_message" name="message"  placeholder="Message" rows="4" required data-error="Please, write us a message."></textarea>
								</div>
								<div>
									<button id="reply_form_submit" type="submit" class="reply_submit_btn trans_300" value="Submit">
										send reply
									</button>
								</div>

							</form>

						</div>
					</div>

				</div>

				<div class="col-lg-4">
					
					<!-- Contact Info -->

					<div class="contact_info">

						<div class="contact_title">Contact info</div>
						
						<div class="contact_info_container">

							@include('partials-rango.logo')
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras vitae enim enim. Sed nec dignissim purus.</p>

							<div class="address_container clearfix">
								<div class="contact_info_icon">i</div>
								<div class="contact_info_content">
									<ul>
										<li class="address">C/ Libertad, 34</li>
										<li class="city">05200 Arévalo</li>
										<li class="phone">0034 37483 2445 322</li>
										<li class="email">hello@company.com</li>
									</ul>									
								</div>
							</div>
						</div>
					</div>

				</div>
			</div>

		</div>
			
		
	</div>

	<!-- Newsletter -->
	@include('partials-rango.newsletter-home')
	<!-- Footer -->
	@include('partials-rango.footer-home')

</div>

<script src="{{ asset('rango/js/jquery-3.2.1.min.js')}}"></script>
<script src="{{ asset('rango/styles/bootstrap4/popper.js')}}"></script>
<script src="{{ asset('rango/styles/bootstrap4/bootstrap.min.js')}}"></script>
<script src="{{ asset('rango/plugins/greensock/TweenMax.min.js')}}"></script>
<script src="{{ asset('rango/plugins/greensock/TimelineMax.min.js')}}"></script>
<script src="{{ asset('rango/plugins/scrollmagic/ScrollMagic.min.js')}}"></script>
<script src="{{ asset('rango/plugins/greensock/animation.gsap.min.js')}}"></script>
<script src="{{ asset('rango/plugins/greensock/ScrollToPlugin.min.js')}}"></script>
<script src="{{ asset('rango/plugins/colorbox/jquery.colorbox-min.js')}}"></script>
<script src="{{ asset('rango/plugins/scrollTo/jquery.scrollTo.min.js')}}"></script>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCIwF204lFZg1y4kPSIhKaHEXMLYxxuMhA"></script>
<script src="{{ asset('rango/js/CustomGoogleMapMarker.js')}}"></script>
<script src="{{ asset('rango/plugins/easing/easing.js')}}"></script>
<script src="{{ asset('rango/js/contact_custom.js')}}"></script>
</body>

</html>