@extends('layouts/layout')

{{-- @section('meta-title', '') --}}

@section('content')
	<h1>Edit profile</h1>

	{{ Form::model($user->profile, ['method' => 'PATCH', 'route' => ['profile.update', $user->username]]) }}
	{{-- location field --}}
	<div class="form-group">
	    {{ Form::label('location','Location:') }}
	    {{ Form::text('location',null, ['class' => 'form-control', 'placeholder' => 'Location']) }}
		{{ errors_for('location', $errors) }}
	</div>

	{{-- bio field --}}
	<div class="form-group">
	    {{ Form::label('bio','Bio:') }}
	    {{ Form::textarea('bio',null, ['class' => 'form-control', 'placeholder' => 'Enter bio here']) }}
		{{ errors_for('bio', $errors) }}
	</div>
	
	{{-- twitter_username field --}}
	<div class="form-group">
	    {{ Form::label('twitter_username','Twitter_username:') }}
	    {{ Form::text('twitter_username',null, ['class' => 'form-control', 'placeholder' => 'Twitter username']) }}
		{{ errors_for('twitter_username', $errors) }}
	</div>

	{{-- github_username field --}}
	<div class="form-group">
	    {{ Form::label('github_username','Github_username:') }}
	    {{ Form::text('github_username',null, ['class' => 'form-control', 'placeholder' => 'GitHub username']) }}
		{{ errors_for('github_username', $errors) }}
	</div>

	<div class="form-group">
		{{ Form::submit('Update profile', ['class' => 'btn btn-primary']) }}
	</div>
	
	{{ Form::close() }}

@stop