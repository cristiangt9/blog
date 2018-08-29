@extends('layout')

@section('meta-title',$post->title."| Blog")

@section('meta-content',"Blog |". $post->excerpt)

@section('content')

  <script id="dsq-count-scr" src="//zendero.disqus.com/count.js" async></script>
  <article class="post image-w-text container">
            @if($post->photos->count() === 1)
              <figure><img src="{{ url($post->photos->first()->url)}}" alt="" class="img-responsive"></figure>
            @elseif($post->photos->count() > 1)
              @include('posts.carousel')
            @endif
    <div class="content-post">
      <header class="container-flex space-between">
        <div class="date">
          <span class="c-gris">{{ $post->published_at->format('M d')}}</span>
        </div>
        <div class="post-category">
          <span class="category">{{ $post->category->name}}</span>
        </div>
      </header>
      <h1>{{ $post->title }}</h1>
        <div class="divider"></div>
        <div class="image-w-text">
          <figure class="block-left"><img src="{{ asset('img/img-post-2.png')}}" alt=""></figure>
          <div>
            {!!$post->body!!}
          </div>
        </div>

        <footer class="container-flex space-between">
			@include('posts.social')
          <div class="tags container-flex">
          	@foreach($post->tags as $tag)
                    <span class="tag c-gris text-capitalize">#{{$tag->name}}</span>
               @endforeach
          </div>
      </footer>
      <div class="comments">
      <div class="divider"></div>
        <div id="disqus_thread"></div>
<script>

/**
*  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
*  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
/*
var disqus_config = function () {
this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
};
*/
(function() { // DON'T EDIT BELOW THIS LINE
var d = document, s = d.createElement('script');
s.src = 'https://zendero.disqus.com/embed.js';
s.setAttribute('data-timestamp', +new Date());
(d.head || d.body).appendChild(s);
})();
</script>
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
                                
      </div><!-- .comments -->
    </div>
  </article>

  <script>
      (function (window, document) {
      var menu = document.getElementById('menu'),
          WINDOW_CHANGE_EVENT = ('onorientationchange' in window) ? 'orientationchange':'resize';
      
      function toggleHorizontal() {
          [].forEach.call(
              document.getElementById('menu').querySelectorAll('.custom-can-transform'),
              function(el){
                  el.classList.toggle('pure-menu-horizontal');
              }
          );
      };
      
      function toggleMenu() {
          // set timeout so that the panel has a chance to roll up
          // before the menu switches states
          if (menu.classList.contains('open')) {
              setTimeout(toggleHorizontal, 500);
          }
          else {
              toggleHorizontal();
          }
          menu.classList.toggle('open');
          document.getElementById('toggle').classList.toggle('x');
      };
      
      function closeMenu() {
          if (menu.classList.contains('open')) {
              toggleMenu();
          }
      }
      
      document.getElementById('toggle').addEventListener('click', function (e) {
          toggleMenu();
          e.preventDefault();
      });
      
      window.addEventListener(WINDOW_CHANGE_EVENT, closeMenu);
      })(this, this.document);
      
      </script>
@endsection