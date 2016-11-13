@extends('templates/default')

@section('content')
    <a href="/" class="button"><span class="mif-arrow-left"></span>&nbsp;Go back</a>

    <div class="grid">
        <div class="row cells4">
            <div class="cell colspan1">
                <h4>Search</h4>
                {{ Form::open( array('url' => '/login', 'method' => 'POST')) }}
                <label class="input-control checkbox small-check">
                    {{ Form::checkbox('search', 'educational', true) }}
                    <span class="check"></span>
                    <span class="caption">Educational</span>
                </label><br/>
                <label class="input-control checkbox small-check">
                    {{ Form::checkbox('search', 'historical', false) }}
                    <span class="check"></span>
                    <span class="caption">Historical</span>
                </label><br/>
                <label class="input-control checkbox small-check">
                    {{ Form::checkbox('search', 'company', false) }}
                    <span class="check"></span>
                    <span class="caption">Company</span>
                </label>

                {{Form::submit('Search',array('class'=> 'button primary full-size'))}}
                {{ Form::close(); }}
            </div>
            <div class="cell colspan3">
                <div class="row cells6">
                    <div class="cell">
                        <div class="image-container rounded"><img style="height: 91px;" src="http://www.salford.ac.uk/__data/assets/image/0011/909146/varieties/listingThumb.jpg"></div>

                    </div>

                    <div class="cell colspan5">
                        <div class="row">
                            <div class="cell" style="margin-left: 15;"><h4><a class="fg-cyan fg-hover-darkCyan">National Museum of Computing</a></h4></div>
                            <div class="cell"><div class="rating static good" data-show-score="false" data-role="rating" data-value="5" data-color-rate="true" data-static="true"></div></div>
                            <div class="cell">80 reviews</div>
                            <div class="cell tag-list">
                                <span class="tag bg-cyan fg-white">Educational</span>&nbsp;
                                <span class="tag bg-lightGreen fg-white">Historical</span>&nbsp;
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row cells6">
                    <div class="cell">
                        <div class="image-container rounded"><img style="height: 121px;" src="/images/birmingham.jpg"></div>

                    </div>

                    <div class="cell colspan5">
                        <div class="row">
                            <div class="cell" style="margin-left: 15;"><h4><a class="fg-cyan fg-hover-darkCyan" href="http://www.birminghammuseums.org.uk/thinktank">ThinkTank at Millennium Point</a></h4></div>
                            <div class="cell"><div class="rating static good" data-show-score="false" data-role="rating" data-value="3.5" data-color-rate="true" data-static="true"></div></div>
                            <div class="cell">10 reviews</div>
                            <div class="cell tag-list">
                                <span class="tag bg-cyan fg-white">Educational</span>&nbsp;
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop