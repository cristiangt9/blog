<!DOCTYPE html>
<html lang="en">
<head>
<title>CG - Mapa</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="RanGO Project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon" href="http://blog.test/img/mifavicon.png">
<link rel="stylesheet" type="text/css" href="{{ asset('rango/styles/bootstrap4/bootstrap.min.css')}}">
<link href="{{ asset('rango/plugins/fontawesome-free-5.0.1/css/fontawesome-all.css')}}" rel="stylesheet" type="text/css">
<link href="{{ asset('rango/plugins/colorbox/colorbox.css" rel="stylesheet"')}} type="text/css">
<link rel="stylesheet" type="text/css" href="{{ asset('rango/styles/blog_post_styles.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('rango/styles/blog_post_responsive.css')}}">
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
			<div class="home_background prlx" style="background-image:url(../rango/images/blog_background.png)"></div>
		</div>
		
		<div class="home_title">
			<h2>Mapa del Sitio</h2>
			<div class="next_section_scroll">
				<div class="next_section nav_links" data-scroll-to=".blog">
					<i class="fas fa-chevron-down trans_200"></i>
					<i class="fas fa-chevron-down trans_200"></i>
				</div>
			</div>
		</div>
	
	</div>

	<!-- Blog -->
	<div class="blog">
		<div class="container">
			<h2>Mapa del Sitio</h2>
			<div class="row">
				<div class="col-lg-12">
					<ul>
						<li class="nivel_1"><a href="{{ route('home')}}">Inicio</a></li>
						<li class="nivel_1"><a href="{{ route('sobre-mi')}}">Sobre mi</a></li>
						<li class="nivel_1"><a href="{{ route('habilidades')}}">Habilidades</a></li>
						<li class="nivel_1"><a href="{{ route('servicios')}}">Servicios</a></li>
						<li class="nivel_1"><a href="{{ route('portafolio')}}">Portafolio</a>
							<ul>
								<li class="nivel_2"><a href="{{route('aventura')}}">Flyer para Aventura</a></li>
								<li class="nivel_2"><a href="{{route('flayer_shawarmeria')}}">Flyer para la Shawarmeria</a></li>
								<li class="nivel_2"><a href="{{route('menu_shawarmeria')}}">Menú para la Shawarmeria</a></li>
								<li class="nivel_2"><a href="{{ route('nativos')}}">Flyer para Nativos</a></li>
								<li class="nivel_2"><a href="{{ route('previfire')}}">Flyer para Previfire</a></li>
								<li class="nivel_2"><a href="{{ route('previfire_logo')}}">Logo para Previfire</a></li>
							</ul>
						</li>
						<li class="nivel_1"><a href="{{ route('blog')}}">Blog</a></li>
						<li class="nivel_1"><a href="{{ route('contactame')}}">Contactame</a></li>
						<li class="nivel_1"><a href="#">Web</a>
							<ul>
								<li class="nivel_2"><a href="{{route('blog')}}">Blog</a></li>
								<li class="nivel_2"><a href="#">Foros</a></li>
								<li class="nivel_2"><a href="#">Q&A</a></li>
								<li class="nivel_2"><a href="{{ route('mapaweb')}}">Mapa del sitio</a></li>
							</ul>
						</li>
					</ul>
				</div>
			</div>
		</div>		
	</div>

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
<script src="{{ asset('rango/plugins/easing/easing.js')}}"></script>
<script src="{{ asset('rango/js/blog_post_custom.js')}}"></script>
</body>

</html>