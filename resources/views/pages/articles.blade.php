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
                                <a href="{{route('articles.show', $article->slug)}}"><img src="{{$article->getImage()}}" alt=""></a>
                                <a href="{{route('articles.show', $article->slug)}}" class="post-thumb-overlay text-center">
                                    <div class="text-center">View article</div>
                                </a>
                            </div>
                            <div class="post-content">
                                <header class="entry-header text-center">
                                    @if($article->hasCategory())
                                        <h6>
                                            <a href="{{route('category.show', $article->category->slug)}}"> {{$article->getCategoryTitle()}}</a>
                                        </h6>
                                    @endif
                                    <h1 class="entry-title"><a href="{{route('articles.show', $article->slug)}}">{{$article->title}}</a></h1>
                                </header>
                                <div class="entry-content">
                                    <div class="btn-continue-reading text-center">
                                        <a href="{{route('articles.show', $article->slug)}}" class="more-link">Continue Reading</a>
                                    </div>
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
                    @endforeach
                    {{$articles->links()}}
                </div>
                @include('pages._sidebar')
            </div>
        </div>
    </div>
    <!-- end main content-->
@endsection
