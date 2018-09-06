<!DOCTYPE html>
<html lang="en">
<!-- Head -->
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
		@include('partials-rango.logo')


		<!-- Navigation -->
		@include('partials-rango.nav')

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
	<!-- Text Line -->
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