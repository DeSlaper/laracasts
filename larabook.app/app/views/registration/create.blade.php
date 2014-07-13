@extends('layouts.default')

@section('content')
	<h1>Register!</h1>

	{{ Form::open(['route' => 'register_path']) }}
		<!-- username field -->
		<div class="form-group">
		    {{ Form::label('username','Username:') }}
		    {{ Form::text('username',null, ['class' => 'form-control', 'placeholder' => null]) }}
		</div>

		<!-- email field -->
		<div class="form-group">
		    {{ Form::label('email','Email:') }}
		    {{ Form::email('email',null, ['class' => 'form-control', 'placeholder' => 'E-mail']) }}
		</div>
		
		<!-- password field -->
		<div class="form-group">
		    {{ Form::label('password','Password:') }}
		    {{ Form::password('password', ['class' => 'form-control', 'placeholder' => 'Password']) }}
		</div>

		<!-- password_confirmation field -->
		<div class="form-group">
		    {{ Form::label('password_confirmation','Password Confirmation:') }}
		    {{ Form::password('password_confirmation', ['class' => 'form-control', 'placeholder' => 'Password']) }}
		</div>

		<div class="form-group">
			{{ Form::submit('Sign Up', ['class' => 'btn btn-primary']) }}
		</div>
	{{ Form::close() }}
@stop