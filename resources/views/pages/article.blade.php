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
                            <img src="{{$article->getImage()}}" alt="">
                        </div>
                        <div class="post-content">
                            <div class="entry-header text-center">
                                @if($article->hasCategory())
                                    <h6>
                                        <a href="{{route('category.show', $article->category->slug)}}"> {{$article->getCategoryTitle()}}</a>
                                    </h6>
                                @endif
                                <h1 class="entry-title">{{$article->title}}</h1>
                            </div>
                            <div class="entry-content">
                                {!!$article->content!!}
                            </div>
                            <div class="entry-content">
                                {!!$article->author!!}
                            </div>
                            </br>
                            @foreach($article->tags as $tag)
                                <div class="tag">
                                    <a href="{{route('tag.show', $tag->slug)}}">{{$tag->title}}</a>
                                </div>
                            @endforeach
                            <div class="social-share">
                                <small>{{$article->getDate()}}</small>
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
                            @if($article->hasPrevious())
                                <div class="single-blog-box">
                                    <a href="{{route('articles.show', $article->getPrevious()->slug)}}">
                                        <img src="{{$article->getPrevious()->getImage()}}" alt="">
                                        <div class="overlay">
                                            <div class="promo-text">
                                                <p><i class=" pull-left fa fa-angle-left"></i></p>
                                                <h5>{{$article->getPrevious()->title}}</h5>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            @endif
                        </div>
                        <div class="col-md-6">
                            @if($article->hasNext())
                                <div class="single-blog-box">
                                    <a href="{{route('articles.show', $article->getNext()->slug)}}">
                                        <img src="{{$article->getNext()->getImage()}}" alt="">
                                        <div class="overlay">
                                            <div class="promo-text">
                                                <p><i class=" pull-right fa fa-angle-right"></i></p>
                                                <h5>{{$article->getNext()->title}}</h5>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            @endif
                        </div>
                    </div>
                    <!--blog next previous end-->
                </div>
            </div>
        </div>
    </div>
    <!-- end main content-->
@endsection
