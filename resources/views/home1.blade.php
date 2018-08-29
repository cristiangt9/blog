
@extends('layout')

@section('meta-title','Blog Zendero')

@section('meta-content','Esta es la pagina web de Cristian Gonzalez, encontraras sus trabajos y habilidades')

@section('content')


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
                        <span class="c-gray-1">{{ $post->published_at->format('M d')}}</span>
                    </div>
                    <div class="post-category">
                        <span class="category text-capitalize"><a href="{{route('categories.show', $post->category)}}">{{ $post->category->name}}</a></span>
                    </div>
                </header>
                <h1>{{ $post->title }}</h1>
                <div class="divider"></div>
                <p>{{ $post->excerpt}}</p>
                <footer class="container-flex space-between">
                    <div class="read-more">
                        <a href="/blog/{{ $post->url}}" class="text-uppercase c-green">read more</a>
                    </div>
                    <div class="tags container-flex">
                        @foreach($post->tags as $tag)
                            <span class="tag c-gray-1 text-capitalize"><a href="{{route('tags.show', $tag)}}">#{{$tag->name}}</a></span>
                        @endforeach

                    </div>
                </footer>
            </div>
        </article>
        @endforeach

    </section><!-- fin del div.posts.container -->

<!--Paginacion -->

{{ $posts->links()}}

    
@stop
