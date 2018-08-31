<!DOCTYPE html>
<html lang="en">
<head>
<title>CG - Sobre mí</title>
@include('partials-rango.head-home')
<link rel="stylesheet" type="text/css" href="{{ asset('rango/styles/about_responsive.css')}}">
</head>

<body>

<div class="super_container">
	
	<!-- Header -->

	<!-- Header -->
	<header class="header d-flex flex-row justify-content-end align-items-center trans_200">
		
		<!-- Logo -->
		<div class="logo mr-auto">
			<a href="#"><span>C</span>ristian <span>G</span>onzález </a>
		</div>

		<!-- Navigation -->
		<nav class="main_nav justify-self-end text-right">
			<ul>
				<li><a href="{{ route('home')}}">Inicio</a></li>
				<li class="active"><a href="#">Sobre mi</a></li>
				<li><a href="services.html">Habilidades</a></li>
				<li><a href="services.html">Servicios</a></li>
				<li><a href="portfolio.html">Portafolio</a></li>
				<li><a href="blog.html">Blog</a></li>
				<li><a href="contact.html">Contactame</a></li>
			</ul>
	@include('partials-rango.header-home')

	<!-- Menu -->

	<div class="menu_container">
		<div class="menu menu_mm text-right">
			<div class="menu_close"><i class="far fa-times-circle trans_200"></i></div>
			<ul class="menu_mm">
				<li class="menu_mm"><a href="{{ route('home')}}">Home</a></li>
				<li class="menu_mm active"><a href="{{ route('sobre-mi')}}">Sobre mi</a></li>
				<li class="menu_mm"><a href="services.html">Habilidades</a></li>
				<li class="menu_mm"><a href="services.html">Servicios</a></li>
				<li class="menu_mm"><a href="portfolio.html">Portafolio</a></li>
				<li class="menu_mm"><a href="blog.html">Blog</a></li>
				<li class="menu_mm"><a href="contact.html">Contactame</a></li>
			</ul>
		</div>
	</div>

	<!-- Home -->

	<div class="home_about">
		<div class="home_background_container prlx_parent">
			<div class="home_background prlx" style="background-image:url(rango/images/home_background.jpg)"></div>
		</div>
		
		<div class="home_title">
			<h2>Sobre mí</h2>
			<div class="next_section_scroll_about">
				<div class="next_section_about nav_links" data-scroll-to=".icon_boxes">
					<i class="fas fa-chevron-down trans_200"></i>
					<i class="fas fa-chevron-down trans_200"></i>
				</div>
			</div>
		</div>
	
	</div>

	<!-- Icon Boxes -->

	<div class="icon_boxes">
		<div class="container">
			<div class="row">
				<div class="col-lg-4">
					<div class="icon_box_title">
						<h1>A strong team with a strong background</h1>
					</div>
					<div class="button icon_box_button trans_200">
						<a href="#" class="trans_200">discover more</a>
					</div>
				</div>

				<div class="col-lg-4 icon_box_col">

					<!-- Icon Box Item -->
					<div class="icon_box_paragraph">
						<p>Etiam nec odio vestibulum est mattis effic iturut magna. Pellentesque sit am et tellus blandit. Etiam nec odio vestibul. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras vitae enim enim. Sed nec dignissim purus. Praesent bibendum tristique nulla, quis fringilla mauris sagittis ut. Maecenas sit amet varius nulla. Praesent faucibus ipsum.</p>
					</div>

				</div>

				<div class="col-lg-4 icon_box_col">

					<!-- Icon Box Item -->
					<div class="icon_box_paragraph">
						<p>Si non ligula sodales vestibulum. Nam nec augue a leo ullamcorper sollicitudin. Suspendisse mattis malesuada tortor sit amet accumsan. Mauris eu elit quis enim pretium finibus. Integer tempor, augue et lacinia cursus, nisl elit elementum magna, non blandit nisi ipsum vitae nulla. </p>
					</div>
					
				</div>
			</div>
		</div>
	</div>

	<!-- Vertical Slider Section -->

	<div class="v_slider_section">
		<div class="container fill_height">
			<div class="row fill_height">

				<div class="col-lg-6 v_slider_section_image">
					<div class="v_slider_image">
						<img src="images/testimonials.jpg" alt="">
					</div>
				</div>

				<div class="col-lg-5 offset-lg-1 v_slider_content d-flex flex-column justify-content-center">
					
					<!-- Testimonials Slider -->
					<div class="v_slider_title">
						<h1>What clients say</h1>
					</div>

					<div class="v_slider_container">

						<!-- Vertical Slider -->
						<div class="v_slider">

							<!-- Vertical Slider Item -->
							<div class="v_slider_item">
								<span>“</span>
								<p>Etiam nec odio vestibulum est mattis effic iturut magna. Pelle ntesque sit am et tellus blandit. Etiam nec odio vestibul. Etiam nec odio vestibulum est mattis effic iturut. Etiam nec odio vestibulum est mattis effic iturut magna. Pelle ntesque sit am et tellus blandit. Etiam nec odio vestibul. Etiam nec odio vestibulum est mattis effic iturut.</p>
								<div class="person d-flex flex-row">
									<div class="person_image">
										<img src="images/person_1.png" alt="">
									</div>
									<div class="person_meta">
										<div class="person_name">Michael Smith</div>
										<div class="person_title">Manager</div>
									</div>
								</div>
							</div>

							<!-- Vertical Slider Item -->
							<div class="v_slider_item">
								<span>“</span>
								<p>Etiam nec odio vestibulum est mattis effic iturut magna. Pelle ntesque sit am et tellus blandit. Etiam nec odio vestibul. Etiam nec odio vestibulum est mattis effic iturut. Etiam nec odio vestibulum est mattis effic iturut magna. Pelle ntesque sit am et tellus blandit. Etiam nec odio vestibul. Etiam nec odio vestibulum est mattis effic iturut.</p>
								<div class="person d-flex flex-row">
									<div class="person_image">
										<img src="images/person_1.png" alt="">
									</div>
									<div class="person_meta">
										<div class="person_name">Michael Smith</div>
										<div class="person_title">Manager</div>
									</div>
								</div>
							</div>

							<!-- Vertical Slider Item -->
							<div class="v_slider_item">
								<span>“</span>
								<p>Etiam nec odio vestibulum est mattis effic iturut magna. Pelle ntesque sit am et tellus blandit. Etiam nec odio vestibul. Etiam nec odio vestibulum est mattis effic iturut. Etiam nec odio vestibulum est mattis effic iturut magna. Pelle ntesque sit am et tellus blandit. Etiam nec odio vestibul. Etiam nec odio vestibulum est mattis effic iturut.</p>
								<div class="person d-flex flex-row">
									<div class="person_image">
										<img src="images/person_1.png" alt="">
									</div>
									<div class="person_meta">
										<div class="person_name">Michael Smith</div>
										<div class="person_title">Manager</div>
									</div>
								</div>
							</div>

							<!-- Vertical Slider Item -->
							<div class="v_slider_item">
								<span>“</span>
								<p>Etiam nec odio vestibulum est mattis effic iturut magna. Pelle ntesque sit am et tellus blandit. Etiam nec odio vestibul. Etiam nec odio vestibulum est mattis effic iturut. Etiam nec odio vestibulum est mattis effic iturut magna. Pelle ntesque sit am et tellus blandit. Etiam nec odio vestibul. Etiam nec odio vestibulum est mattis effic iturut.</p>
								<div class="person d-flex flex-row">
									<div class="person_image">
										<img src="images/person_1.png" alt="">
									</div>
									<div class="person_meta">
										<div class="person_name">Michael Smith</div>
										<div class="person_title">Manager</div>
									</div>
								</div>
							</div>

							<!-- Vertical Slider Item -->
							<div class="v_slider_item">
								<span>“</span>
								<p>Etiam nec odio vestibulum est mattis effic iturut magna. Pelle ntesque sit am et tellus blandit. Etiam nec odio vestibul. Etiam nec odio vestibulum est mattis effic iturut. Etiam nec odio vestibulum est mattis effic iturut magna. Pelle ntesque sit am et tellus blandit. Etiam nec odio vestibul. Etiam nec odio vestibulum est mattis effic iturut.</p>
								<div class="person d-flex flex-row">
									<div class="person_image">
										<img src="images/person_1.png" alt="">
									</div>
									<div class="person_meta">
										<div class="person_name">Michael Smith</div>
										<div class="person_title">Manager</div>
									</div>
								</div>
							</div>

							<!-- Vertical Slider Item -->
							<div class="v_slider_item">
								<span>“</span>
								<p>Etiam nec odio vestibulum est mattis effic iturut magna. Pelle ntesque sit am et tellus blandit. Etiam nec odio vestibul. Etiam nec odio vestibulum est mattis effic iturut. Etiam nec odio vestibulum est mattis effic iturut magna. Pelle ntesque sit am et tellus blandit. Etiam nec odio vestibul. Etiam nec odio vestibulum est mattis effic iturut.</p>
								<div class="person d-flex flex-row">
									<div class="person_image">
										<img src="images/person_1.png" alt="">
									</div>
									<div class="person_meta">
										<div class="person_name">Michael Smith</div>
										<div class="person_title">Manager</div>
									</div>
								</div>
							</div>

							<!-- Vertical Slider Item -->
							<div class="v_slider_item">
								<span>“</span>
								<p>Etiam nec odio vestibulum est mattis effic iturut magna. Pelle ntesque sit am et tellus blandit. Etiam nec odio vestibul. Etiam nec odio vestibulum est mattis effic iturut. Etiam nec odio vestibulum est mattis effic iturut magna. Pelle ntesque sit am et tellus blandit. Etiam nec odio vestibul. Etiam nec odio vestibulum est mattis effic iturut.</p>
								<div class="person d-flex flex-row">
									<div class="person_image">
										<img src="images/person_1.png" alt="">
									</div>
									<div class="person_meta">
										<div class="person_name">Michael Smith</div>
										<div class="person_title">Manager</div>
									</div>
								</div>
							</div>

						</div>
					</div>
				</div>

			</div>
		</div>
	</div>

	<!-- Team -->
	@include('partials-rango.team-about')

	<!-- Clients -->
	@include('partials-rango.clients-about')

	<!-- Newsletter -->

	@include('partials-rango.newsletter-home')

	<!-- Footer -->

	@include('partials-rango.footer-home')

</div>

	<!-- Scripts -->
	@include('partials-rango.scripts')
</body>

</html>