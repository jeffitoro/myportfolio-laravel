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
			<li class="">
				<a data-toggle="pill" href="#menu1">Mes Projets</a>
			</li>
		</ul>
	</div>

	<div id="page-admin"class="tab-content">
		<div id="home" class="tab-pane fade in active">
			<div class="col-md-10 col-md-offset-1">
	    		@include('admin.message')
		    </div>
		</div>
		<div id="menu1" class="tab-pane fade">
            <div class="col-md-10 col-md-offset-1">
	    		@include('admin.projet')
		    </div>
		</div>
	</div>
</div>
@endsection