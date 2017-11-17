<footer>
	<div class="container-fluid" id="contacter">
		<div id="titre">
			<h3>Contactez-moi</h3>
			<div class="border"></div>
		</div>
		<div class="row">
			<div class="col-sm-6">
				{{-- Post --}} 
				@yield('form') 
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