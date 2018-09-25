<!DOCTYPE html>
<html lang="en">
<head>
<title>CG - 404</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="RanGO Project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon" href="http://blog.test/img/mifavicon.png">
<link rel="stylesheet" type="text/css" href="{{ asset('rango/styles/bootstrap4/bootstrap.min.css')}}">
<link href="{{ asset('rango/plugins/fontawesome-free-5.0.1/css/fontawesome-all.css')}}" rel="stylesheet" type="text/css">
<link href="{{ asset('rango/plugins/colorbox/colorbox.css')}}" rel="stylesheet" type="text/css">
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
			<div class="home_background prlx" style="background-image:url({{asset('rango/images/blog_background.png')}})"></div>
		</div>
		
		<div class="home_title">
			<h2>404</h2>
			<h2>Página No Encontrada</h2>
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
			<h2>404</h2>
			<div class="row">
				<div class="col-lg-12">
					<cite>Página No Encontrada</cite>
					<div class="row">
						<p>Haga click en <a href="{{route('home')}}" style="color: #00AFFA;">home</a> para regresar</p>
					</div>
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

@section('content')

	<section class="pages container">
		<div class="page page-about">
			<h1 class="text-capitalize">404</h1>
			<cite>Página No Encontrada</cite>
			<div class="divider-2" style="margin: 35px 0;"></div>
			<p>Haga click en <a href="{{route('home')}}">home</a> para regresar</p>
		</div>
	</section>

@stop