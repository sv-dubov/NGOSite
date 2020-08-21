@extends('layout')

@section('content')
    <!--main content start-->
    <div class="main-content">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    @foreach($posts as $post)
                        <article class="post">
                            <div class="post-thumb">
                                <a href="{{route('post.show', $post->slug)}}"><img src="{{$post->getImage()}}" alt=""></a>
                                <a href="{{route('post.show', $post->slug)}}" class="post-thumb-overlay text-center">
                                    <div class="text-center">View news</div>
                                </a>
                            </div>
                            <div class="post-content">
                                <div class="entry-header text-center">
                                    @if($post->hasCategory())
                                        <h6>
                                            <a href="{{route('pcategory.show', $post->category->slug)}}"> {{$post->getCategoryTitle()}}</a>
                                        </h6>
                                    @endif
                                    <h1 class="entry-title"><a href="{{route('post.show', $post->slug)}}">{{$post->title}}</a></h1>
                                </div>
                                <div class="entry-content">
                                    <div class="btn-continue-reading text-center">
                                        <a href="{{route('post.show', $post->slug)}}" class="more-link">Continue Reading</a>
                                    </div>
                                </div>
                                <div class="social-share">
                                    <small>{{$post->getDate()}}</small>
                                    <ul class="text-center pull-right">
                                        <li><a class="s-facebook" href="#"><i class="fab fa-facebook-square"></i></a></li>
                                        <li><a class="s-twitter" href="#"><i class="fab fa-twitter-square"></i></a></li>
                                        <li><a class="s-instagram" href="#"><i class="fab fa-instagram"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </article>
                    @endforeach
                    {{$posts->links()}}
                </div>
            </div>
        </div>
    </div>
    <!-- end main content-->
@endsection
