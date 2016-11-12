@section('content')
    <div class="col-md-5">
        {{ Form::open( array('url' => '/login', 'method' => 'POST')) }}
        <div class="form-group">
            {{Form::text('email', null, array('placeholder' => 'email'))}}
        </div>
        <div class="form-group">
            {{Form::password('password', null, array('placeholder' => 'Password'))}}
        </div>
        {{Form::submit('Sign In',array('class'=> 'btn btn-primary'))}}
        {{ Form::close(); }}
    </div>
@stop