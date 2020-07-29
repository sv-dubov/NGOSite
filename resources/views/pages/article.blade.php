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
                            <a href="{{route('articles.show', $article->slug)}}"><img src="{{$article->getImage()}}" alt=""></a>
                        </div>
                        <div class="post-content">
                            <header class="entry-header text-center">
                                @if($article->hasCategory())
                                    <h6>
                                        <a href="{{route('category.show', $article->category->slug)}}"> {{$article->getCategoryTitle()}}</a>
                                    </h6>
                                @endif
                                <h1 class="entry-title">{{$article->title}}</h1>
                            </header>
                            <div class="entry-content">
                                {!!$article->content!!}
                            </div>
                            <div class="entry-content">
                                {!!$article->author!!}
                            </div>
                            <div class="decoration">
                                @foreach($article->tags as $tag)
                                    <a href="{{route('tag.show', $tag->slug)}}" class="btn btn-default">{{$tag->title}}</a>
                                @endforeach
                            </div>
                            <div class="social-share">
                                <span class="social-share-title pull-left text-capitalize">{{$article->getDate()}}</span>
                                <ul class="text-center pull-right">
                                    <li><a class="s-facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a class="s-twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a class="s-linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
                                    <li><a class="s-instagram" href="#"><i class="fa fa-instagram"></i></a></li>
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
                    <div class="related-post-carousel">
                        <!--related post carousel-->
                        <div class="related-heading">
                            <h4>You might also like</h4>
                        </div>
                        <div class="items">
                            @foreach($article->related() as $item)
                                <div class="single-item">
                                    <a href="{{route('articles.show', $item->slug)}}">
                                        <img src="{{$item->getImage()}}" alt="">
                                        <p>{{$item->title}}</p>
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                @include('pages._sidebar')
            </div>
        </div>
    </div>
    <!-- end main content-->
@endsection
