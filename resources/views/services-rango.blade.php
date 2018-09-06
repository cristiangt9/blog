<!DOCTYPE html>
<html lang="en">
<head>
<title>CG - Servicios</title>
@include('partials-rango.head-home')
<link rel="stylesheet" type="text/css" href="{{asset('rango/styles/services_responsive.css')}}">
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

	<div class="home_about">
		<div class="home_background_container prlx_parent">
			<div class="home_background prlx" style="background-image:url(rango/images/home_background1.png)"></div>
		</div>
		
		<div class="home_title">
			<h2>Servicios</h2>
			<div class="next_section_scroll_about">
				<div class="next_section_about nav_links" data-scroll-to=".services_boxes">
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
						<h2><a href="#services_boxes" id="ver_agilece_carga">Agilice la carga</a></h2>
						<div id="agilece_carga" style="display:none"><p>En la red mundial, llamada Internet, el tiempo es un recurso muy limitado y si nuestra aplicación web demanda mucho este recurso, podría hacer con que los usuarios abandonen nuestra aplicación en búsqueda de otra más rápida. Permíteme agilizar la carga de tu aplicación web.</p></div>
					</div>

					<!-- Service Item -->
					<div class="services_item">
						<h2><a href="#services_boxes" id="ver_administracion">Administración</a></h2>
						<div id="administracion" style="display:none"><p>Una aplicación web desactualizada está destinada al fracaso, si tu tiempo o conocimientos no te lo permiten, déjame ayudarte en la administración y en la actualización de tu aplicación. Y no te arriesgues a perder usuarios por quedarte en el pasado.</p>
						</div>
					</div>

				</div>

				<div class="col-lg-4 services_col">

					<!-- Service Item -->
					<div class="services_item">
						<h2><a href="#services_boxes" id="ver_eva_riesgo">Evaluación de Riesgo</a></h2>
						<div id="eva_riesgo" style="display:none"><p>¿Qué bueno es escuchar: “El futuro ya está aquí”? Esta frase te hace pensar que las nuevas tecnologías van a hacer nuestra vida mejor y más fácil, pero no pensamos en las amenazas cibernéticas. Permíteme evaluar los riesgos de tu aplicación es vulnerable para reducirlos o eliminarlos.</p>
						</div>
					</div>

					<!-- Service Item -->
					<div class="services_item">
						<h2><a href="#services_item" id="ver_dise_grafico">Diseño Gráfico</a></h2>
						<div id="dise_grafico" style="display:none"><p>Tanto en la red como fuera de ella, la atención de una persona se logra inicialmente mediante la parte gráfica. Atrae a tu público de manera gráfica y así poder mostrar todo el potencial de tu marca.</p>
						</div>
					</div>

				</div>

				<div class="col-lg-4 services_col">

					<!-- Service Item -->
					<div class="services_item">
						<h2><a href="#services_item" id="ver_social">Social Media</a></h2>
						<div id="social" style="display: none"><p>Tener tu página web es un gran trabajo pero para que rinda los frutos que deseamos es necesario que muestres clientes la visiten e interactúen con ella. Y las redes sociales vienen a ser una herramienta de difusión súper potente que no podemos desechar. Hagamos de tu página la más comentada.</p>
						</div>
					</div>

					<!-- Service Item -->
					<div class="services_item">
						<h2><a href="#services_item" id="ver_seo">SEO</a></h2>
						<div id="seo" style="display: none"><p>Permite que los buscadores te encuentren. Cuando Google muestra el resultado de una búsqueda, muestra las pagina de manera ordenada según varios factores que el entiende y cree son los mejores para responder esta búsqueda. Hablemos su mismo idioma y pongamos tu página entre las primeras de la lista.</p>
						</div>
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
	<script>
		$(document).ready(function(){ 
		   $('#ver_agilece_carga').on('click',function(){
		      $('#agilece_carga').toggle('slow');
		   });
		});
		$(document).ready(function(){ 
		   $('#ver_administracion').on('click',function(){
		      $('#administracion').toggle('slow');
		   });
		});
		$(document).ready(function(){ 
		   $('#ver_eva_riesgo').on('click',function(){
		      $('#eva_riesgo').toggle('slow');
		   });
		});
		$(document).ready(function(){ 
		   $('#ver_dise_grafico').on('click',function(){
		      $('#dise_grafico').toggle('slow');
		   });
		});
		$(document).ready(function(){ 
		   $('#ver_social').on('click',function(){
		      $('#social').toggle('slow');
		   });
		});
		$(document).ready(function(){ 
		   $('#ver_seo').on('click',function(){
		      $('#seo').toggle('slow');
		   });
		});
	</script>
</body>

</html>