@extends('layouts.body')
@section('content')
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
	<section class="about-me container-fluid" id="conception-services">
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
@endsection