@extends('layouts.default')

@section('content')
	<h1>Sign In!</h1>

	<div class="row">
    	<div class="col-md-6">

            {{ Form::open(['route' => 'login_path']) }}
                <!-- email field -->
                <div class="form-group">
                    {{ Form::label('email','Email:') }}
                    {{ Form::email('email',null, ['class' => 'form-control', 'placeholder' => 'E-mail', 'required' => 'required']) }}
                </div>

                <!-- password field -->
                <div class="form-group">
                    {{ Form::label('password','Password:') }}
                    {{ Form::password('password', ['class' => 'form-control', 'placeholder' => 'Password', 'required' => 'required']) }}
                </div>

                <!-- Sign In Input -->
                <div class="form-group">
                    {{ Form::submit('Sign In', ['class' => 'btn btn-primary']) }}
                </div>
            {{ Form::close() }}
        </div>
    </div>
@stop