@extends('templates.default')

@section('content')
    <a href="/" class="button"><span class="mif-arrow-left"></span>&nbsp;Go back</a>

    <div class="grid">
       <div class="row">
           @foreach($activities as $activity)
               <div class="cell colspan3 padding10 no-padding-top no-padding-left no-padding-right no-margin-left">
                   <div class="row cells6">
                       <div class="cell">
                           <div class="image-container rounded"><img style="height: 121px;" src="{{$activity->image_url}}"></div>

                       </div>

                       <div class="cell colspan5">
                           <div class="row">
                               <div class="cell" style="margin-left: 15;">
                                   <h4>{{ $activity->title }}</h4>
                               </div>
                               <div class="cell">{{ $activity->description }}</div>
                               <div class="cell">Created by {{ $activity->user->society }}</div>
                               <div class="cell tag-list">
                                   @foreach($activity->tags as $tag)
                                       <span class="tag bg-{{ $tag->color }} fg-white">{{ $tag->tag }}</span>&nbsp;
                                   @endforeach
                               </div>
                               <div class="cell">
                                   <a href="{{$activity->url}}" class="button primary">Download</a>&nbsp;
                                   <a href="" class="button">1👍</a>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
           @endforeach
       </div>
   </div>
@stop