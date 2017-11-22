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
				<li>
					<a href="#lesprojets">Mes projets</a>
				</li>
			</ul>
			@if(Auth::check())
			<ul class="nav navbar-nav navbar-right">
				<li><a href="{{ route('home') }}">home</a></li>
				<li>
					<a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
						<i class="fa fa-sign-out" aria-hidden="true"></i>
					</a>
					<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
						{{ csrf_field() }}
					</form>
				</li>
			</ul>
			@endif
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
					<li>
						<a href="#lesprojets">Mes projets</a>
					</li>
				</ul>
			</div>
			<!-- /.navbar-collapse -->
		</nav>
	</div>
</header>