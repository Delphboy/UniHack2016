@extends('templates/default')

@section('content')

    <a href="/{{$return}}" class="button"><span class="mif-arrow-left"></span>&nbsp;Go back</a>

    <div class="grid">
        <div class="row">
                    @if($return == "trips")
                        <div class="cell colspan3 padding10 no-padding-top no-padding-left no-padding-right">
                            <div class="row cells6">
                                <div class="cell">
                                    <div class="image-container rounded"><img style="height: 121px;" src="{{$content->image}}"></div>

                                </div>

                                <div class="cell colspan5">
                                    <div class="row">
                                        <div class="cell" style="margin-left: 15;">
                                            <h4><a class="fg-cyan fg-hover-darkCyan" href="{{ $content->url }}">{{ $content->name }}</a></h4>
                                        </div>
                                        <div class="cell"><div class="rating static good" data-show-score="false" data-role="rating" data-value="{{ $content->tripReviews()->avg('rating') }}" data-color-rate="true" data-static="true"></div></div>
                                        <div class="cell"><a href="trips/review/{{ $content->id }}">{{ $content->tripReviews->count() }} reviews</a></div>
                                        <div class="cell tag-list">
                                            @foreach($content->tags as $tag)
                                                <span class="tag bg-{{ $tag->color }} fg-white">{{ $tag->tag }}</span>&nbsp;
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @else
                        <div class="cell colspan3 padding10 no-padding-top no-padding-left no-padding-right">
                            <div class="row cells6">
                                <div class="cell">
                                    <div class="image-container rounded"><img style="height: 91px;" src="{{$content->image}}"></div>

                                </div>

                                <div class="cell colspan5">
                                    <div class="row">
                                        <div class="cell" style="margin-left: 15;">
                                            <h4>{{ $content->name }}</h4>
                                            {{ $content->organisation }}
                                        </div>
                                        <div class="cell"><div class="rating static good" data-show-score="false" data-role="rating" data-value="{{ $content->speakerReviews()->avg('rating') }}" data-color-rate="true" data-static="true"></div></div>
                                        <div class="cell"><a href="/speakers/review/{{ $content->id }}">{{ $content->speakerReviews->count() }} reviews</a></div>
                                        <div class="cell tag-list">
                                            @foreach($content->tags as $tag)
                                                <span class="tag bg-{{ $tag->color }} fg-white">{{ $tag->tag }}</span>&nbsp;
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                </div>
            <hr>
            insert box here
        <hr>
        @foreach($reviews as $review)
        <div class="row cells6">
            <div class="cell align-center">
                <img style="width: 50px;height: 46px;" src="/images/{{$review->user->image}}"><br/>
                {{ $review->user->society }}<br/>
                {{ $review->user->university }}
            </div>
            <div class="cell colspan5">
                <div class="row">
                    <div class="cell">
                        {{ $review->review }}
                    </div>
                </div>
                <div class="row">
                    <div class="cell">
                        Rating<br/>
                        <div class="rating static good" data-show-score="false" data-role="rating" data-value="{{ $review->rating }}" data-color-rate="true" data-static="true"></div>
                     </div>
                </div>
                <div class="row">
                    <div class="cell">
                        Posted: {{ $review->created_at->format('d/m/Y'); }}
                    </div>
                </div>
            </div>
        </div>
            <hr>
        @endforeach
    </div>
@stop