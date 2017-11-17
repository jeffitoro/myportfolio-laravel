@extends('partials.footer') 
@section('form')
<form action="{{ action('ContactsController@store') }}" method="POST" class="form-horizontal">
	{{csrf_field()}}
	<div class="form-group row {{ $errors->has('email')?'has-error':'' }}">
		<div class="col-sm-2"></div>
		{{-- label email --}}
		<label for="email" class="col-sm-2 col-form-label control-label">Email</label>
		<div class="col-sm-7">
			<input class="form-control" type="text" id="email" placeholder="{{ $errors->has('email')?$errors->first('email',':message'):'example_name@gmail.com' }}" name="email" required>
		</div>
		<div class="col-sm-1"></div>
	</div>
	<div class="form-group row {{ $errors->has('subject')?'has-error':'' }}">
		<div class="col-sm-2"></div>
		{{-- label subjet --}}
		<label for="subject" class="col-sm-2 col-form-label control-label">Subject</label>
		<div class="col-sm-7">
			<input class="form-control" type="text" id="subject" placeholder="{{ $errors->has('subject')?$errors->first('subject',':message'):'why contact-me?' }}" name="subject" required>
		</div>
		<div class="col-sm-1"></div>
	</div>
	<div class="form-group row {{ $errors->has('message')?'has-error':'' }}">
		<div class="col-sm-2"></div>
		{{-- label message --}}
		<label for="message" class="col-sm-2 col-form-label control-label">Message</label>
		<div class="col-sm-7">
			<textarea class="form-control" id="message" rows="5" cols="30" placeholder="{{ $errors->has('message')?$errors->first('message',':message'):'put your message...' }}" name="message" required></textarea>
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
@endsection