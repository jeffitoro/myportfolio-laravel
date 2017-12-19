{{--  @section('projets')  --}}
<section class="projets container-fluid" id="lesprojets">
	<div id="titre">
		<div class="container-fluid">
			<h3>Projets</h3>
			<div class="border"></div>
		</div>
	</div>
	<div id="projets">
		<projets isconnect="{{ Auth::check() }}"></projets>
	</div>
</section>