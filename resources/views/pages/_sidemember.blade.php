<div class="col-md-4" data-sticky_column>
    <div class="primary-sidebar">
        <aside class="widget pos-padding">
            <h3 class="widget-title text-center">All Team</h3>
            @foreach($members as $member)
                <div class="thumb-latest-posts">
                    <div class="p-content text-center">
                        <a href="{{route('member.show', $member->slug)}}">{{$member->name}}</a>
                        <span class="p-date">{{$member->position}}</span>
                    </div>
                </div>
            @endforeach
        </aside>
    </div>
</div>
