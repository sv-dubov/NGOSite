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
                                        <a href="{{route('acategory.show', $article->category->slug)}}"> {{$article->getCategoryTitle()}}</a>
                                    </h6>
                                @endif
                                <h1 class="entry-title">{{$article->title}}</h1>
                            </div>
                            <div class="entry-content">
                                {!!$article->content!!}
                            </div>
                            </br>
                            <div class="post-author">
                                {{$article->author}}
                            </div>
                            </br>
                            @foreach($article->tags as $tag)
                                <div class="tag">
                                    <a href="{{route('atag.show', $tag->slug)}}">{{$tag->title}}</a>
                                </div>
                            @endforeach
                            <div class="social-share" id="social-links">
                                <small>{{$article->getDate()}}</small>
                                <ul class="text-center pull-right">
                                    <li><a class="s-facebook" href="https://www.facebook.com/sharer/sharer.php?u="><i class="fab fa-facebook-square"></i></a></li>
                                    <li><a class="s-twitter" href="https://twitter.com/intent/tweet?url="><i class="fab fa-twitter-square"></i></a></li>
                                    <li><a class="s-linkedin" href="http://www.linkedin.com/shareArticle?mini=true&amp;url="><i class="fab fa-linkedin"></i></a></li>
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
                                    <a href="{{route('article.show', $article->getPrevious()->slug)}}">
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
                                    <a href="{{route('article.show', $article->getNext()->slug)}}">
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
                @include('pages._sidebar')
            </div>
        </div>
    </div>
    </br>
    <!-- end main content-->
@endsection
