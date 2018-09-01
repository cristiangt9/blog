<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" href="{{ asset('img/mifavicon.png')}}">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>@yield('meta-title', config('app.name'))</title>
    <meta name="description" content="@yield('meta-content', 'Esta es la pagina de Cristian Gonzalez')">
    <link rel="stylesheet" href="{{ asset('css/normalize.css')}}">
    <link rel="stylesheet" href="{{ asset('css/framework.css')}}">
    <link rel="stylesheet" href="{{ asset('css/style.css')}}">
    <link rel="stylesheet" href="{{ asset('css/responsive.css')}}">
    <link rel="stylesheet" href="{{ asset('css/app.css')}}">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script>
</head>
<body>
    <div class="preload"></div>
    <header class="space-inter">
        <div class="container container-flex space-between">
            <figure class="logo"><img src="img/logo.png" alt=""></figure>
            <nav class="custom-wrapper" id="menu">
                <div class="pure-menu"></div>
                <ul class="container-flex list-unstyled">
                    <li><a href="{{route('home')}}" class="text-uppercase {{ request()->routeIs('home') ? 'active' : ''}}">Home</a></li>
                    <li><a href="{{route('about')}}" class="text-uppercase {{ request()->routeIs('about') ? 'active' : ''}}">About</a></li>
                    <li><a href="{{route('archive')}}" class="text-uppercase {{ request()->routeIs('archive') ? 'active' : ''}}">Archive</a></li>
                    <li><a href="{{route('contact')}}" class="text-uppercase {{ request()->routeIs('contact') ? 'active' : ''}}">Contact</a></li>
                    <li><a href="{{route('login')}}" class="text-uppercase {{ request()->routeIs('login') ? 'active' : ''}}">LogIn</a></li>
                </ul>
            </nav>
        </div>
    </header>


@yield('content')

<section class="footer">
        <footer>
            <div class="container">
                <figure class="logo"><img src="img/logo.png" alt=""></figure>
                <nav>
                    <ul class="container-flex space-center list-unstyled">
                    <li><a href="{{route('home')}}" class="text-uppercase {{ request()->routeIs('home') ? 'active' : ''}}">Home</a></li>
                    <li><a href="{{route('about')}}" class="text-uppercase {{ request()->routeIs('about') ? 'active' : ''}}">About</a></li>
                    <li><a href="{{route('archive')}}" class="text-uppercase {{ request()->routeIs('archive') ? 'active' : ''}}">Archive</a></li>
                    <li><a href="{{route('contact')}}" class="text-uppercase {{ request()->routeIs('contact') ? 'active' : ''}}">Contact</a></li>
                    <li><a href="{{route('login')}}" class="text-uppercase {{ request()->routeIs('login') ? 'active' : ''}}">LogIn</a></li>
                    </ul>
                </nav>
                <div class="divider-2"></div>
                <p>Nunc placerat dolor at lectus hendrerit dignissim. Ut tortor sem, consectetur nec hendrerit ut, ullamcorper ac odio. Donec viverra ligula at quam tincidunt imperdiet. Nulla mattis tincidunt auctor.</p>
                <div class="divider-2" style="width: 80%;"></div>
                <p>© 2017 - Zendero. All Rights Reserved. Designed & Developed by <span class="c-white">Agencia De La Web</span></p>
                <ul class="social-media-footer list-unstyled">
                    <li><a href="#" class="fb"></a></li>
                    <li><a href="#" class="tw"></a></li>
                    <li><a href="#" class="in"></a></li>
                    <li><a href="#" class="pn"></a></li>
                </ul>
            </div>
        </footer>
    </section>
<script src="/js/app.js"></script>
</body>
</html>