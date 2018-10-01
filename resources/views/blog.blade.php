<!DOCTYPE html>
<html lang="en">
<head>
<title>CG - Blog</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="RanGO Project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon" href="http://blog.test/img/mifavicon.png">
<link rel="stylesheet" type="text/css" href="{{ asset('rango/styles/bootstrap4/bootstrap.min.css')}}">
<link href="{{ asset('rango/plugins/fontawesome-free-5.0.1/css/fontawesome-all.css')}}" rel="stylesheet" type="text/css">
<link href="{{ secure_asset('rango/plugins/colorbox/colorbox.css')}}" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="{{ asset('rango/styles/blog_styles.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('rango/styles/blog_responsive.css')}}">
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

	<!-- Menu -->
	@include('partials-rango.menu-home')
	<!-- Home -->

	<div class="home">
		<div class="home_background_container prlx_parent">
			<div class="home_background prlx" style="background-image:url({{secure_asset('rango/images/blog_background.png')}})"></div>
		</div>
		
		<div class="home_title">
			<h2>Blog</h2>
			<div class="next_section_scroll">
				<div class="next_section nav_links" data-scroll-to=".blog">
					<i class="fas fa-chevron-down trans_200"></i>
					<i class="fas fa-chevron-down trans_200"></i>
				</div>
			</div>
		</div>
	
	</div>

	<!-- Blog -->

	<div class="blog">
		
		<div class="container">
			<div class="row">
				
				<div class="col-lg-8">
					
					<div class="blog_container">
						@if(isset($title))
				            {!!$title!!}
				        @endif
						<div class="post_container" data-masonry='{ "itemSelector": ".card", "gutter": 30 }'>
							@foreach($posts as $post)
								<div class="card trans_200">
									<img class="card-img-top" src="{{ secure_asset('rango/images/blog_1.jpg')}}" alt="">
									<div class="card-body">
										<div class="card-header">{{ $post->published_at->format('M d')}} / {{ $post->user->name}}</div>
										<div class="card-title"><a href="{{route('blog.show',$post)}}">{{ $post->title }}</a></div>
										<div class="card-text">
											{{ $post->excerpt}}
										</div>
										<div class="card-category"><a href="{{route('categories.show', $post->category)}}">{{$post->category->name}} </a></div>
										@foreach($post->tags as $posttag)
											<div class="card-tag"><a href="{{route('tags.show', $posttag)}}">#{{$posttag->name}} </a></div>
										@endforeach
									</div>
								</div>
							@endforeach
						</div>
					</div>
						
					{{ $posts->links()}}


				</div>

				<div class="col-lg-4">
					
					<!-- Sidebar -->

					<div class="sidebar">
						
						<div class="sidebar_search_container">

							<!-- Sidebar Search -->
							<form id="sidebar_search_form" class="sidebar_search_form bez_1">
								<input id="sidebar_search_input" type="search" class="sidebar_search_input bez_1" placeholder="Search">
								<button id="sidebar_search_button" type="submit" class="sidebar_search_button trans_300" value="Submit">
									<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
										width="18px" height="18px" viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve">
										<g>
											<g>
												<path class="search_path" fill="#909090" d="M89.354,10.609c-14.144-14.146-37.157-14.146-51.301,0c-6.852,6.853-10.625,15.964-10.625,25.655
													c0,8.829,3.132,17.174,8.87,23.771l-4.32,4.321l-4.402-4.403c-0.482-0.482-1.137-0.754-1.819-0.754s-1.337,0.271-1.819,0.754
													L3.31,80.584c-2.148,2.147-3.331,5.004-3.331,8.042s1.183,5.895,3.331,8.042C5.457,98.817,8.313,100,11.35,100
													c3.038,0,5.894-1.184,8.041-3.331l20.627-20.631c0.482-0.482,0.753-1.137,0.753-1.819s-0.271-1.337-0.753-1.819l-4.403-4.403
													l4.322-4.322c6.795,5.902,15.28,8.855,23.766,8.855c9.289,0,18.579-3.537,25.65-10.61c6.852-6.853,10.625-15.963,10.625-25.654
													C99.979,26.573,96.205,17.462,89.354,10.609z M15.753,93.029c-1.176,1.177-2.739,1.824-4.403,1.824
													c-1.663,0-3.227-0.648-4.403-1.824c-1.176-1.176-1.823-2.74-1.823-4.403s0.647-3.228,1.824-4.403L18.458,72.71l8.805,8.807
													L15.753,93.029z M30.902,77.878l-8.805-8.807l3.659-3.66l8.806,8.808L30.902,77.878z M85.715,58.28
													c-12.137,12.14-31.886,12.14-44.023,0c-5.88-5.881-9.118-13.699-9.118-22.016c0-8.316,3.238-16.135,9.118-22.016
													c6.069-6.069,14.041-9.104,22.012-9.104c7.972,0,15.943,3.035,22.013,9.104c5.88,5.881,9.117,13.699,9.117,22.016
													S91.596,52.399,85.715,58.28z"></path>
											</g>
										</g>
										<g>
											<g>
												<path class="search_path" fill="#909090" d="M81.47,18.495c-9.797-9.798-25.736-9.798-35.533,0c-9.796,9.798-9.796,25.741,0,35.539
													c4.898,4.898,11.333,7.349,17.766,7.349c6.435,0,12.868-2.45,17.767-7.349l0,0C91.266,44.235,91.266,28.293,81.47,18.495z
													 M77.831,50.395c-7.79,7.791-20.466,7.791-28.256,0c-7.79-7.792-7.79-20.469,0-28.261c3.896-3.896,9.011-5.843,14.128-5.843
													c5.116,0,10.233,1.948,14.128,5.843C85.621,29.925,85.621,42.603,77.831,50.395z"></path>
											</g>
										</g>
										<g>
											<g>
												<path class="search_path" fill="#909090" d="M73.283,26.683c-5.282-5.283-13.877-5.283-19.16,0c-1.004,1.005-1.004,2.634,0,3.639
													c1.005,1.005,2.634,1.005,3.639,0c3.276-3.276,8.607-3.276,11.884,0c0.502,0.503,1.16,0.754,1.818,0.754
													c0.659,0,1.317-0.251,1.819-0.754C74.288,29.317,74.288,27.688,73.283,26.683z"></path>
											</g>
										</g>
									</svg>
								</button>

							</form>

						</div>
						
						<!-- Sidebar Categories -->
						<div class="sidebar_section categories_section">
							
							<div class="sidebar_section_title">Categorias</div>
							<div class="sidebar_categories">
								<ul>
									@foreach($categories as $category)
									<li><a href="{{route('categories.show', $category->name)}}">{{$category->name}}</a></li>
									@endforeach
								</ul>
							</div>
						</div>
						
						<!-- Sidebar Gallery -->
						<div class="sidebar_section gallery_section">
							
							<div class="sidebar_section_title">Instagram</div>
							<div class="gallery_container">
								<ul class="gallery_items d-flex flex-row align-items-start justify-content-between flex-wrap">
									<li class="gallery_item">
										<a class="colorbox" href="https://images.unsplash.com/photo-1463704131914-97e5aaa0e339?auto=format&fit=crop&w=720&q=80">
											<img src="{{ secure_asset('rango/images/gallery_1.jpg')}}" alt="https://unsplash.com/@matthewkane">
										</a>
									</li>
									<li class="gallery_item">
										<a class="colorbox" href="https://images.unsplash.com/photo-1487260211189-670c54da558d?auto=format&fit=crop&w=720&q=80">
											<img src="{{ secure_asset('rango/images/gallery_2.jpg')}}" alt="https://unsplash.com/@emileseguin">
										</a>
									</li>
									<li class="gallery_item">
										<a class="colorbox" href="https://images.unsplash.com/photo-1499763874088-6f30adc715b6?auto=format&fit=crop&w=678&q=80">
											<img src="{{ secure_asset('rango/images/gallery_3.jpg')}}" alt="https://unsplash.com/@naveenprajapat">
										</a>
									</li>
									<li class="gallery_item">
										<a class="colorbox" href="https://images.unsplash.com/photo-1507915600431-5292809c5ab7?auto=format&fit=crop&w=720&q=80">
											<img src="{{ secure_asset('rango/images/gallery_4.jpg')}}" alt="https://unsplash.com/@saaout">
										</a>
									</li>
									<li class="gallery_item">
										<a class="colorbox" href="https://images.unsplash.com/photo-1477959858617-67f85cf4f1df?auto=format&fit=crop&w=720&q=80">
											<img src="{{ secure_asset('rango/images/gallery_5.jpg')}}" alt="">
										</a>
									</li>
									<li class="gallery_item">
										<a class="colorbox" href="https://images.unsplash.com/photo-1493847242172-d46053a1f671?auto=format&fit=crop&w=720&q=80">
											<img src="{{ secure_asset('rango/images/gallery_6.jpg')}}" alt="https://unsplash.com/@joeypilgrim">
										</a>
									</li>
								</ul>
							</div>
						</div>

						<!-- Sidebar Tags -->

						<div class="sidebar_section tags_section">

							<div class="sidebar_section_title">Tags</div>
							
							<div class="tags_container d-flex flex-row flex-wrap">
								@foreach($tags as $tag)
									<div class="tag_item"><a href="{{route('tags.show', $tag->name)}}">{{$tag->name}}</a></div>
								@endforeach
							</div>
						</div>

						<!-- Sidebar Quote -->

						<div class="sidebar_section quote_section">
							
							<div class="sidebar_section_title">Quote</div>
							<div class="quote_quote"><img src="images/quote.svg" alt=""></div>
							<p class="quote_text">Vivamus in urna eu enim porttitor consequat. Proin vitae pulvinar libero. Proin ut hendrerit metus. Aliquam erat volutpat. Donec fermen tum convallis ante eget tristique. Sed lacinia turpis at ultricies vestibulum.</p>
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

<script src="{{ asset('rango/js/jquery-3.2.1.min.js')}}"></script>
<script src="{{ asset('rango/styles/bootstrap4/popper.js')}}"></script>
<script src="{{ asset('rango/styles/bootstrap4/bootstrap.min.js')}}"></script>
<script src="{{ asset('rango/plugins/greensock/TweenMax.min.js')}}"></script>
<script src="{{ asset('rango/plugins/greensock/TimelineMax.min.js')}}"></script>
<script src="{{ asset('rango/plugins/scrollmagic/ScrollMagic.min.js')}}"></script>
<script src="{{ asset('rango/plugins/greensock/animation.gsap.min.js')}}"></script>
<script src="{{ asset('rango/plugins/greensock/ScrollToPlugin.min.js')}}"></script>
<script src="{{ asset('rango/plugins/colorbox/jquery.colorbox-min.js')}}"></script>
<script src="{{ asset('rango/plugins/scrollTo/jquery.scrollTo.min.js')}}"></script>
<script src="{{ asset('rango/plugins/easing/easing.js')}}"></script>
<script src="{{ asset('rango/plugins/masonry/masonry.js')}}"></script>
<script src="{{ asset('rango/js/blog_custom.js')}}"></script>
</body>

</html>