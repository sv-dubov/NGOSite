@extends('layout')

@section('content')
    <!--main content start-->
    <!-- ******************** Slider Starts Here ******************* -->
    <div class="slider">
        <!-- Set up your HTML -->
        <div class="owl-carousel ">
            <div class="slider-img">
                <div class="item">
                    <div class="slider-img"><img src="/images/slider/slider-3.jpg" alt=""></div>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-offset-2 col-lg-8 col-md-offset-2 col-md-8 col-sm-12 col-xs-12">
                                <div class="animated bounceInDown slider-captions">
                                    <h1 class="slider-title">Most Stylish Free Travel Website</h1>
                                    <p class="slider-text hidden-xs">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="slider-img"><img src="/images/slider/slider-1.jpg" alt=""></div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-offset-2 col-lg-8 col-md-offset-2 col-md-8 col-sm-12 col-xs-12">
                            <div class="slider-captions ">
                                <h1 class="slider-title">It's time for better help.</h1>
                                <p class="slider-text hidden-xs">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's</p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="slider-img"><img src="/images/slider/slider-2.jpg" alt=""></div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-offset-2 col-lg-8 col-md-offset-2 col-md-8 col-sm-12 col-xs-12">
                            <div class="slider-captions ">
                                <h1 class="slider-title">Most Attractive Travel Template</h1>
                                <p class="slider-text hidden-xs">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ################# Our News Starts Here#######################--->
    <section class="our-blog">
        <div class="container">
            <div class="row session-title">
                <h2> Our News </h2>
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
                                <h4><a href="{{route('post.show', $post->slug)}}">{{$post->title}}</a></h4>
                                <p>{!!$post->description!!}</p>
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
                <h2> Our Articles </h2>
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
                                <h4><a href="{{route('article.show', $article->slug)}}">{{$article->title}}</a></h4>
                                <p>{!!$article->description!!}</p>
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
                <h2> Our Videos </h2>
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
                                <h4><a href="{{route('videos.show', $videopost->slug)}}">{{$videopost->title}}</a></h4>
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
    <!--################### Our Team Starts Here #######################--->
    <section class="our-team team-11">
        <div class="container">
            <div class="session-title row">
                <h2>Meet our Team</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce fringilla vel nisl a dictum. Donec ut est arcu. Donec hendrerit velit</p>
            </div>
            <div class="row team-row">
                @foreach($members as $member)
                    <div class="col-md-3 col-sm-6">
                        <div class="single-usr">
                            <img src="{{$member->getImage()}}" width="200" height="200" alt="">
                            <div class="det-o">
                                <h4>{{$member->name}}</h4>
                                <i>{{$member->position}}</i>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!--  ************************* About Us Starts Here ************************** -->
    <div class="about-us container-fluid">
        <div class="container">
            <div class="row natur-row no-margin w-100">
                <div class="text-part col-md-6">
                    <h2>About Our Charity</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis varius faucibus
                        ligula non congue. Suspendisse at pretium massa, sit amet
                        vulputate nibh. Nam posuere eros dolor. Donec vel arcu sagittis, pretium nisl </p>
                    <p> Cras faucibus laoreet nibh, sit amet tincidunt leo mollis in. Etiam eu mauris metus.
                        Nulla facilisi. Etiam vestibulum,
                        nisi et convallis elementum, leo orci aliquam metus, id posuere massa neque vitae
                        arcu.</p>

                    <p>Integer vulputate vehicula dolor a eleifend. Duis aliquam condimentum sapien,
                        eget tempor justo. Aenean porttitor nibh metus, sollicitudin egestas metus posuere et
                        . Fusce egestas volutpat metus, in sodales sem bibendum porta. Nunc hendrerit nunc sit
                        amet tellus posuere, at malesuada sem gravida. Integer maximus ultricies augue, at
                        dapibus elit bibendum consequat. Cras faucibus tellus eleifend, fermentum purus in,
                        dapibus sapien. Praesent nec ornare risus. Etiam iaculis, ligula vel gravida
                        vestibulum, urna justo posuere ante,
                        id pretium massa arcu sed mi. Nunc a sollicitudin sem. Duis tempus </p>
                </div>
                <div class="image-part col-md-6">
                    <div class="about-quick-box row">
                        <div class="col-md-6">
                            <div class="about-qcard">
                                <i class="fas fa-user"></i>
                                <p>Becom a Volunteer</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="about-qcard ">
                                <i class="fas fa-search-dollar red"></i>
                                <p>Quick Fundrais</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="about-qcard ">
                                <i class="fas fa-donate yell"></i>
                                <p>Giv Donation</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="about-qcard ">
                                <i class="fas fa-hands-helping blu"></i>
                                <p>Help Someone</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ################# Mission Vision Start Here #######################--->
    <section class="container-fluid mission-vision">
        <div class="container">
            <div class="row mission">
                <div class="col-md-6 mv-det">
                    <h1>Our Mission</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer neque libero, pulvinar et elementum quis, facilisis eu ante. Mauris non placerat sapien. Pellentesque tempor arcu non odio scelerisque ullamcorper. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam varius eros consequat auctor gravida. Fusce tristique lacus at urna sollicitudin pulvinar. Suspendisse hendrerit ultrices mauris.</p>
                </div>
                <div class="col-md-6 mv-img">
                    <img src="/images/misin.jpg" alt="">
                </div>
            </div>
            <div class="row vision">
                <div class="col-md-6 mv-img">
                    <img src="/images/vision.jpg" alt="">
                </div>
                <div class="col-md-6 mv-det">
                    <h1>Our Vision</h1>
                    <p>Ut ultricies lacus a rutrum mollis. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Sed porta dolor quis felis pulvinar dignissim. Etiam nisl ligula, ullamcorper non metus vitae, maximus efficitur mi. Vivamus ut ex ullamcorper, scelerisque lacus nec, commodo dui. Proin massa urna, volutpat vel augue eget, iaculis tristique dui.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- ################# Recent Projects Start Here #######################--->
    <section class="events">
        <div class="container">
            <div class="session-title row">
                <h2>Recent Projects</h2>
                <p>The last three projects of our team</p>
            </div>
            <div class="event-ro row">
                @foreach($projects as $project)
                    <div class="col-md-4 col-sm-6">
                        <div class="event-box">
                            <img src="{{$project->getImage()}}" width="200" height="200" alt="">
                            <h4>{{$project->title}}</h4>
                            <p>{!!$project->description!!}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
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
    <!-- end main content-->
