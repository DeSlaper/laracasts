@extends('layouts/layout')

@section('meta-title', 'profile...')

@section('content')
	<h1>{{ $user->username }} <small>{{ $user->profile->location }}</small></h1>
	<div class="bio">
		<p>
			{{ $user->profile->bio }}
		</p>
	</div>

	<ul class="link">
		<li>{{ link_to('http://twitter.com/' . $user->profile->twitter_username, 'Find me on Twitter') }}</li>
		<li>{{ link_to('http://github.com/' . $user->profile->github_username, 'View my work on GitHub') }}</li>
	</ul>

	@if ($user->isCurrent())
	{{ link_to_route('profile.edit', 'Edit your profile', $user->username) }}
	@endif

@stop