	<div class="menu_container">
		<div class="menu menu_mm text-right">
			<div class="menu_close"><i class="far fa-times-circle trans_200"></i></div>
			<ul class="menu_mm">
				<li class="menu_mm {{request()->is('/') ? 'active' : '' }}"><a href="#">Inicio</a></li>
				<li class="menu_mm {{request()->is('sobre-mi') ? 'active' : '' }}"><a href="{{ route('sobre-mi')}}">Sobre mi</a></li>
				<li class="menu_mm {{request()->is('habilidades') ? 'active' : '' }}"><a href="services.html">Habilidades</a></li>
				<li class="menu_mm {{request()->is('servicios') ? 'active' : '' }}"><a href="services.html">Servicios</a></li>
				<li class="menu_mm {{request()->is('portafolio*') ? 'active' : '' }}"><a href="portfolio.html">Portafolio</a></li>
				<li class="menu_mm {{request()->is('blog') ? 'active' : '' }}"><a href="blog.html">Blog</a></li>
				<li class="menu_mm {{request()->is('contactame') ? 'active' : '' }}"><a href="contact.html">Contactame</a></li>
			</ul>
		</div>
	</div>
	