@endsection

{{--@extends('layout')

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
                                    <div class="text-center">View Post</div>
                                </a>
                            </div>
                            <div class="post-content">
                                <header class="entry-header text-center">
                                    @if($post->hasCategory())
                                        <h6>
                                            <a href="{{route('category.show', $post->category->slug)}}"> {{$post->getCategoryTitle()}}</a>
                                        </h6>
                                    @endif
                                    <h1 class="entry-title"><a href="{{route('post.show', $post->slug)}}">{{$post->title}}</a></h1>
                                </header>
                                <div class="entry-content">
                                    {!!$post->description!!}
                                    <div class="btn-continue-reading text-center">
                                        <a href="{{route('post.show', $post->slug)}}" class="more-link">Continue Reading</a>
                                    </div>
                                </div>
                                <div class="social-share">
                                    <span class="social-share-title pull-left text-capitalize">{{$post->getDate()}}</span>
                                    <ul class="text-center pull-right">
                                        <li><a class="s-facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a class="s-twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a class="s-google-plus" href="#"><i class="fa fa-google-plus"></i></a></li>
                                        <li><a class="s-linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
                                        <li><a class="s-instagram" href="#"><i class="fa fa-instagram"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </article>
                    @endforeach
                    {{$posts->links()}}
                </div>
                @include('pages._sidebar')
            </div>
        </div>
    </div>
    <!-- end main content-->
@endsection--}}
