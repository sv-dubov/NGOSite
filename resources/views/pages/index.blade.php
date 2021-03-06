@extends('layout')

@section('content')
    <!--main content start-->
    <!-- ******************** Slider Starts Here ******************* -->
    </br>
    </br>
    @include('partials._slider')
    <!-- ################# Our News Starts Here#######################--->
    <section class="our-blog">
        <div class="container">
            <div class="row session-title">
                <h2><a href="/posts"> Our News </a></h2>
                <p>News about our activities</p>
            </div>
            <div class="blog-row row">
                @foreach($recentPosts as $post)
                    <div class="col-md-4 col-sm-6">
                        <div class="single-blog">
                            <figure style="text-align: center">
                                <a href="{{route('post.show', $post->slug)}}"><img src="{{$post->getImage()}}" width="340" height="220" alt=""></a>
                            </figure>
                            <div class="blog-detail">
                                <small>{{$post->getDate()}}</small>
                                <div class="desc-wrapper">
                                    <h4><a href="{{route('post.show', $post->slug)}}">{{$post->title}}</a></h4>
                                </div>
                                <div class="desc-wrapper">
                                    <p>{!!$post->description!!}</p>
                                </div>
                                <div class="link">
                                    <a href="{{route('post.show', $post->slug)}}">Read more </a><i class="fas fa-long-arrow-alt-right"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- ################# Our Articles Starts Here#######################--->
    <section class="our-blog">
        <div class="container">
            <div class="row session-title">
                <h2><a href="/articles"> Our Articles </a></h2>
                <p>We write interesting articles</p>
            </div>
            <div class="blog-row row">
                @foreach($articles as $article)
                    <div class="col-md-4 col-sm-6">
                        <div class="single-blog">
                            <figure style="text-align: center">
                                <a href="{{route('article.show', $article->slug)}}"><img src="{{$article->getImage()}}" width="340" height="220" alt=""></a>
                            </figure>
                            <div class="blog-detail">
                                <small>{{$article->getDate()}}</small>
                                <div class="desc-wrapper">
                                    <h4><a href="{{route('article.show', $article->slug)}}">{{$article->title}}</a></h4>
                                </div>
                                <div class="desc-wrapper">
                                    <p>{!!$article->description!!}</p>
                                </div>
                                <div class="link">
                                    <a href="{{route('article.show', $article->slug)}}">Read more </a><i class="fas fa-long-arrow-alt-right"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- ################# Our Videos Starts Here#######################--->
    <section class="our-blog">
        <div class="container">
            <div class="row session-title">
                <h2><a href="/videos"> Our Videos </a></h2>
                <p>Videos with us or about us</p>
            </div>
            <div class="blog-row row">
                @foreach($videoposts as $videopost)
                    <div class="col-md-4 col-sm-6">
                        <div class="single-blog">
                            <figure style="text-align: center">
                                <a href="{{route('videos.show', $videopost->slug)}}"><img src="{{$videopost->getImage()}}" width="340" height="220" alt=""></a>
                            </figure>
                            <div class="blog-detail">
                                <small>{{$videopost->getDate()}}</small>
                                <div class="desc-wrapper">
                                    <h4><a href="{{route('videos.show', $videopost->slug)}}">{{$videopost->title}}</a></h4>
                                </div>
                                <div class="link">
                                    <a href="{{route('videos.show', $videopost->slug)}}">Read more </a><i class="fas fa-long-arrow-alt-right"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- ################# Mission Vision Start Here #######################--->
    <section class="container-fluid mission-vision">
        <div class="container">
            @foreach($missions as $mission)
                @if ($loop->first)
                    <div class="row mission">
                        <div class="col-md-6 mv-det">
                            <h1>{{$mission->title}}</h1>
                            <p>{!!$mission->description!!}</p>
                        </div>
                        <div class="col-md-6 mv-img">
                            <img src="{{$mission->getImage()}}" alt="">
                        </div>
                    </div>
                @endif
                @if ($loop->last)
                    <div class="row vision">
                        <div class="col-md-6 mv-img">
                            <img src="{{$mission->getImage()}}" alt="">
                        </div>
                        <div class="col-md-6 mv-det">
                            <h1>{{$mission->title}}</h1>
                            <p>{!!$mission->description!!}</p>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
    </section>
    <!--################### Our Team Starts Here #######################--->
    <section class="our-team team-11">
        <div class="container">
            <div class="session-title row">
                <h2><a href="/team"> Meet our Team </a></h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce fringilla vel nisl a dictum. Donec ut
                    est arcu. Donec hendrerit velit</p>
            </div>
            <div class="row">
                @foreach($members as $member)
                    <div class="col-lg-4">
                        <div class="our-team-main">
                            <div class="team-front">
                                <img src="{{$member->getImage()}}" class="img-fluid"/>
                                <h3>{{$member->name}}</h3>
                                <p>{{$member->position}}</p>
                            </div>
                            <div class="team-back text-center">
                                <div class="link">
                                    <a href="{{route('member.show', $member->slug)}}">View full info </a><i class="fas fa-long-arrow-alt-left"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <br>
    <!-- ################# Achievements in Numbers Starts Here #######################--->
    <div class="stats-message">
        <div class="inner-lay">
            <div class="container">
                <div class="row session-title">
                    <h2>Our Achievements in Numbers</h2>
                    <p>We can talk for a long time about advantages.
                        But you can read the following facts in order to make sure of all pluses of our organisation:</p>
                </div>
                <div class="row">
                    @foreach($facts as $fact)
                        <div class="col-sm-3 numb">
                            <h3>{{$fact->number}}</h3>
                            <span>{{$fact->title}}</span>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <!-- ################# Recent Projects Start Here #######################--->
    <section class="events">
        <div class="container">
            <div class="session-title row">
                <h2><a href="/projects"> Our Projects </a></h2>
                <p>The last projects of our team</p>
            </div>
            <div class="event-ro row">
                @foreach($projects as $project)
                    <div class="col-md-4 col-sm-6">
                        <div class="event-box">
                            <img src="{{$project->getImage()}}" width="200" height="200" alt="">
                            <h4>{{$project->title}}</h4>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- end main content-->
@endsection
