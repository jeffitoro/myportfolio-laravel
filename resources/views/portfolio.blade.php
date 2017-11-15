<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Portfolio Jefferson</title>
	<link rel="stylesheet" href="{{url('css/app.css')}}">
	<link rel="stylesheet" href="{{url('css/font-awesome.min.css')}}">
	<meta name="csrf-token" content="{{ csrf_token() }}">
</head>

<body>
	<header>
		<div class="container-fluid">
			<nav class="navbar-fixed-top bar1" role="navigation">
				<ul class="nav navbar-nav">
					<li>
						<a href="#presentation">Accueil</a>
					</li>
					<li>
						<a href="#conception-services">Conception & Services</a>
					</li>
					{{--
					<li>
						<a href="#services">Mes Services</a>
					</li> --}}
					<li>
						<a href="#competences">Compétences</a>
					</li>
					<li>
						<a href="#contacter">Contactez-moi</a>
					</li>
					<li>
						<a href="#cv">Mon CV</a>
					</li>
				</ul>
			</nav>
			<nav class="bar2 navbar navbar-default navbar-fixed-top" role="navigation">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="#">Développeur</a>
				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse navbar-ex1-collapse">
					<ul class="nav navbar-nav">
						<li>
							<a href="#presentation">Accueil</a>
						</li>
						<li>
							<a href="#conception-services">Conception & Services</a>
						</li>
						{{--
						<li>
							<a href="#services">Mes Services</a>
						</li> --}}
						<li>
							<a href="#competences">Compétences</a>
						</li>
						<li>
							<a href="#contacter">Contactez-moi</a>
						</li>
						<li>
							<a href="#cv">Mon CV</a>
						</li>
					</ul>
				</div>
				<!-- /.navbar-collapse -->
			</nav>
		</div>
	</header>
	<section class="presentation container-fluid" id="presentation">
		<div class="imagess">
			{{--
			<img src="{{url('img/web-design4.jpg')}}"> --}}
			<div class="row">
				<div class="col-sm-6">
				</div>
				<div class="col-sm-6 txt">
					<div class="fond">
						<div class="presentation-txt">
							<h3>
								<i class="fa fa-code" aria-hidden="true"></i>Jefferson Orosco</h3>
						</div>
						<div class="presentation-simple">
							<h3>Développeur"..</h3>
							<h4>Bonjour, je m'appelle Jefferson. Je suis déveleppeur et je crée des sites Web magnifiques et fonctionnels pour les
								petites entreprises.</h4>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="container-fluid about-me" id="conception-services">
		<div class="row">
			<div class="col-sm-6 img">
				<div class="about-me-txt">
					<h3>Conception</h3>
					<div class="border"></div>
					<h4>"Il y a deux façons de faire la conception d'un logiciel, l'une des façons est de le rendre si simple qu'il n'y a selon
						toute apparence aucun défaut. Et l'autre est de le faire si compliqué qu'iln'y a pas de défaut apparent."</h4>
				</div>
			</div>
			<div class="col-sm-6 txt">
			</div>
		</div>
	</section>
	<div class="container-fluid services" id="services">
		<section class="container">
			<div class="row">
				<div class="col-sm-3">
					<div class="image">
						<img src="{{url('img/img-small2.png')}}" alt="">
					</div>
					<h4>Website Design</h4>
					<div class="border"></div>
					<h5>Each of my designs begins with a blank canvas which allows your content to guide the layout.</h5>
				</div>
				<div class="col-sm-3">
					<div class="image">
						<img src="{{url('img/img-small1.png')}}" alt="">
					</div>
					<h4>Development</h4>
					<div class="border"></div>
					<h5>Responsive development will help make your website easily accessible across all devices.</h5>
				</div>
				<div class="col-sm-3">
					<div class="image">
						<img src="{{url('img/img-small3.png')}}" alt="">
					</div>
					<h4>Newsletter Design</h4>
					<div class="border"></div>
					<h5>A matching newsletter is the perfect way to complement your website & keep in contact.</h5>
				</div>
				<div class="col-sm-3">
					<div class="image">
						<img src="{{url('img/img-small4.png')}}" alt="">
					</div>
					<h4>Social Media</h4>
					<div class="border"></div>
					<h5>It's important to keep your brand consistent and recognizable across all platforms.</h5>
				</div>
			</div>
		</section>
	</div>
	<section class="competences container-fluid" id="competences">
		{{--
		<div class="container-fluid"> --}}
			<div id="titre">
				<div class="container-fluid">
					<h3>Compétences</h3>
					<div class="border"></div>
				</div>
			</div>
			{{-- </div> --}}
		<div class="container">
			<div class="row">
				<div class="col-sm-2"></div>
				<div class="col-sm-4">
					<div class="txt">
						<h4>Langages & Framworks</h4>
						<div class="border"></div>
						<p>Html, css, Less, Sass, Jquery, lib Bootstrap, php Smarty, twig Symfony 2, MODx, Prestashop, Wordpress Intégration application
							mobile sous Phone Gap et Angular js</p>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="txt">
						<h4>Logiciels</h4>
						<div class="border"></div>
						<p>Photoshop, Illustrator et Indesign Axure, NinjaMock SVN, GIT, Jira, GitLab, Redmine, Mantis</p>
					</div>
				</div>
				<div class="col-sm-2"></div>
			</div>
			<div class="row">
				<div class="col-sm-2"></div>
				<div class="col-sm-4">
					<div class="txt">
						<h4>Référencement</h4>
						<div class="border"></div>
						<p>Optimisations techniques SEO, Rédaction, suivi et analyses statistiques (Xiti, Ranks, Analytics)</p>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="txt">
						<h4>Management & Projets</h4>
						<div class="border"></div>
						<p>Méthodes agiles (SCRUM) Gestion de projets mobile Lead intégration</p>
					</div>
				</div>
				<div class="col-sm-2"></div>
			</div>
		</div>
	</section>
	<footer>
		<div class="container-fluid" id="contacter">
			<div id="titre">
				<h3>Contactez-moi</h3>
				<div class="border"></div>
			</div>
			<div class="row">
				<div class="col-sm-6">
					{{-- Post --}}
					<form action="" method="POST" class="form-horizontal">
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
	<script src="{{url('js/app.js')}}"></script>
</body>

</html>