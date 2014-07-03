@extends('layout')

@section('content')
	{{ Form::open(['route' => 'sessions.store', 'class' => 'well']) }}
		<!-- username field -->
		<div class="form-group">
		    {{ Form::label('username','Username:') }}
		    {{ Form::text('username',null, ['class' => 'form-control', 'placeholder' => 'Username']) }}
			{{ $errors->first('username', '<span class="error">:message</span>') }}
		</div>

		<!-- password field -->
		<div class="form-group">
		    {{ Form::label('password','Password:') }}
		    {{ Form::password('password', ['class' => 'form-control', 'placeholder' => 'Password']) }}
			{{ $errors->first('password', '<span class="error">:message</span>') }}
		</div>

		<div class="form-group">
			{{ Form::submit('Log In', ['class' => 'btn btn-primary']) }}
		</div>
	{{ Form::close() }}
@stop