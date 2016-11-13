@extends('templates.default)

@section('content')
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
                    <div class="cell"><div class="rating static good" data-show-score="false" data-role="rating" data-value="5" data-color-rate="true" data-static="true"></div></div>
                    <div class="cell">80 reviews</div>
                    <div class="cell tag-list">
                        @foreach($trip->tags as $tag)
                            <span class="tag bg-cyan fg-{{ $tag->color }}">{{ $tag->tag }}</span>&nbsp;
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop