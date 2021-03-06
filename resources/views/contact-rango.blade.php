<!DOCTYPE html>
<html lang="en">
<head>
<title>CG - Contáctame</title>
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
		@include('partials-rango.nav')

	@include('partials-rango.header-home')

	<!-- Menu -->
	@include('partials-rango.menu-home')

	<!-- Home -->

	<div class="home">
		<div class="home_background_container prlx_parent">
			<div class="home_background prlx" style="background-image:url(rango/images/home_background1.png)"></div>
		</div>
		
		<div class="home_title">
			<h2>Contáctame</h2>
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
						
						<div class="reply_title">Envíame un mensaje</div>
						<div class="reply_form_container">
							
							<!-- Reply Form -->

							<form id="reply_form" action="post">
								<div>
									<input id="reply_form_name" class="input_field reply_form_name" type="text" placeholder="Nombre" required="required" data-error="Name is required.">
									<input id="reply_form_email" class="input_field reply_form_email" type="email" placeholder="E-mail" required="required" data-error="Valid email is required.">
									<input id="reply_form_subject" class="input_field reply_form_subject" type="text" placeholder="Asunto" required="required" data-error="Subject is required.">
									<textarea id="reply_form_message" class="text_field reply_form_message" name="message"  placeholder="Mensaje" rows="4" required data-error="Please, write us a message."></textarea>
								</div>
								<div>
									<button id="reply_form_submit" type="submit" class="reply_submit_btn trans_300" value="Submit">
										Enviar mensaje
									</button>
								</div>

							</form>

						</div>
					</div>

				</div>

				<div class="col-lg-4">
					
					<!-- Contact Info -->

					<div class="contact_info">

						<div class="contact_title">Información de Contacto</div>
						
						<div class="contact_info_container">

							@include('partials-rango.logo')
							<p>Si deseas contactarme, enviame un mesaje mediante el fomulario o enviame un correo con tus datos. Saludos</p>

							<div class="address_container clearfix">
								<div class="contact_info_icon">i</div>
								<div class="contact_info_content">
									<ul>
										<li class="address">La Nueva Tola</li>
										<li class="city">Quito, Ecuador</li>
										<li class="phone">+593 02 257 2656</li>
										<li class="email">contact@mywebcg.site</li>
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


</html>