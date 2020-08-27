@extends('layout')

@section('content')
    <!--main content start-->
    <div class="main-content">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    @if(session('status'))
                        <div class="alert alert-danger">
                            {{session('status')}}
                        </div>
                    @endif
                    <article class="post">
                        <div class="post-thumb">
                            <img src="{{$videopost->getImage()}}" alt="">
                        </div>
                        <div class="post-content">
                            <div class="entry-header text-center">
                                @if($videopost->hasCategory())
                                    <h6>
                                        <a href="{{route('vcategory.show', $videopost->category->slug)}}"> {{$videopost->getCategoryTitle()}}</a>
                                    </h6>
                                @endif
                                <h1 class="entry-title">{{$videopost->title}}</h1>
                            </div>
                            <div class="entry-content">
                                {!!$videopost->content!!}
                            </div>
                            <div class="entry-content">
                                {!!$videopost->author!!}
                            </div>
                            </br>
                            @foreach($videopost->tags as $tag)
                                <div class="tag">
                                    <a href="{{route('vtag.show', $tag->slug)}}">{{$tag->title}}</a>
                                </div>
                            @endforeach
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
                    <div id="disqus_thread"></div>
                    <div class="row">
                        <!--blog next previous-->
                        <div class="col-md-6">
                            @if($videopost->hasPrevious())
                                <div class="single-blog-box">
                                    <a href="{{route('videos.show', $videopost->getPrevious()->slug)}}">
                                        <img src="{{$videopost->getPrevious()->getImage()}}" alt="">
                                        <div class="overlay">
                                            <div class="promo-text">
                                                <p><i class=" pull-left fa fa-angle-left"></i></p>
                                                <h5>{{$videopost->getPrevious()->title}}</h5>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            @endif
                        </div>
                        <div class="col-md-6">
                            @if($videopost->hasNext())
                                <div class="single-blog-box">
                                    <a href="{{route('videos.show', $videopost->getNext()->slug)}}">
                                        <img src="{{$videopost->getNext()->getImage()}}" alt="">
                                        <div class="overlay">
                                            <div class="promo-text">
                                                <p><i class=" pull-right fa fa-angle-right"></i></p>
                                                <h5>{{$videopost->getNext()->title}}</h5>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            @endif
                        </div>
                    </div>
                    <!--blog next previous end-->
                </div>
                @include('pages._sidebar')
            </div>
        </div>
    </div>
    </br>
    <!-- end main content-->
@endsection
