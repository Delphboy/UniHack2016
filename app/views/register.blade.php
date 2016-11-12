@extends('templates/default')

@section('content')
    <div class="grid">
        <div class="row cells7">
            <div class="cell colspan4">
                {{ Form::open( array('url' => '/register', 'method' => 'POST')) }}
                <div class="input-control text full-size">
                    {{Form::text('name', null, array('placeholder' => 'Your Name'))}}
                </div>

                <div class="input-control text full-size">
                    {{Form::text('email', null, array('placeholder' => 'Email'))}}
                </div>

                <div class="input-control text full-size">
                    {{Form::password('password', array('placeholder' => 'Password'))}}
                </div>

                <div class="input-control text full-size">
                    {{Form::password('password_confirmation', array('placeholder' => 'Confirm Password'))}}
                </div>

                {{Form::submit('Sign Up',array('class'=> 'button primary'))}}
                {{ Form::close(); }}
            </div>
            <div class="cell colspan3">
                DETAILS
            </div>
        </div>
    </div>
@stop