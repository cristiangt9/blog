<!DOCTYPE html>
<html lang="en">
<head>
<title>CG - Inicio</title>
@include('partials-rango.head-home')
<link rel="stylesheet" type="text/css" href="{{ asset('rango/styles/responsive.css')}}">
</head>

<body>

<div class="super_container">
	<!-- Header -->
	<header class="header d-flex flex-row justify-content-end align-items-center trans_200">
		
		<!-- Logo -->
		<div class="logo mr-auto">
			<a href="#"><span>C</span>ristian <span>G</span>onzález </a>
		</div>

		<!-- Navigation -->
		<nav class="main_nav justify-self-end text-right">
			<ul>
				<li class="active"><a href="#">Inicio</a></li>
				<li><a href="{{ route('sobre-mi')}}">Sobre mi</a></li>
				<li><a href="services.html">Habilidades</a></li>
				<li><a href="services.html">Servicios</a></li>
				<li><a href="portfolio.html">Portafolio</a></li>
				<li><a href="blog.html">Blog</a></li>
				<li><a href="contact.html">Contactame</a></li>
			</ul>
	@include('partials-rango.header-home')
	<!-- Menu -->
	@include('partials-rango.menu-home')
	<!-- Home -->
	@include('partials-rango.home-home')
	<!-- Icon Boxes -->
	@include('partials-rango.icon-boxes-home')
	<!-- Vertical Slider Section -->
	@include('partials-rango.vertical-slider-home')
	<!-- Services -->
	@include('partials-rango.services-home')
	<!-- Features -->
	@include('partials-rango.features-home')
	<!-- Call to action -->
	@include('partials-rango.call-home')
	<!-- Text Line -->
	@include('partials-rango.text-home')
	<!-- Newsletter -->
	@include('partials-rango.newsletter-home')
	<!--Content-->
	@yield('content')
	<!-- Footer -->
	@include('partials-rango.footer-home')
</div>
	<!-- Scripts -->
	@include('partials-rango.scripts')

</body>

</html>