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
		@include('partials-rango.logo')


		<!-- Navigation -->
		@include('partials-rango.nav')

	@include('partials-rango.header-home')

	<!-- Menu -->
	@include('partials-rango.menu-home')

	<!-- Home -->

	<div class="home_about">
		<div class="home_background_container prlx_parent">
			<div class="home_background prlx" style="background-image:url(rango/images/home_background2.png)"></div>
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
						<h1>Sobre mí</h1>
					</div>
{{-- 					<div class="button icon_box_button trans_200">
						<a href="#" class="trans_200">discover more</a>
					</div> --}}
				</div>

				<div class="col-lg-4 icon_box_col">

					<!-- Icon Box Item -->
					<div class="icon_box_paragraph">
						<p>Ingeniero de Sistemas desde 2015, programador, diseñador y analista de datos. Migrante desde pequeño desarrolle capacidades de apatación a nuevos entornos disfrutando siempre el lugar donde me encuentro pero sin olvidar de donde vengo. </p>
					</div>

				</div>

				<div class="col-lg-4 icon_box_col">

					<!-- Icon Box Item -->
					<div class="icon_box_paragraph">
						<p>Cursé mis estudios de ingeniero en la Universidad de los Andes en Mérida, como ingeniro de sistemas donde empezó mi pasión por la programación. En ella obtuve mis mejores momentos tanto en el ambito estudiantil como en mis desarrollo personal. </p>
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
						<img src="{{asset('rango/images/testimonials.jpg')}}" alt="">
					</div>
				</div>

				<div class="col-lg-5 offset-lg-1 v_slider_content d-flex flex-column justify-content-center">
					
					<!-- Testimonials Slider -->
					<div class="v_slider_title">
						<h1>Mis Objetivos</h1>
					</div>
					<div class="v_slider_container">
						<!-- Vertical Slider -->
						<div class="v_slider">
							<!-- Vertical Slider Item -->
							<div class="v_slider_item">
								<div class="person_meta">
									<div class="person_name">Superación</div>
										<div class="person_title">...</div>
								</div>
								<p>Superarme en todos los aspectos de mi vida, brindando lo mejor de mí cada día, buscando no solo cumplir el obijetivo sino tambien aportar un diferencial a mi trabajo, mejoran siempre tanto en el aspecto laboral como en el aspecto personal.</p>
								<div class="person d-flex flex-row">
									<div class="person_image">
										<img src="images/person_1.png" alt="">
									</div>
								</div>
							</div>
							<!-- Vertical Slider Item -->
							<div class="v_slider_item">
								<div class="person_meta">
										<div class="person_name">Aprendizaje continuo</div>
										<div class="person_title">...</div>
								</div>
								<p>Todos sabemos que cada día se aprenden algo nuevo, pero es mi objetivo es tomar dicho aprendizaje y canalizarlo para convertime en un mejor profesional y tener la capacidad de desechar todo aquello que limita en mi desarrollo integral.</p>
								<div class="person d-flex flex-row">
									<div class="person_image">
										<img src="images/person_1.png" alt="">
									</div>
								</div>
							</div>
							<!-- Vertical Slider Item -->
							<div class="v_slider_item">
								<div class="person_meta">
										<div class="person_name">Experiencia</div>
										<div class="person_title">...</div>
								</div>
								<p>Darle suficiente importacia a complementar mi enseñanza académica con la tan valorada experiencia profesional que me permita crecer profesionalmente y aplicar de mejor manera mis conocimientos creando cada vez un mejor resultado en menos tiempo. </p>
								<div class="person d-flex flex-row">
									<div class="person_image">
										<img src="images/person_1.png" alt="">
									</div>
								</div>
							</div>
							<!-- Vertical Slider Item -->
							<div class="v_slider_item">
									<div class="person_meta">
										<div class="person_name">Confianza</div>
										<div class="person_title">...</div>
									</div>
								<p>Desempeñar y desarrollar todas mis capacidades, consiguiendo un excelente resultado en la labor asignada, adquiriendo a través de la confianza en mi depositada, ser una profesional de confianza, con la cual conseguir dar un paso importante en mi superación personal.</p>
								<div class="person d-flex flex-row">
									<div class="person_image">
										<img src="images/person_1.png" alt="">
									</div>
								</div>
							</div>
							<!-- Vertical Slider Item -->
							<div class="v_slider_item">
									<div class="person_meta">
										<div class="person_name">Nuevos Retos</div>
										<div class="person_title">...</div>
									</div>
								<p>Tener siempre un nuevo reto en mis objetivos, el cual me exija terminar con los objetivos que ya tengo y potencie mi capacidad de adaptación y superación. Si no hay retos no ha vida. </p>
								<div class="person d-flex flex-row">
									<div class="person_image">
										<img src="images/person_1.png" alt="">
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