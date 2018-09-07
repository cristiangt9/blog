<div class="menu_container">
		<div class="menu menu_mm text-right">
			<div class="menu_close"><i class="far fa-times-circle trans_200"></i></div>
			<ul class="menu_mm">
				<li class="menu_mm {{request()->is('/') ? 'active' : '' }}"><a href="{{ route('home')}}">Inicio</a></li>
				<li class="menu_mm {{request()->is('sobre-mi') ? 'active' : '' }}"><a href="{{ route('sobre-mi')}}">Sobre mi</a></li>
				<li class="menu_mm {{request()->is('habilidades') ? 'active' : '' }}"><a href="{{ route('habilidades')}}">Habilidades</a></li>
				<li class="menu_mm {{request()->is('servicios') ? 'active' : '' }}"><a href="{{ route('servicios')}}">Servicios</a></li>
				<li class="menu_mm {{request()->is('portafolio*') ? 'active' : '' }}"><a href="{{ route('portafolio')}}">Portafolio</a></li>
				<li class="menu_mm {{request()->is('blog') ? 'active' : '' }}"><a href="{{ route('blog')}}">Blog</a></li>
				<li class="menu_mm {{request()->is('contactame') ? 'active' : '' }}"><a href="{{ route('contactame')}}">Contactame</a></li>
			</ul>
		</div>
	</div>