<!DOCTYPE html>
<html lang="en">
<head>
<title>CG - Habilidades</title>
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
			<h2>Habilidades</h2>
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
						<h2><a href="#services_boxes" id="ver_logica_program">Lógica de programación</a></h2>
						<div id="logica_program" style="display:none"><p>Más importante que saber manejar un lenguaje es saber para que lo necesito y como voy a usarlo. No se puede avanzar mucho sin tener una lógica de programación clara. En los lenguajes interpretados o peor aun los frameworks a veces se da tanta facilidad, que el programador no entiende lo que pasa por detrás del código y se limita a repetir lo que otros hacen pero no tiene la capacidad de crear nuevos caminos y/o nuevas soluciones por sus limitaciones. Cuando el lenguaje es mas basico y necesita ser compilado esto es mas difícil que ocurra ya que el mismo lenguaje te pide que comprendas mucho mas el comportamiento de la maquina. Al inicio no entendi a mis profesores pero la enseñanza de lenguajes compilados como C o C++ que te ayudan a comprender mejor lo pasa dentro del hardware.</p></div>
					</div>

					<!-- Service Item -->
					<div class="services_item">
						<h2><a href="#services_boxes" id="ver_adaptabilidad">Adaptabilidad</a></h2>
						<div id="adaptabilidad" style="display:none"><p>Es muy poco comun que un proyecto de software llegue al final con las mismas especificaciones que se delinearon al comienzo del proyecto. Las cosas cambian y los grandes proyectos también. Un programador debe saber cómo adaptarse a los cambios. Es por esto que me interese por la metodologia agil en la que una de sus bases es la adaptabilidad del equipo de trabajo a los cambios que el cliente solicita.</p>
						</div>
					</div>

				</div>

				<div class="col-lg-4 services_col">

					<!-- Service Item -->
					<div class="services_item">
						<h2><a href="#services_boxes" id="ver_autodidacta">Autodidacta</a></h2>
						<div id="autodidacta" style="display:none"><p>El programador que depende que su empleador para que financie los entrenamientos está condenando al fracaso. La realidad es que en las empresas casi nunca hay presupuesto para entrenamientos en el área de tecnología. Un excelente programador es autodidacta. Sin despreciar la potencia que puede dar un profesor o mentor, la habilidad de aprender por sí mismo se paga en el largo plazo.</p> 
						<p> El mundo del desarrollo de software es muy amplio y no se detiene, el programador actual debe estar en constante evolución aprendiendo nuevas herramientas y lenguajes. Un programador que dure dos años sin capacitación se queda en el pasado...</p>
						</div>
					</div>

					<!-- Service Item -->
					<div class="services_item">
						<h2><a href="#services_item" id="ver_curiosidad">Curiosidad</a></h2>
						<div id="curiosidad" style="display:none"><p>Un buen programador siempre está ávido de conocimientos. Hasta que no conoce el problema en profundidad no se detiene de trabajar. Es esta característica la que permite que un programador pueda adquirir el conocimiento y habilidades para entender cualquier tecnología subyacente en la que necesite escribir código.</p>
						</div>
					</div>

				</div>

				<div class="col-lg-4 services_col">

					<!-- Service Item -->
					<div class="services_item">
						<h2><a href="#services_item" id="ver_pasion">Pasión</a></h2>
						<div id="pasion" style="display: none"><p>Existen programadores de 9-5. Estos son aquellos que escriben código de forma rutinaria en su trabajo. Fuera de su trabajo no existe el código. Esto no está mal pero es un reflejo de falta de pasión. Los mejores programadores respiran código las 24 horas. Esta “pasión” es la que permite aplicar trucos y buscar soluciones creativas al momento de enfrentar problemas complejos.</p>
						</div>
					</div>

					<!-- Service Item -->
					<div class="services_item">
						<h2><a href="#services_item" id="ver_atencion">Atención a los detalles</a></h2>
						<div id="atencion" style="display: none"><p>He notado que la característica de atención a los detalles está estrechamente relacionada con la curiosidad. Un programador que no presta atención a los detalles principalmente en el proceso de escritura de código es altamente improductivo. La falta de esta habilidad se refleja en aquellos que escriben código desordenado, sin comentarios y no implementan las medidas de seguridad adecuadas para garantizar la integridad del software.</p>
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
						<h1>Lenguajes y Frameworks</h1>

						<ul class="device_items">
							<li class="device_item clearfix">
								<span>1.</span>
								<p>Php, Laravel 5.*,JavaScript, SQL, MySQL</p>
							</li>
							<li class="device_item clearfix">
								<span>2.</span>
								<p>HTML 5, CSS 3, Bootstrap</p>
							</li>
							<li class="device_item clearfix">
								<span>3.</span>
								<p>Corel Draw X6, Illustrator</p>
							</li>
						</ul>

						<div class="button devices_button">
							<a href="{{ asset('rango/pdf/CV_CristianGonzalez.pdf')}}">Descargar cv</a>
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
		<h1>Niveles</h1>
		<div class="container">

			<div class="row">
				
				<div class="col-lg">
					<div class="cta_2_container"">
						<img style="width: 98%" src="{{ asset('rango/images/laravel5_.png')}}" alt="">
						<p>90%</p>
					</div>
				</div>

				<div class="col-lg">
					<div class="cta_2_container">
						<img class="habilidades" src="{{ asset('rango/images/html5_.png')}}" alt="">
						<p>90%</p>
					</div>
				</div>
				<div class="col-lg">
					<div class="cta_2_container">
						<img class="habilidades" src="{{ asset('rango/images/css3_.png')}}" alt="">
						<p>90%</p>
					</div>
				</div>

				<div class="col-lg">
					<div class="cta_2_container">
						<img class="habilidades" src="{{ asset('rango/images/js.png')}}" alt="">
						<p>90%</p>
					</div>
				</div>
				<div class="col-lg">
					<div class="cta_2_container">
						<img class="habilidades" src="{{ asset('rango/images/MySQL.png')}}" alt="">
						<p>90%</p>
					</div>
				</div>
				<div class="col-lg-2">
					<div class="cta_2_container">
						<img style="width: 100%" src="{{ asset('rango/images/responsive.png')}}" alt="">
						<p>90%</p>
					</div>
				</div>
				<div class="col-lg">
					<div class="cta_2_container">
						<img style="width: 105%;" src="{{ asset('rango/images/corel.png')}}" alt="">
						<p>90%</p>
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
						<img class="card-img-top" src="{{ asset('rango/images/backend.jpg')}}" alt="https://unsplash.com/@heysupersimi">
						<div class="card-body">
							<h3 class="card-title">Backend</h3>
							<p class="card-text">En el desarrollo web es la parte en la que mejor me desenvuelvo, disfruto mucho la programación desde la universidad y como profesional es el area que más me apasiona...</p>
							<a href="#" class="card-link"></a>
						</div>
					</div>
				</div>

				<!-- Image Box -->
				<div class="col-lg-4 image_box_col">
					<div class="card trans_300">
						<img class="card-img-top" src="{{ asset('rango/images/frontend.jpg')}}" alt="https://unsplash.com/@gabrielssantiago">
						<div class="card-body">
							<h3 class="card-title">Frontend</h3>
							<p class="card-text">En los ultimos años con necesidad de implementar sistemas web mas vistosos, he desarrollado cada vez mas gusto por esta parte de desarrollo web y actualmente es la que mas intento aprender.</p>
							<a href="#" class="card-link"></a>
						</div>
					</div>
				</div>

				<!-- Image Box -->
				<div class="col-lg-4 image_box_col">
					<div class="card trans_300">
						<img class="card-img-top" src="{{ asset('rango/images/disenando.jpg')}}" alt="https://unsplash.com/@anthonydelanoix">
						<div class="card-body">
							<h3 class="card-title">Diseño</h3>
							<p class="card-text">Tanto para diseño web como para diseño de publicidad he tenido que aprender mucho este ambito. No me considero un diseñador ni cerca, pero si es un area que he aprendido a disfrutar y de a poco he ido mejorando.</p>
							<a href="#" class="card-link"></a>
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
		   $('#ver_logica_program').on('click',function(){
		      $('#logica_program').toggle('slow');
		   });
		});
		$(document).ready(function(){ 
		   $('#ver_autodidacta').on('click',function(){
		      $('#autodidacta').toggle('slow');
		   });
		});
		$(document).ready(function(){ 
		   $('#ver_adaptabilidad').on('click',function(){
		      $('#adaptabilidad').toggle('slow');
		   });
		});
		$(document).ready(function(){ 
		   $('#ver_curiosidad').on('click',function(){
		      $('#curiosidad').toggle('slow');
		   });
		});
		$(document).ready(function(){ 
		   $('#ver_pasion').on('click',function(){
		      $('#pasion').toggle('slow');
		   });
		});
		$(document).ready(function(){ 
		   $('#ver_atencion').on('click',function(){
		      $('#atencion').toggle('slow');
		   });
		});
	</script>
</body>

</html>