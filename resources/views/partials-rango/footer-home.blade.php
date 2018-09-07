	<footer class="footer">
		<div class="container">
			<div class="row">
				
				<div class="col-lg-4">

					<!-- Footer Intro -->
					<div class="footer_intro">

						<!-- Logo -->
						<div class="logo foot mr-auto">
							<a href="#"><span>C</span>ristian <span>G</span>onzález </a>
						</div>

						<p><span class="footer_dev">Desarrollador web.</span> Ingeniero, apasionado por la informática y la Internet, especialista en hacer de tu página web una realidad.</p>
						
						<!-- Social -->
						<div class="footer_social">
							<ul>
								<li><a href="#"><i class="fab fa-pinterest"></i></a></li>
								<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
								<li><a href="#"><i class="fab fa-twitter"></i></a></li>
								<li><a href="#"><i class="fab fa-dribbble"></i></a></li>
								<li><a href="#"><i class="fab fa-behance"></i></a></li>
								<li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
							</ul>
						</div>
						
						<!-- Copyright -->
						<div class="footer_cr">
							<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
							Copyright &copy;
							{{ date('Y') }} ® Todos los derechos | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
							<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						</div>

					</div>

				</div>
				
				<!-- Footer Services -->
				<div class="col-lg-2">

					<div class="footer_col">
						<div class="footer_col_title">Servicios</div>
						<ul>
							<li><a href="{{route('servicios')}}">Diseño Grafico</a></li>
							<li><a href="{{route('servicios')}}">Diseño web</a></li>
							<li><a href="{{route('servicios')}}">SEO</a></li>
						</ul>
					</div>
					
					<div class="footer_col">
						<div class="footer_col_title">Otros</div>
						<ul>
							<li><a href="{{route('servicios')}}">Social media</a></li>
							<li><a href="{{route('servicios')}}">Contenido web</a></li>
							<li><a href="{{route('servicios')}}">Big Data</a></li>
						</ul>
					</div>

				</div>

				<!-- Footer Menu -->
				<div class="col-lg-2">

					<div class="footer_col">
						<div class="footer_col_title">Menú</div>
						<ul>
							<li><a href="{{ route('home')}}">Inicio</a></li>
							<li><a href="{{ route('sobre-mi')}}">Sobre mi</a></li>
							<li><a href="{{ route('habilidades')}}">Habilidades</a></li>
							<li><a href="{{ route('servicios')}}">Servicios</a></li>
							<li><a href="{{ route('portafolio')}}">Portafolio</a></li>
							<li><a href="{{ route('blog')}}">Blog</a></li>
							<li><a href="{{ route('contactame')}}">Contactame</a></li>
						</ul>
					</div>

				</div>

				<!-- Footer About -->
				<div class="col-lg-2">

					<div class="footer_col">
						<div class="footer_col_title">Sobre mí</div>
						<ul>
							<li><a href="{{route('sobre-mi')}}">Mis Objetivos</a></li>
							<li><a href="{{route('sobre-mi')}}">Historia</a></li>
							<li><a href="{{route('sobre-mi')}}">Personas</a></li>
							<li><a href="{{ route('dashboard')}}">Soporte</a></li>
						</ul>
					</div>

				</div>

				<!-- Footer Community -->
				<div class="col-lg-2">

					<div class="footer_col">
						<div class="footer_col_title">Web</div>
						<ul>
							<li><a href="{{route('blog')}}">Blog</a></li>
							<li><a href="#">Foros</a></li>
							<li><a href="#">Q&A</a></li>
							<li><a href="{{ route('mapaweb')}}">Mapa del sitio</a></li>
						</ul>
					</div>

				</div>

			</div>

			<div class="row">
				<div class="col">
					<!-- Copyright -->
					<div class="footer_cr_2">{{ date('Y') }} ® Todos los derechos Reservados</div>
				</div>
			</div>
		</div>
	</footer>