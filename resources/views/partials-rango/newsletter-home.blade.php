	<div class="newsletter" id="newsletter">
		<div class="container">
			<div class="row">
				<div class="col text-lg-center text-left">
					<div class="newsletter_content">

						<!-- Newsletter Title -->
						<div class="newsletter_title">
							<h1>Suscríbete a nuestro Blog</h1>
							<span>Recibe noticias sobre la actualidad Tecnológica</span>
						</div>
						@if (session()->has('flash'))
          					<div class="alert alert-success">{{ session('flash') }}</div>
      					@endif
						<!-- Newsletter Form -->
						<div class="newsletter_form_container">
							<form method="POST" action="{{ route('newsletter.store')}}">
								@csrf
								<div class="input-group">
									<input type="email" name="email" class="newsletter_email" placeholder="Ingrese su correo electronico aquí" required="required" data-error="Ingrese una direccion de email valida.">
									<button id="newsletter_form_submit" type="submit" class="button newsletter_submit_button trans_200" value="Submit">
										Suscríbete
									</button>

								</div>
									
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
