@extends('templates/default')

@section('content')
    <a href="/" class="button"><span class="mif-arrow-left"></span>&nbsp;Go back</a>

    <div class="grid">
        <div class="row cells4">
            <div class="cell colspan1">
                <h4>Search</h4>
                {{ Form::open( array('url' => '/login', 'method' => 'POST')) }}
                @foreach($tags as $tag)
                <label class="input-control checkbox small-check">
                    {{ Form::checkbox('search', $tag->tag, true) }}
                    <span class="check"></span>
                    <span class="caption"><span class="tag bg-{{$tag->color}}">{{$tag->tag}}</span></span>
                </label><br/>
                @endforeach

                {{Form::submit('Search',array('class'=> 'button primary full-size'))}}
                {{ Form::close(); }}
            </div>

            @foreach($trips as $trip)
            <div class="cell colspan3 padding10 no-padding-top no-padding-left no-padding-right">
                <div class="row cells6">
                    <div class="cell">
                        <div class="image-container rounded"><img style="height: 121px;" src="{{$trip->image}}"></div>

                    </div>

                    <div class="cell colspan5">
                        <div class="row">
                            <div class="cell" style="margin-left: 15;">
                                <h4><a class="fg-cyan fg-hover-darkCyan" href="{{ $trip->url }}">{{ $trip->name }}</a></h4>
                            </div>
                            <div class="cell"><div class="rating static good" data-show-score="false" data-role="rating" data-value="{{ $trip->tripReviews()->avg('rating') }}" data-color-rate="true" data-static="true"></div></div>
                            <div class="cell"><a href="trips/review/{{ $trip->id }}">{{ $trip->tripReviews->count() }} reviews</a></div>
                            <div class="cell tag-list">
                                @foreach($trip->tags as $tag)
                                <span class="tag bg-{{ $tag->color }} fg-white">{{ $tag->tag }}</span>&nbsp;
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@stop