@extends('templates/default')

@section('content')
    <a href="/" class="button"><span class="mif-arrow-left"></span>&nbsp;Go back</a>

    <div class="grid">
        <div class="row padd">
            @foreach($speakers as $speaker)
                <div class="cell padding10 no-padding-top no-padding-left no-padding-right no-margin-left">
                    <div class="row cells6">
                        <div class="cell">
                            <div class="image-container rounded"><img style="height: 91px;" src="{{$speaker->image}}"></div>

                        </div>

                        <div class="cell colspan5">
                            <div class="row">
                                <div class="cell" style="margin-left: 15;">
                                    <h4>{{ $speaker->name }}</h4>
                                    {{ $speaker->organisation }}
                                </div>
                                <div class="cell"><div class="rating static good" data-show-score="false" data-role="rating" data-value="{{ $speaker->speakerReviews()->avg('rating') }}" data-color-rate="true" data-static="true"></div></div>
                                <div class="cell"><a href="/speakers/review/{{ $speaker->id }}">{{ $speaker->speakerReviews->count() }} reviews</a></div>
                                <div class="cell tag-list">
                                    @foreach($speaker->tags as $tag)
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