	<div class="v_slider_section">
		<div class="container fill_height">
			<div class="row fill_height">

				<div class="col-lg-6 v_slider_section_image">
					<div class="v_slider_image">
						<img src="{{ asset('rango/images/v_slider_section.jpg')}}" alt="">
					</div>
				</div>

				<div class="col-lg-5 offset-lg-1 v_slider_content d-flex flex-column justify-content-center">
					<div class="v_slider_container">
						<h1>Blog Actualidad</h1>
						<!-- Vertical Slider -->
						<div class="v_slider">
							@foreach($posts as $post)
								<!-- Vertical Slider Item -->
								<div class="v_slider_item">
									<h2>{{ $post->title}}</h2>
									<p>{{ $post->excerpt}}</p>
									<div class="person d-flex flex-row">
										<div class="person_image">
											<img src="{{ asset('rango/images/person_1.png')}}" alt="">
										</div>
										<div class="person_meta">
											<div class="person_name">{{$post->category->name}}</div>
											@foreach($post->tags as $tag)
												<div class="person_title">{{$tag->name}}</div>
											@endforeach
										</div>
									</div>
								</div>
							@endforeach
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>