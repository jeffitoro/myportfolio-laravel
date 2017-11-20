<div class="flash-message">
	@foreach (['danger', 'warning', 'success', 'info'] as $msg) 
        @if(Session::has('alert-' . $msg))
	        <div class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }}
		        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
	        </div>
	    @endif 
    @endforeach
</div>

@if($errors->any())
	<div class="alert alert-danger">
		<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
		<h3>Mail isn't sended</h3>
		<ul>
			@foreach ($errors->all() as $error)
				<li>{{ $error }}</li>	
			@endforeach
		</ul>
	</div>
@endif