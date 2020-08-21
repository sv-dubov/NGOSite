@extends('layout')

@section('content')
    <!--main content start-->
    <div class="main-content">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="row">
                        @foreach($videoposts as $videopost)
                            <div class="col-md-6">
                                <article class="post post-grid">
                                    <div class="post-thumb">
                                        <a href="{{route('videos.show', $videopost->slug)}}"><img src="{{$videopost->getImage()}}" alt=""></a>
                                        <a href="{{route('videos.show', $videopost->slug)}}" class="post-thumb-overlay text-center">
                                            <div class="text-center">View video</div>
                                        </a>
                                    </div>
                                    <div class="post-content">
                                        <div class="entry-header text-center">
                                            @if($videopost->hasCategory())
                                                <h6>
                                                    <a href="{{route('vcategory.show', $videopost->category->slug)}}"> {{$videopost->getCategoryTitle()}}</a>
                                                </h6>
                                            @endif
                                            <h1 class="entry-title"><a href="{{route('videos.show', $videopost->slug)}}">{{$videopost->title}}</a></h1>
                                        </div>
                                        <div class="entry-content">
                                            <span class="social-share-title pull-left text-capitalize">{{$videopost->getDate()}}</span>
                                        </div>
                                    </div>
                                </article>
                            </div>
                        @endforeach
                    </div>
                    {{$videoposts->links()}}
                </div>
                {{--@include('pages._sidebar')--}}
            </div>
        </div>
    </div>
    <!-- end main content-->
@endsection
