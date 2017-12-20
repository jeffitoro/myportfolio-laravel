<div class="messages container-fluid">
	<div id="titre">
		<h3>Messages</h3>
		<div class="border"></div>
	</div>

	<button class="btn btn-default" data-toggle="collapse" data-target="#formulaire">Send Message</button>

	<div id="formulaire" class="collapse">
		<form action="" method="POST" class="form-horizontal">
			{{csrf_field()}}
			<div class="row">
				<div class="col-sm-4">
					<div class="form-group row">
						<label class="col-md-1 control-label">Contacts: </label>
						<div class="col-sm-12">
							<select class="selectpicker btn" for="selected" href="">
								<option value="">TheContacts</option>
								@foreach($users as $user)
									<option value="{{$user->email}}"name="selected"id="selected">{{$user->email}}</option>
								@endforeach
							</select>
						</div>
					</div>
					{{--  <div class="form-group row {{ $errors->has('email')?'has-error':'' }}">
						<label for="email" class="col-md-1 control-label">Email: </label>
						<div class="col-sm-12">
							<input class="form-control" type="text" id="email" placeholder="{{ $errors->has('email')?$errors->first('email',':message'):'example_name@gmail.com' }}"
							 name="email" required>
						</div>
					</div>  --}}
					<div class="form-group row {{ $errors->has('subject')?'has-error':'' }}">
						<label for="subject" class="col-md-1 control-label">Subject: </label>
						<br>
						<div class="col-sm-12">
							<input class="form-control" type="text" id="subject" placeholder="{{ $errors->has('subject')?$errors->first('subject',':message'):'why contact-me?' }}"
							 name="subject" required>
						</div>
					</div>
				</div>
				<div class="col-sm-8">
					<div class="form-group row {{ $errors->has('message')?'has-error':'' }}">
						<label for="message" class="col-md-1 control-label">Message</label>
						<div class="col-md-12">
							<textarea class="form-control" id="message" rows="5" cols="30" placeholder="{{ $errors->has('message')?$errors->first('message',':message'):'put your message...' }}"
							 name="message" value="" required></textarea>
						</div>
					</div>
				</div>
				<div class="col-md-12">
					<button type="submit" class="btn btn-default btn-block">Envoyer</button>
				</div>
			</div>
		</form>
	</div>

	<div id="messages">
		<messages></messages>
	</div>
</div>