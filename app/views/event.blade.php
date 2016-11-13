@extends('templates/default')

@section('content')
    <a href="/" class="button"><span class="mif-arrow-left"></span>&nbsp;Go back</a>

    <div class="grid">
        <div class="row cells2">
            <div class="cell">
                <h2>Upcoming Events</h2>
                <ul>
                @foreach($events as $event)
                    <li> {{$event->date}} at {{$event->time}}: {{$event->title}} - {{ $event->description }}</li>
                @endforeach
                </ul>
            </div>

            <div class="cell">
                <h2>New event</h2>
                {{ Form::open( array('url' => 'new/event', 'method' => 'POST')) }}
                <div class="input-control text full-size">
                    {{Form::text('title', null, array('placeholder' => 'Title'))}}
                </div>

                <div class="input-control text full-size">
                    {{Form::text('description', null, array('placeholder' => 'Description'))}}
                </div>

                <div class="input-control text full-size">
                    {{Form::text('date', $newTime, array('placeholder' => 'Date'))}}
                </div>

                <div class="input-control text full-size">
                    {{Form::text('time', null, array('placeholder' => 'Time'))}}
                </div>

                {{Form::submit('Make Event',array('class'=> 'button primary'))}}
                {{ Form::close() }}
            </div>
        </div>
    </div>
@stop