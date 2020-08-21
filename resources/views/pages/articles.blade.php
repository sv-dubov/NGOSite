@extends('layout')

@section('content')
    <!--main content start-->
    <div class="main-content">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    @foreach($articles as $article)
                        <article class="post">
                            <div class="post-thumb">
                                <a href="{{route('article.show', $article->slug)}}"><img src="{{$article->getImage()}}" alt=""></a>
                                <a href="{{route('article.show', $article->slug)}}" class="post-thumb-overlay text-center">
                                    <div class="text-center">View article</div>
                                </a>
                            </div>
                            <div class="post-content">
                                <div class="entry-header text-center">
                                    @if($article->hasCategory())
                                        <h6>
                                            <a href="{{route('acategory.show', $article->category->slug)}}"> {{$article->getCategoryTitle()}}</a>
                                        </h6>
                                    @endif
                                    <h1 class="entry-title"><a href="{{route('article.show', $article->slug)}}">{{$article->title}}</a></h1>
                                </div>
                                <div class="entry-content">
                                    <div class="btn-continue-reading text-center">
                                        <a href="{{route('article.show', $article->slug)}}" class="more-link">Continue Reading</a>
                                    </div>
                                </div>
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
                    @endforeach
                    {{$articles->links()}}
                </div>
            </div>
        </div>
    </div>
    <!-- end main content-->
@endsection
