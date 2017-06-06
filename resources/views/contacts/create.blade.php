@extends('layouts.default', ['title' => 'Contact'])


@section('content')
	
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">
				<h2>Get In Touch</h2>
				<p class="text-muted">If you having trouble with this service, please <a href="#">ask for help</a>.</p>
				
				<form>
					<div class="form-group">
						<label for="name" class="control-label">Name :</label>
						<input type="text" name="name" id="name" placeholder="Name" class="form-control" required="">					
					</div>	
					<div class="form-group">
						<label for="email" class="control-label">Email :</label>
						<input type="email" name="email" id="email" placeholder="Email" class="form-control" required="">	
					</div>
					<div class="form-group">
						<label for="message" class="control-label sr-only">Message :</label>
						<textarea class="form-control" required="" name="message" id="message" rows="10" cols="10"></textarea>
					</div>
					<div class="form-group">
						<button class="btn btn-default btn-block">Submit Enquirt &raquo;</button>
					</div>
				</form>			
			</div>
		</div>
	</div>

@stop