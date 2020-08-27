<div class="col-md-4" data-sticky_column>
    <div class="primary-sidebar">
        <aside class="widget pos-padding">
            <h3 class="widget-title text-center text-uppercase">Recent News</h3>
            @foreach($recentPosts as $post)
                <div class="thumb-latest-posts">
                    <div class="p-content">
                        <a href="{{route('post.show', $post->slug)}}">{{$post->title}}</a>
                        <span class="p-date">{{$post->getDate()}}</span>
                    </div>
                </div>
            @endforeach
        </aside>
        </br>
        <aside class="widget pos-padding">
            <h3 class="widget-title text-center text-uppercase">Recent Articles</h3>
            @foreach($articles as $article)
                <div class="thumb-latest-posts">
                    <div class="p-content">
                        <a href="{{route('article.show', $article->slug)}}">{{$article->title}}</a>
                        <span class="p-date">{{$article->getDate()}}</span>
                    </div>
                </div>
            @endforeach
        </aside>
        </br>
        <aside class="widget pos-padding">
            <h3 class="widget-title text-center text-uppercase">Recent Videos</h3>
            @foreach($videoposts as $videopost)
                <div class="thumb-latest-posts">
                    <div class="p-content">
                        <a href="{{route('videos.show', $videopost->slug)}}">{{$videopost->title}}</a>
                        <span class="p-date">{{$videopost->getDate()}}</span>
                    </div>
                </div>
            @endforeach
        </aside>
    </div>
</div>
