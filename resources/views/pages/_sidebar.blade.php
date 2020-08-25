<div class="col-md-4" data-sticky_column>
    <div class="primary-sidebar">
        <aside class="widget">
            <h3 class="widget-title text-center">Articles</h3>
            @foreach($featuredArticles as $article)
                <div class="popular-post">
                    <a href="{{route('article.show', $article->slug)}}" class="popular-img"><img src="{{$article->getImage()}}" alt="">
                        <div class="p-overlay"></div>
                    </a>
                    <div class="p-content">
                        <a href="{{route('article.show', $article->slug)}}">{{$article->title}}</a>
                        <span class="p-date">{{$article->getDate()}}</span>
                    </div>
                </div>
            @endforeach
        </aside>
        <aside class="widget">
            <h3 class="widget-title text-center">Video</h3>
            <div id="widget-feature" class="owl-carousel">
                @foreach($featuredVideo as $videopost)
                <div class="item">
                    <div class="feature-content">
                        <img src="{{$videopost->getImage()}}" alt="">
                        <a href="{{route('videos.show', $videopost->slug)}}" class="overlay-text text-center">
                            <h5>{{$videopost->title}}</h5>
                            <span class="p-date">{{$videopost->getDate()}}</span>
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
        </aside>
        <aside class="widget pos-padding">
            <h3 class="widget-title text-center">Recent Posts</h3>
            @foreach($recentPosts as $post)
            <div class="thumb-latest-posts">
                <div class="media">
                    <div class="media-left">
                        <a href="{{route('post.show', $post->slug)}}" class="popular-img"><img src="{{$post->getImage()}}" alt="">
                            <div class="p-overlay"></div>
                        </a>
                    </div>
                    <div class="p-content">
                        <a href="{{route('post.show', $post->slug)}}">{{$post->title}}</a>
                        <span class="p-date">{{$post->getDate()}}</span>
                    </div>
                </div>
            </div>
            @endforeach
        </aside>
{{--        <aside class="widget border pos-padding">
            <h3 class="widget-title text-center">Categories</h3>
            <ul>
                @foreach($categories as $category)
                <li>
                    <a href="{{route('category.show', $category->slug)}}">{{$category->title}}</a>
                    <span class="post-count pull-right"> ({{$category->posts()->count()}})</span>
                </li>
                @endforeach
            </ul>
        </aside>--}}
{{--        <aside class="widget news-letter">
            <h3 class="widget-title text-center">Get Newsletter</h3>
            <form action="/subscribe" method="post">
                {{csrf_field()}}
                <input type="email" name="email" placeholder="Your e-mail address">
                <input type="submit" value="Subscribe Now" class="text-center btn btn-subscribe">
            </form>
        </aside>--}}
    </div>
</div>
