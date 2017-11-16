<footer>
		<div class="container-fluid" id="contacter">
			<div id="titre">
				<h3>Contactez-moi</h3>
				<div class="border"></div>
			</div>
			<div class="row">
				<div class="col-sm-6">
					{{-- Post --}}
					<form action="{{ action('ContactsController@store') }}" method="POST" class="form-horizontal">
					{{csrf_field()}}
						<div class="form-group row">
							<div class="col-sm-2"></div>
							{{-- label email --}}
							<label for="mail" class="col-sm-2 col-form-label control-label">Email</label>
							<div class="col-sm-7">
								<input class="form-control" type="text" id="mail" placeholder="exemple_name@mail.com" name="mail" required>
							</div>
							<div class="col-sm-1"></div>
						</div>
						<div class="form-group row">
							<div class="col-sm-2"></div>
							{{-- label subjet --}}
							<label for="subjet" class="col-sm-2 col-form-label control-label">Subject</label>
							<div class="col-sm-7">
								<input class="form-control" type="text" id="subjet" placeholder="why contact-me?" name="subjet" required>
							</div>
							<div class="col-sm-1"></div>
						</div>
						<div class="form-group row">
							<div class="col-sm-2"></div>
							{{-- label message --}}
							<label for="message" class="col-sm-2 col-form-label control-label">Message</label>
							<div class="col-sm-7">
								<textarea class="form-control" id="message" rows="5" cols="30" placeholder="put your message..." name="message" required></textarea>
							</div>
							<div class="col-sm-1"></div>
						</div>
						<div class="row">
							<div class="col-sm-4"></div>
							<div class="col-sm-7">
								{{-- Envoyer --}}
								<button type="submit" class="btn btn-primary">Envoyer</button>
							</div>
						</div>
					</form>
					{{-- End Post --}}
				</div>
				<div class="col-sm-6">
					<div class="row">
						<div class="titre">
							<h4>Coordonnées</h4>
						</div>
						<div class="col-sm-3">
							<i class="fa fa-mobile icones" aria-hidden="true"></i>
							<a href="tel:+32486856759">+32486856759</a>
						</div>
						<div class="col-sm-6">
							<i class="fa fa-envelope-o icones" aria-hidden="true"></i>
							<a href="mailto:jeff-oro@hotmail.com">
								<br>jeff-oro@hotmail.com</a>
						</div>
						<div class="col-sm-3">
							<i class="fa fa-street-view icones" aria-hidden="true"></i>
							<a href="https://www.google.com/maps/@50.8328496,4.3375151,15z">
								<br>street</a>
						</div>
					</div>
					<div class="row">
						<div class="titre" id="cv">
							<h4>Télécharger CV</h4>
						</div>
						<a href="{{url('fonts/img/Curriculum Vitae Jefferson Orosco.pdf')}}" download="cv">
							<i class="fa fa-download icones" aria-hidden="true"></i>
							<i class="fa fa-file-pdf-o icones" aria-hidden="true"></i>
						</a>
					</div>
					<div class="row">
						<div class="titre">
							<h4>Médias</h4>
						</div>
						<div class="col-sm-3">
						</div>
						<div class="col-sm-6">
							<i class="fa fa-instagram icones" aria-hidden="true"></i>
							<i class="fa fa-facebook-official icones" aria-hidden="true"></i>
							<i class="fa fa-github-square icones" aria-hidden="true"></i>
							<i class="fa fa-linkedin icones" aria-hidden="true"></i>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>