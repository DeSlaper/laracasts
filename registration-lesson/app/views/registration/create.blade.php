@extends('layouts/layout')

@section('content')
<div class="starter-template">
	<h1>Register</h1>
	
	{{ Form::open(['route' => 'registration.store']) }}
		<!-- Username field -->
		<div class="form-group">
		    {{ Form::label('username','Username:') }}
		    {{ Form::text('username',null, ['class' => 'form-control','required' => 'required']) }}
			{{ $errors->first('username', '<span class="error">:message</span>') }}
		</div>

	<!-- email field -->
	<div class="form-group">
		{{ Form::label('email','E-mail:') }}
		{{ Form::email('email', null, ['class' => 'form-control','required' => 'required']) }}
		{{ $errors->first('email', '<span class="error">:message</span>') }}
	</div>

	<!-- password field -->
	<div class="form-group">
	    {{ Form::label('password','Password:') }}
	    {{ Form::password('password', ['class' => 'form-control', 'placeholder' => 'Password','required' => 'required']) }}
		{{ $errors->first('password', '<span class="error">:message</span>') }}
	</div>

	<!-- password field -->
	<div class="form-group">
	    {{ Form::label('password_confirmation','Password confirmation:') }}
	    {{ Form::password('password_confirmation', ['class' => 'form-control', 'placeholder' => 'Password','required' => 'required']) }}
	</div>
	
	<div class="form-group">
		{{ Form::submit('Create Account!', ['class' => 'btn btn-primary']) }}
	</div>

	{{ Form::close() }}
</div>
@stop