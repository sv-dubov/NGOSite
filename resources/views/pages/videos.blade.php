@extends('layout')

@section('content')
    <!--main content start-->
    <div class="main-content">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    @foreach($videoposts as $videopost)
                        <article class="post">
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
                                            <a href="{{route('category.show', $videopost->category->slug)}}"> {{$videopost->getCategoryTitle()}}</a>
                                        </h6>
                                    @endif
                                    <h1 class="entry-title"><a href="{{route('videos.show', $videopost->slug)}}">{{$videopost->title}}</a></h1>
                                </div>
                                <div class="entry-content">
                                    <div class="btn-continue-reading text-center">
                                        <a href="{{route('videos.show', $videopost->slug)}}" class="more-link">Continue Reading</a>
                                    </div>
                                </div>
                                <div class="social-share">
                                    <small>{{$videopost->getDate()}}</small>
                                    <ul class="text-center pull-right">
                                        <li><a class="s-facebook" href="#"><i class="fab fa-facebook-square"></i></a></li>
                                        <li><a class="s-twitter" href="#"><i class="fab fa-twitter-square"></i></a></li>
                                        <li><a class="s-instagram" href="#"><i class="fab fa-instagram"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </article>
                    @endforeach
                    {{$videoposts->links()}}
                </div>
            </div>
        </div>
    </div>
    <!-- end main content-->
@endsection
