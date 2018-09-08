<!DOCTYPE html>
<html lang="en">
<head>
<title>CG - Portafolio</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="">
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
		@include('partials-rango.nav')

	@include('partials-rango.header-home')

	<!-- Menu -->
	@include('partials-rango.menu-home')

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
							<li class="portfolio_category active is-checked" data-filter="*">Todos</li>
							<li class="portfolio_category" data-filter=".disen_grafico">Diseño Gráfico</li>
							<li class="portfolio_category" data-filter=".disen_web">Diseño Web</li>
							<li class="portfolio_category" data-filter=".desar_web">Desarrollo Web</li>
							<li class="portfolio_category" data-filter=".aplicaciones">Aplicaciones</li>
						</ul>
					</div>
				</div>

			</div>

			<div class="row">
				<div class="col">
					
					<div class="portfolio_items product-grid">

						<!-- Portfolio Item -->
						<div class="card disen_web">
							<div class="card_image">
								<img class="card-img-top" src="{{ asset('rango/images/portafolio/portafolio_Aventura.png')}}" alt="image by https://unsplash.com/@heysupersimi">
							</div>
							
							<div class="card-body">
								<div class="card-header">Diseño Web</div>
								<div class="card-title">Flyer para Aventura</div>
								<div class="card-text">Restaurante de día y bar de noche. Aventura es un local situado en la parte norte de ciudad, en el barrio de Carcelén industrial, el cual solicito la creación de un flyer que abarcara sus dos actividades.</div>
								<div class="card-link"><a href="{{route('aventura')}}">Ver Más</a></div>
							</div>
						</div>

						<!-- Portfolio Item -->
						<div class="card disen_grafico">
							<div class="card_image">
								<img class="card-img-top" src="{{ asset('rango/images/portafolio/portafolio_shawarma_frente.png')}}" alt="image by https://unsplash.com/@anthonydelanoix">
							</div>
							
							<div class="card-body">
								<div class="card-header">Diseño Gráfico</div>
								<div class="card-title">Flyer para la Shawarmeria</div>
								<div class="card-text">Foodtruck de comida árabe. La Shawameria es un restaurante de comida rápida árabe ubicado en el centro norte de la ciudad, en el sector Iñaquito, el cual solicito la creación de un flyer para impulsar sus nuevos platos y aumentar la clientela por apertura.</div>
								<div class="card-link"><a href="{{route('flayer_shawarmeria')}}">Ver Más</a></div>
							</div>
						</div>

						<!-- Portfolio Item -->
						<div class="card aplicaciones">
							<div class="card_image">
								<img class="card-img-top" src="{{ asset('rango/images/portafolio/portafolio_Shawarmeria_menu_grande.png')}}" alt="image by https://unsplash.com/@heysupersimi">
							</div>
							
							<div class="card-body">
								<div class="card-header">Aplicaciones</div>
								<div class="card-title">Menu para la Shawarmeria</div>
								<div class="card-text">Foodtruck de comida árabe. La Shawameria es un restaurante de comida rápida árabe ubicado en el centro norte de la ciudad, en el sector Iñaquito, el cual solicito la creación de un menu para presentar sus nuevos platos y aumentar la clientela.</div>
								<div class="card-link"><a href="{{route('menu_shawarmeria')}}">Ver Más</a></div>
							</div>
						</div>

						<!-- Portfolio Item -->
						<div class="card disen_grafico">
							<div class="card_image">
								<img class="card-img-top" src="{{ asset('rango/images/portafolio/portafolio_Nativos.png')}}" alt="image by https://unsplash.com/@anthonydelanoix">
							</div>
							
							<div class="card-body">
								<div class="card-header">Diseño Gráfico</div>
								<div class="card-title">Flyer para Nativos</div>
								<div class="card-text">Foodtruck de comida venezolana. Nativos es un restaurante de comida rápida venezolana ubicado en el centro norte de la ciudad, en el sector Iñaquito, el cual solicito la creación de un flyer para presentar sus nuevos platos y aumentar la clientela.</div>
								<div class="card-link"><a href="{{route('nativos')}}">Ver Más</a></div>
							</div>
						</div>

						<!-- Portfolio Item -->
						<div class="card desar_web">
							<div class="card_image">
								<img class="card-img-top" src="{{ asset('rango/images/portafolio/portafolio_Previfire.png')}}" alt="image by https://unsplash.com/@heysupersimi">
							</div>
							
							<div class="card-body">
								<div class="card-header">Desarrollo Web</div>
								<div class="card-title">Flyer para Previfire</div>
								<div class="card-text">Local de seguridad industrial.  Previfire es un local de seguridad insutrial ubicado en el centro de la ciudad, en el sector la tola, el cual solicito la creación de un flyer para presentar sus nuevos servicios, formas de contacto y aumentar la clientela.</div>
								<div class="card-link"><a href="{{route('previfire')}}">Ver Más</a></div>
							</div>
						</div>

						<!-- Portfolio Item -->
						<div class="card desar_web">
							<div class="card_image">
								<img class="card-img-top" src="{{ asset('rango/images/portafolio/portafolio_Previfire_Logo.png')}}" alt="image by https://unsplash.com/@heysupersimi">
							</div>
							
							<div class="card-body">
								<div class="card-header">Desarrollo Web</div>
								<div class="card-title">Logo para Previfire</div>
								<div class="card-text">Local de seguridad industrial.  Previfire es un local de seguridad insutrial ubicado en el centro de la ciudad, en el sector la tola, el cual solicito la creación de un logo que los representara y distinguiera de sucompetencia, para ser usado en toda su publicidad.</div>
								<div class="card-link"><a href="{{route('previfire_logo')}}">Ver Más</a></div>
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