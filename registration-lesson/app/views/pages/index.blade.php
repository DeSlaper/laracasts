@extends('layouts/layout')

@section('content')
<div class="starter-template">
	<h1> {{ Auth::check() ? "Welcome, " . Auth::user()->username : "Why don't you sign up?" }}</h1>
	<p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto deserunt dolore, exercitationem harum odio quae sint sunt tempora voluptates voluptatum! Dolorem eligendi maxime pariatur quibusdam quis repellat sunt tempora ullam.</p>
</div>
@stop