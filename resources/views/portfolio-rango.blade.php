<!DOCTYPE html>
<html lang="en">
<head>
<title>CG - Portafolio</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="RanGO Project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon" href="{{ asset('img/mifavicon.png')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('rango/styles/bootstrap4/bootstrap.min.css')}}">
<link href="{{ asset('rango/plugins/fontawesome-free-5.0.1/css/fontawesome-all.css')}}" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="{{ asset('rango/styles/portfolio_styles.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('rango/styles/portfolio_responsive.css')}}">
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
				<li class="active"><a href="{{ route('portafolio')}}">Portafolio</a></li>
				<li><a href="{{ route('blog')}}">Blog</a></li>
				<li><a href="{{ route('contactame')}}">Contactame</a></li>
			</ul>
	@include('partials-rango.header-home')

	<!-- Menu -->

	<div class="menu_container">
		<div class="menu menu_mm text-right">
			<div class="menu_close"><i class="far fa-times-circle trans_200"></i></div>
			<ul class="menu_mm">
				<li class="menu_mm"><a href="{{ route('home')}}">Home</a></li>
				<li class="menu_mm"><a href="{{ route('sobre-mi')}}">Sobre mi</a></li>
				<li class="menu_mm"><a href="{{ route('habilidades')}}">Habilidades</a></li>
				<li class="menu_mm"><a href="{{ route('servicios')}}">Servicios</a></li>
				<li class="menu_mm active"><a href="{{ route('portafolio')}}">Portafolio</a></li>
				<li class="menu_mm"><a href="{{ route('blog')}}">Blog</a></li>
				<li class="menu_mm"><a href="{{ route('contactame')}}">Contactame</a></li>
			</ul>
		</div>
	</div>

	<!-- Home -->

	<div class="home">
		<div class="home_background_container prlx_parent">
			<div class="home_background prlx" style="background-image:url(rango/images/portfolio_background.png)"></div>
		</div>
		
		<div class="home_title">
			<h2>Portfolio</h2>
			<div class="next_section_scroll">
				<div class="next_section nav_links" data-scroll-to=".portfolio">
					<i class="fas fa-chevron-down trans_200"></i>
					<i class="fas fa-chevron-down trans_200"></i>
				</div>
			</div>
		</div>
	
	</div>

	<!-- Portfolio -->

	<div class="portfolio">
		
		<div class="container">
			<div class="row">
				
				<div class="col">
					<div class="portfolio_categories button-group filters-button-group">
						<ul>
							<li class="portfolio_category active is-checked" data-filter="*">all</li>
							<li class="portfolio_category" data-filter=".graphic_design">graphic design</li>
							<li class="portfolio_category" data-filter=".branding">branding</li>
							<li class="portfolio_category" data-filter=".web_design">web design</li>
							<li class="portfolio_category" data-filter=".motion_graphic">motion graphic</li>
						</ul>
					</div>
				</div>

			</div>

			<div class="row">
				<div class="col">
					
					<div class="portfolio_items product-grid">

						<!-- Portfolio Item -->
						<div class="card branding">
							<div class="card_image">
								<img class="card-img-top" src="{{ asset('rango/images/portfolio_1.jpg')}}" alt="image by https://unsplash.com/@heysupersimi">
							</div>
							
							<div class="card-body">
								<div class="card-header">branding</div>
								<div class="card-title">3D Project for inhouse</div>
								<div class="card-text">Etiam nec odio vestibulum est mattis effic iturut magna. Pellentesque sit am et tellus blandit. Etiam nec odio vestibul. Etiam nec odio vestibulum est mat tis effic iturut magna. Pellentesque sit amet tellus blandit. Etiam nec odio ves tibul.  Nec odio vestibulum est mattis.</div>
								<div class="card-link"><a href="portfolio_item.html">read more</a></div>
							</div>
						</div>

						<!-- Portfolio Item -->
						<div class="card 3d_generated">
							<div class="card_image">
								<img class="card-img-top" src="{{ asset('rango/images/portfolio_2.jpg')}}" alt="image by https://unsplash.com/@anthonydelanoix">
							</div>
							
							<div class="card-body">
								<div class="card-header">3d generated</div>
								<div class="card-title">Identity branding for company</div>
								<div class="card-text">Etiam nec odio vestibulum est mattis effic iturut magna. Pellentesque sit am et tellus blandit. Etiam nec odio vestibul. Etiam nec odio vestibulum est mat tis effic iturut magna. Pellentesque sit amet tellus blandit. Etiam nec odio ves tibul.  Nec odio vestibulum est mattis.</div>
								<div class="card-link"><a href="portfolio_item.html">read more</a></div>
							</div>
						</div>

						<!-- Portfolio Item -->
						<div class="card motion_graphic">
							<div class="card_image">
								<img class="card-img-top" src="{{ asset('rango/images/portfolio_3.jpg')}}" alt="image by https://unsplash.com/@heysupersimi">
							</div>
							
							<div class="card-body">
								<div class="card-header">motion graphic</div>
								<div class="card-title">3D Project for inhouse</div>
								<div class="card-text">Etiam nec odio vestibulum est mattis effic iturut magna. Pellentesque sit am et tellus blandit. Etiam nec odio vestibul. Etiam nec odio vestibulum est mat tis effic iturut magna. Pellentesque sit amet tellus blandit. Etiam nec odio ves tibul.  Nec odio vestibulum est mattis.</div>
								<div class="card-link"><a href="portfolio_item.html">read more</a></div>
							</div>
						</div>

						<!-- Portfolio Item -->
						<div class="card graphic_design">
							<div class="card_image">
								<img class="card-img-top" src="{{ asset('rango/images/portfolio_4.jpg')}}" alt="image by https://unsplash.com/@anthonydelanoix">
							</div>
							
							<div class="card-body">
								<div class="card-header">graphic design</div>
								<div class="card-title">Identity branding for company</div>
								<div class="card-text">Etiam nec odio vestibulum est mattis effic iturut magna. Pellentesque sit am et tellus blandit. Etiam nec odio vestibul. Etiam nec odio vestibulum est mat tis effic iturut magna. Pellentesque sit amet tellus blandit. Etiam nec odio ves tibul.  Nec odio vestibulum est mattis.</div>
								<div class="card-link"><a href="portfolio_item.html">read more</a></div>
							</div>
						</div>

						<!-- Portfolio Item -->
						<div class="card web_design">
							<div class="card_image">
								<img class="card-img-top" src="{{ asset('rango/images/portfolio_5.jpg')}}" alt="image by https://unsplash.com/@heysupersimi">
							</div>
							
							<div class="card-body">
								<div class="card-header">web design</div>
								<div class="card-title">3D Project for inhouse</div>
								<div class="card-text">Etiam nec odio vestibulum est mattis effic iturut magna. Pellentesque sit am et tellus blandit. Etiam nec odio vestibul. Etiam nec odio vestibulum est mat tis effic iturut magna. Pellentesque sit amet tellus blandit. Etiam nec odio ves tibul.  Nec odio vestibulum est mattis.</div>
								<div class="card-link"><a href="portfolio_item.html">read more</a></div>
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
<script src="{{ asset('rango/plugins/Isotope/isotope.pkgd.min.js')}}"></script>
<script src="{{ asset('rango/plugins/scrollTo/jquery.scrollTo.min.js')}}"></script>
<script src="{{ asset('rango/plugins/easing/easing.js')}}"></script>
<script src="{{ asset('rango/js/portfolio_custom.js')}}"></script>
</body>

</html>