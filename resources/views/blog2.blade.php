<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" href="http://blog.test/img/mifavicon.png">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>CG - Blog</title>
    <meta name="description" content="Esta es la pagina web de Cristian Gonzalez, encontraras sus trabajos y habilidades">
    <link rel="stylesheet" href="http://blog.test/css/normalize.css">
    <link rel="stylesheet" href="http://blog.test/css/framework.css">
    <link rel="stylesheet" href="http://blog.test/css/style.css">
    <link rel="stylesheet" href="http://blog.test/css/responsive.css">
    <link rel="stylesheet" href="http://blog.test/css/app.css">
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
                    <li><a href="http://blog.test" class="text-uppercase ">Home</a></li>
                    <li><a href="http://blog.test/about.html" class="text-uppercase ">About</a></li>
                    <li><a href="http://blog.test/archive.html" class="text-uppercase ">Archive</a></li>
                    <li><a href="http://blog.test/contact.html" class="text-uppercase ">Contact</a></li>
                    <li><a href="http://blog.test/login" class="text-uppercase ">LogIn</a></li>
                </ul>
            </nav>
        </div>
    </header>




    <section class="posts container">
        @if(isset($title))
            {!!$title!!}
        @endif
        @foreach($posts as $post)
            @if($post->photos->count() === 1)
             <article class="post w-image">
                <figure><img src="{{ $post->photos->first()->url}}" alt="" class="img-responsive"></figure>
            @elseif($post->photos->count() > 1)
                <article class="post w-gallery">
                <div class="gallery-photos masonry">
                    @foreach($post->photos->take(4) as $photo)
                        @if($loop->iteration == 4)
                            <div class="photos-post">{{$post->photos->count()}} Fotos</div>
                        @endif
                        <figure class="gallery-image"><img src="{{ url($photo->url) }}" alt=""></figure>
                    @endforeach
                </div>

            @else
                    <article class="post no-image">
            @endif
                         <div class="content-post">
                    <header class="container-flex space-between">
                        <div class="date">
                            <span class="c-gris-3">{{ $post->published_at->format('M d')}} / {{ $post->user->name}}</span>
                        </div>
                        <div class="post-category">
                            <span class="category text-capitalize"><a href="{{route('categories.show', $post->category)}}">{{ $post->category->name}}</span>
                        </div>
                    </header>
                    <h1>{{ $post->title }}</h1>
                    <div class="divider"></div>
                    <p>{{ $post->excerpt}}</p>
                    <footer class="container-flex space-between">
                        <div class="read-more">
                            <a href="/blog/{{ $post->url}}" class="text-uppercase c-green">leer mas</a>
                        </div>
                        <div class="tags container-flex">
                            @foreach($post->tags as $tag)
                                <span class="tag c-gris-3 text-capitalize"><a href="{{route('tags.show', $tag)}}">#{{$tag->name}}</a></span>
                            @endforeach 
                        </div>
                    </footer>
                </div>
             </article>
             @endforeach
    </section><!-- fin del div.posts.container -->

<!--Paginacion -->

{{ $posts->links()}}


    

<section class="footer">
        <footer>
            <div class="container">
                <figure class="logo"><img src="img/logo.png" alt=""></figure>
                <nav>
                    <ul class="container-flex space-center list-unstyled">
                    <li><a href="http://blog.test" class="text-uppercase ">Home</a></li>
                    <li><a href="http://blog.test/about.html" class="text-uppercase ">About</a></li>
                    <li><a href="http://blog.test/archive.html" class="text-uppercase ">Archive</a></li>
                    <li><a href="http://blog.test/contact.html" class="text-uppercase ">Contact</a></li>
                    <li><a href="http://blog.test/login" class="text-uppercase ">LogIn</a></li>
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