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
                                <header class="entry-header text-center">
                                    @if($videopost->hasCategory())
                                        <h6>
                                            <a href="{{route('category.show', $videopost->category->slug)}}"> {{$videopost->getCategoryTitle()}}</a>
                                        </h6>
                                    @endif
                                    <h1 class="entry-title"><a href="{{route('videos.show', $videopost->slug)}}">{{$videopost->title}}</a></h1>
                                </header>
                                <div class="entry-content">
                                    <div class="btn-continue-reading text-center">
                                        <a href="{{route('videos.show', $videopost->slug)}}" class="more-link">Continue Reading</a>
                                    </div>
                                </div>
                                <div class="social-share">
                                    <span class="social-share-title pull-left text-capitalize">{{$videopost->getDate()}}</span>
                                    <ul class="text-center pull-right">
                                        <li><a class="s-facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a class="s-twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a class="s-linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
                                        <li><a class="s-instagram" href="#"><i class="fa fa-instagram"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </article>
                    @endforeach
                    {{$videoposts->links()}}
                </div>
                @include('pages._sidebar')
            </div>
        </div>
    </div>
    <!-- end main content-->
@endsection
