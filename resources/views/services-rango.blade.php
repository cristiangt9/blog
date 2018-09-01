<!DOCTYPE html>
<html lang="en">
<head>
<title>CG - Servicios</title>
@include('partials-rango.head-home')
<link rel="stylesheet" type="text/css" href="styles/services_responsive.css">
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
				<li class="active"><a href="{{ route('servicios')}}">Servicios</a></li>
				<li><a href="{{ route('portafolio')}}">Portafolio</a></li>
				<li><a href="{{ route('blog')}}">Blog</a></li>
				<li><a href="{{ route('contactame')}}">Contactame</a></li>
			</ul>
		@include('partials-rango.header-home')

		<!-- Hamburger -->
		<div class="hamburger_container bez_1">
			<i class="fas fa-bars trans_200"></i>
		</div>
		
	</header>

	<!-- Menu -->

	<div class="menu_container">
		<div class="menu menu_mm text-right">
			<div class="menu_close"><i class="far fa-times-circle trans_200"></i></div>
			<ul class="menu_mm">
				<li class="menu_mm"><a href="{{ route('home')}}">Home</a></li>
				<li class="menu_mm"><a href="{{ route('sobre-mi')}}">Sobre mi</a></li>
				<li class="menu_mm"><a href="{{ route('habilidades')}}">Habilidades</a></li>
				<li class="menu_mm active"><a href="{{ route('servicios')}}">Servicios</a></li>
				<li class="menu_mm"><a href="{{ route('portafolio')}}">Portafolio</a></li>
				<li class="menu_mm"><a href="{{ route('blog')}}">Blog</a></li>
				<li class="menu_mm"><a href="{{ route('contactame')}}">Contactame</a></li>
			</ul>
		</div>
	</div>

	<!-- Home -->

	<div class="home_about">
		<div class="home_background_container prlx_parent">
			<div class="home_background prlx" style="background-image:url(rango/images/home_background1.png)"></div>
		</div>
		
		<div class="home_title">
			<h2>Servicios</h2>
			<div class="next_section_scroll_about">
				<div class="next_section_about nav_links" data-scroll-to=".icon_boxes">
					<i class="fas fa-chevron-down trans_200"></i>
					<i class="fas fa-chevron-down trans_200"></i>
				</div>
			</div>
		</div>
	
	</div>

	<!-- Service Boxes -->

	<div class="services_boxes">

		<div class="container">
			<div class="row">
				<div class="col-lg-4 services_col">

					<!-- Service Item -->
					<div class="services_item">
						<h2><a href="#">Great team</a></h2>
						<p>Etiam nec odio vestibulum est mattis effic iturut magna. Pellentesque sit am et tellus blandit mattis effic iturut magna.</p>
					</div>

					<!-- Service Item -->
					<div class="services_item">
						<h2><a href="#">Modern design</a></h2>
						<p>Etiam nec odio vestibulum est mattis effic iturut magna. Pellentesque sit am et tellus blandit mattis effic iturut magna.</p>
					</div>

				</div>

				<div class="col-lg-4 services_col">

					<!-- Service Item -->
					<div class="services_item">
						<h2><a href="#">Online marketing</a></h2>
						<p>Etiam nec odio vestibulum est mattis effic iturut magna. Pellentesque sit am et tellus blandit mattis effic iturut magna.</p>
					</div>

					<!-- Service Item -->
					<div class="services_item">
						<h2><a href="#">Easy to use</a></h2>
						<p>Etiam nec odio vestibulum est mattis effic iturut magna. Pellentesque sit am et tellus blandit mattis effic iturut magna.</p>
					</div>

				</div>

				<div class="col-lg-4 services_col">

					<!-- Service Item -->
					<div class="services_item">
						<h2><a href="#">Retina ready</a></h2>
						<p>Etiam nec odio vestibulum est mattis effic iturut magna. Pellentesque sit am et tellus blandit mattis effic iturut magna.</p>
					</div>

					<!-- Service Item -->
					<div class="services_item">
						<h2><a href="#">Responsive</a></h2>
						<p>Etiam nec odio vestibulum est mattis effic iturut magna. Pellentesque sit am et tellus blandit mattis effic iturut magna.</p>
					</div>

				</div>
			</div>
		</div>

	</div>

	<!-- Device -->

	<div class="device">
		
		<div class="container">
			<div class="row">
				
				<div class="col-lg-6 order-lg-1 order-2">
					<div class="device_content">
						<h1>A strong team with a strong background</h1>

						<ul class="device_items">
							<li class="device_item clearfix">
								<span>01.</span>
								<p>Si non ligula sodales vestibulum. Nam nec augue a leo ullam corper sollicitudin. Suspendisse mattis.</p>
							</li>
							<li class="device_item clearfix">
								<span>02.</span>
								<p>Malesuada tortor sit amet accumsan. Mauris eu elit quis enim pretium finibus. Integer tempor, augue.</p>
							</li>
							<li class="device_item clearfix">
								<span>03.</span>
								<p>Set lacinia cursus, nisl elit elementum magna, non blandit nisi ipsum vitae nulla.</p>
							</li>
						</ul>

						<div class="button devices_button">
							<a href="#">discover more</a>
						</div>

					</div>
				</div>

				<div class="col-lg-6 order-lg-2 order-1">
					<div class="device_image">
						<div class="device_image_background"></div>
						<div class="device_image_container d-flex flex-column justify-content-end">
							<img src="{{ asset('rango/images/device.png')}}" alt="">
						</div>
					</div>
				</div>

			</div>
		</div>

	</div>

	<!-- Call to action 2 -->

	<div class="cta_2">
		<div class="cta_2_background" style="background-image:url(rango/images/cta_2.png)"></div>
		<div class="container">
			<div class="row">
				
				<div class="col-lg-9">
					<div class="cta_2_content">
						<h1>What are you waiting for?</h1>
						<span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras vitae enim enim. </span>
					</div>
				</div>

				<div class="col-lg-3">
					<div class="cta_2_button_container">
						<div class="button cta_2_button">
							<a href="#">discover more</a>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>

	<!-- Image Boxes -->

	<div class="image_boxes">
		
		<div class="container">
			<div class="row">
				
				<!-- Image Box -->
				<div class="col-lg-4 image_box_col">
					<div class="card trans_300">
						<img class="card-img-top" src="{{ asset('rango/images/image_box_1.jpg')}}" alt="https://unsplash.com/@heysupersimi">
						<div class="card-body">
							<h3 class="card-title">One-click installation. Super easy to use</h3>
							<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras vitae enim enim. Sed nec dignissim purus.</p>
							<a href="#" class="card-link">discover more</a>
						</div>
					</div>
				</div>

				<!-- Image Box -->
				<div class="col-lg-4 image_box_col">
					<div class="card trans_300">
						<img class="card-img-top" src="{{ asset('rango/images/image_box_2.jpg')}}" alt="https://unsplash.com/@gabrielssantiago">
						<div class="card-body">
							<h3 class="card-title">All the elements inside +many more</h3>
							<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras vitae enim enim. Sed nec dignissim purus.</p>
							<a href="#" class="card-link">discover more</a>
						</div>
					</div>
				</div>

				<!-- Image Box -->
				<div class="col-lg-4 image_box_col">
					<div class="card trans_300">
						<img class="card-img-top" src="{{ asset('rango/images/image_box_3.jpg')}}" alt="https://unsplash.com/@anthonydelanoix">
						<div class="card-body">
							<h3 class="card-title">Documentation inside the pack</h3>
							<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras vitae enim enim. Sed nec dignissim purus.</p>
							<a href="#" class="card-link">discover more</a>
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
	<!-- Scripts -->
	@include('partials-rango.scripts')
</body>

</html>