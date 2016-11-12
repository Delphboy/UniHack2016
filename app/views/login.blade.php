@extends('templates/default')

@section('content')
    <div class="grid">
        <div class="row cells7">
            <div class="cell colspan4">
                <h1>Login</h1>
                {{ Form::open( array('url' => '/login', 'method' => 'POST')) }}
                <div class="input-control text full-size">
                    {{Form::text('email', null, array('placeholder' => 'Email'))}}
                </div>
                <div class="input-control text full-size">
                    {{Form::password('password', null, array('placeholder' => 'Password'))}}
                </div>
                {{Form::submit('Sign In',array('class'=> 'btn btn-primary'))}}
                {{ Form::close(); }}
            </div>
            <div class="cell colspan3">
                INFO
            </div>
        </div>
    </div>
@stop

