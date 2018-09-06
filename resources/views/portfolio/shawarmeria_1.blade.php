<!DOCTYPE html>
<html lang="en">
<head>
<title>CG - Shawameria</title>
@include('partials-rango.head-home')
<link rel="stylesheet" type="text/css" href="{{asset('rango/styles/portfolio_item_styles.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('tango/styles/portfolio_item_responsive.css')}}">
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


		<!-- Hamburger -->
		<div class="hamburger_container bez_1">
			<i class="fas fa-bars trans_200"></i>
		</div>
		
	</header>

	<!-- Menu -->

	@include('partials-rango.menu-home')

	<!-- Home -->

	<div class="home">
		<div class="home_background_container prlx_parent">
			<div class="home_background prlx" style="background-image:url(../rango/images/portfolio_background.png)"></div>
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
		
		<div class="portfolio_slider_container">

			<!-- Portfolio Slider -->
			<div class="portfolio_slider">
				
				<!-- Slider Item -->
				<div class="slider_item">
					<!-- image by https://unsplash.com/@heysupersimi -->
					<div class="slider_item_background" style="background-image: url(../rango/images/portfolio_slider.jpg)"></div>
				</div>

				<!-- Slider Item -->
				<div class="slider_item">
					<!-- image by https://unsplash.com/@heysupersimi -->
					<div class="slider_item_background" style="background-image: url(../rango/images/portfolio_slider.jpg)"></div>
				</div>

				<!-- Slider Item -->
				<div class="slider_item">
					<!-- image by https://unsplash.com/@heysupersimi -->
					<div class="slider_item_background" style="background-image: url(../rango/images/portfolio_slider.jpg)"></div>
				</div>

				<!-- Slider Item -->
				<div class="slider_item">
					<div class="slider_item_background" style="background-image: url(../rango/images/portfolio_slider.jpg)"></div>
				</div>

				<!-- Slider Item -->
				<div class="slider_item">
					<!-- image by https://unsplash.com/@heysupersimi -->
					<div class="slider_item_background" style="background-image: url(../rango/images/portfolio_slider.jpg)"></div>
				</div>

				<!-- Slider Item -->
				<div class="slider_item">
					<!-- image by https://unsplash.com/@heysupersimi -->
					<div class="slider_item_background" style="background-image: url(../rango/images/portfolio_slider.jpg)"></div>
				</div>

				<!-- Slider Item -->
				<div class="slider_item">
					<!-- image by https://unsplash.com/@heysupersimi -->
					<div class="slider_item_background" style="background-image: url(../rango/images/portfolio_slider.jpg)"></div>
				</div>

			</div>
		</div>

		<div class="portfolio_content">
			
			<div class="container">
				<div class="row">
					
					<div class="col-lg-4 portfolio_title_container">
						<div class="portfolio_category">branding</div>
						<h2 class="portfolio_title">3D Project for Inhouse</h2>
					</div>

				</div>

				<div class="row">

					<div class="col-lg-4 order-lg-1 order-2">
						<p class="portfolio_text">Etiam nec odio vestibulum est mattis effic iturut magna. Pellentesque sit am et tellus blandit. Etiam nec odio vestibul. Etiam nec odio vestibulum est mat tis effic iturut magna. Pellentesque sit amet tellus blandit. Etiam nec odio ves tibul.  Nec odio vestibulum est mattis. Etiam nec odio vestibulum est mattis effic iturut magna. Pellentesque sit am et tellus blandit. Etiam nec odio vestibul. Etiam nec odio vestibulum est mat tis effic iturut magna. </p>
						<div class="portfolio_button portfolio_button_1 trans_200">
							<a class="trans_200" href="#">see similar projects</a>
						</div>
					</div>

					<div class="col-lg-4 order-lg-2 order-3">
						<p class="portfolio_text">Pellentesque sit am et tellus blandit. Etiam nec odio vestibul. Etiam nec odio vestibulum est mat tis effic iturut magna. Pellentesque sit amet tellus blandit. Etiam nec odio ves tibul.  Nec odio vestibulum est mattis. Etiam nec odio vestibulum est mattis effic iturut magna. Pellentesque sit am et tellus blandit. Etiam nec odio vestibul. Etiam nec odio vestibulum est mat tis effic iturut magna. </p>
						<div class="portfolio_button portfolio_button_2 trans_200">
							<a class="trans_200" href="#">see similar projects</a>
						</div>
					</div>

					<div class="col-lg-4 order-lg-3 order-1">
						<div class="portfolio_info_box">

							<ul class="info_box_item">
								<li class="info_box_title">Created by</li>
								<li class="info_box_content">Colorlib</li>
							</ul>

							<ul class="info_box_item">
								<li class="info_box_title">Client</li>
								<li class="info_box_content">Online Company</li>
							</ul>

							<ul class="info_box_item">
								<li class="info_box_title">Category</li>
								<li class="info_box_content">PSD file</li>
							</ul>

							<ul class="info_box_item">
								<li class="info_box_title">Date Created</li>
								<li class="info_box_content">November 2017</li>
							</ul>

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
<script src="{{ asset('rango/plugins/slick-1.8.0/slick.js')}}"></script>
<script src="{{ asset('rango/plugins/OwlCarousel2-2.2.1/owl.carousel.js')}}"></script>
<script src="{{ asset('rango/plugins/Isotope/isotope.pkgd.min.js')}}"></script>
<script src="{{ asset('rango/plugins/scrollTo/jquery.scrollTo.min.js')}}"></script>
<script src="{{ asset('rango/plugins/easing/easing.js')}}"></script>
<script src="{{ asset('rango/js/portfolio_item_custom.js')}}"></script>
</body>

</html>