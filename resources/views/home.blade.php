@extends('layouts.app') 
@section('content')
<div class="container admin">
	<div class="row">
	</div>
	<div class="nav-center">
		<ul class="nav nav-pills">
			<li class="active">
				<a data-toggle="pill" href="#home">Mes Contactes</a>
			</li>
			<li>
				<a data-toggle="pill" href="#menu1">Mes Projets</a>
			</li>
		</ul>
	</div>

	<div class="tab-content">
		<div id="home" class="tab-pane fade in active">
			<h3>HOME</h3>
			<p>Some content.</p>
		</div>
		<div id="menu1" class="tab-pane fade">
            <div class="col-md-10 col-md-offset-1">
	    		@include('projets.projet')
		    </div>
		</div>
	</div>
</div>
@endsection