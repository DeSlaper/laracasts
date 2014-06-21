@extends('layouts/layout')

@section('meta-title', 'Login')

@section('content')
	<h1>Log In </h1>

	{{ Form::open(['route' => 'sessions.store', 'method' => 'post']) }}
		{{-- email field --}}
		<div class="form-group">
		    {{ Form::label('email','Email:') }}
		    {{ Form::email('email',null, ['class' => 'form-control', 'placeholder' => 'E-mail']) }}
			{{ errors_for('email', $errors) }}
		</div>

		{{-- password field --}}
		<div class="form-group">
		    {{ Form::label('password','Password:') }}
		    {{ Form::password('password', ['class' => 'form-control', 'placeholder' => 'Password']) }}
			{{ errors_for('password', $errors) }}
		</div>

		@if (Session::has('flash_message'))
		<div class="form-group">
			<p>{{ Session::get('flash_message') }} </p>
		</div>
		@endif

		<div class="form-group">
			{{ Form::submit('Log in!', ['class' => 'btn btn-primary']) }}
		</div>
	{{ Form::close() }}
@stop