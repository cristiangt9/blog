          <div class="buttons-social-media-share">
            <ul class="share-buttons">
              <li>
              	<a href="https://www.facebook.com/sharer/sharer.php?u={{ request()->fullUrl() }}&t={{ $post->title }}" title="Compartir en Facebook" target="_blank">
              		<img alt="Compartir en Facebook" src="{{ asset('img/flat_web_icon_set/Facebook.png')}}">
              	</a>
              </li>
              <li>
              	<a href="https://twitter.com/intent/tweet?url={{ request()->fullUrl() }}&text={{ $post->title }}&via={{ config('app.name') }}&hashtags=zendero" target="_blank" title="Tweet">
              		<img alt="Tweet" src="{{ asset('img/flat_web_icon_set/Twitter.png')}}">
              	</a>
              </li>
              <li>
              	<a href="https://plus.google.com/share?url={{ request()->fullUrl() }}" target="_blank" title="Compartir en Google+">
              		<img alt="Compartir en Google+" src="{{ asset('img/flat_web_icon_set/Google+.png')}}">
              	</a>
              </li>
              <li>
              	<a href="http://pinterest.com/pin/create/button/?url={{ request()->fullUrl() }}=&description={{ $post->title }}" target="_blank" title="Compartir en un Pin">
              		<img alt="Pin it" src="{{ asset('img/flat_web_icon_set/Pinterest.png')}}">
              	</a>
              </li>
            </ul>
          </div>