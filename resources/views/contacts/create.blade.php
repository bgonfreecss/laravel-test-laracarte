@extends('layouts.default', ['title' => 'Contact'])


@section('content')
	
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">
				<h2>Get In Touch</h2>
				<p class="text-muted">If you having trouble with this service, please <a href="mailto:{{ config('laracarte.adminSupportMail') }}">ask for help</a>.</p>
				
				<form action="{{ route('contactPath') }}" method="POST">
					{{ csrf_field() }}

					<div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
						<label for="name" class="control-label">Name : <span style="color:red;">*</span></label>
						<input type="text" name="name" id="name" placeholder="Name" class="form-control" value="{{ old('name') }}" required>
						{!! $errors->first('name', '<span class="help-block">:message</span>') !!}				
					</div>	

					<div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
						<label for="email" class="control-label">Email : <span style="color:red;">*</span></label>
						<input type="email" name="email" id="email" placeholder="Email" class="form-control" value="{{ old('email') }}" required>
						{!! $errors->first('email', '<span class="help-block">:message</span>') !!}	
					</div>

					<div class="form-group {{ $errors->has('message') ? 'has-error' : '' }}">
						<label for="message" class="control-label sr-only">Message : <span style="color:red;">*</span></label>
						<textarea class="form-control"  name="message" id="message" rows="10" cols="10" required>{{ old('message') }}</textarea>
						{!! $errors->first('message', '<span class="help-block">:message</span>') !!}
					</div>

					<div class="form-group">
						<button class="btn btn-default btn-block" type="submit">Submit Enquirt &raquo;</button>
					</div>
				</form>			
			</div>
		</div>
	</div>

@stop