<nav class="main_nav justify-self-end text-right">
			<ul>
				<li {{request()->is('/') ? 'class=active' : '' }}><a href="{{ route('home')}}">Inicio</a></li>
				<li {{request()->is('sobre-mi') ? 'class=active' : '' }}><a href="{{ route('sobre-mi')}}">Sobre mi</a></li>
				<li {{request()->is('habilidades') ? 'class=active' : '' }}><a href="{{ route('habilidades')}}">Habilidades</a></li>
				<li {{request()->is('servicios') ? 'class=active' : '' }}><a href="{{ route('servicios')}}">Servicios</a></li>
				<li {{request()->is('portafolio*') ? 'class=active' : '' }}><a href="{{ route('portafolio')}}">Portafolio</a></li>
				<li {{request()->is('blog') ? 'class=active' : '' }}><a href="{{ route('blog')}}">Blog</a></li>
				<li {{request()->is('contactame') ? 'class=active' : '' }}><a href="{{ route('contactame')}}">Contactame</a></li>
			</ul>