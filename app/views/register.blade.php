@section('content')
    <div class="col-md-5">
        {{ Form::open( array('url' => '/register', 'method' => 'POST')) }}
        <div class="form-group">
            {{Form::text('first_name', null, array('placeholder' => 'First Name'))}}
        </div>
        <div class="form-group">
            {{Form::text('last_name', null, array('placeholder' => 'Last Name'))}}
        </div>
        <div class="form-group">
            {{Form::text('register_email', null, array('placeholder' => 'Email'))}}
        </div>
        <div class="form-group">
            {{Form::password('password', array('placeholder' => 'Password'))}}
        </div>
        <div class="form-group">
            {{Form::password('password_confirmation', array('placeholder' => 'Confirm Password'))}}
        </div>

        {{Form::submit('Sign Up',array('class'=> 'btn btn-primary'))}}
        {{ Form::close(); }}
    </div>
@stop