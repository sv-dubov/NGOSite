<ul class="sidebar-menu">
    <li class="header">MAIN NAVIGATION</li>
    <li class="treeview">
        <a href="/admin">
            <i class="fa fa-dashboard"></i> <span>Admin-panel</span>
        </a>
    </li>
    <li><a href="{{route('about.index')}}"><i class="fa fa-info-circle"></i> <span>About us</span></a></li>
    <li><a href="{{route('articles.index')}}"><i class="fa fa-sticky-note"></i> <span>Articles</span></a></li>
    <li><a href="{{route('categories.index')}}"><i class="fa fa-list-ul"></i> <span>Categories</span></a></li>
    <li><a href="{{route('facts.index')}}"><i class="fa fa-newspaper-o"></i> <span>Facts</span></a></li>
    <li><a href="{{route('albums.index')}}"><i class="fa fa-picture-o"></i> <span>Galleries</span></a></li>
    <li><a href="{{route('members.index')}}"><i class="fa fa-users"></i> <span>Members</span></a></li>
    <li>
        <a href="/admin/contacts">
            <i class="fa fa-envelope-o"></i> <span>Messages</span>
            <span class="pull-right-container">
                <small class="label pull-right bg-red">{{$newMessagesCount}}</small>
            </span>
        </a>
    </li>
    <li><a href="{{route('posts.index')}}"><i class="fa fa-sticky-note-o"></i> <span>News</span></a></li>
    <li><a href="{{route('projects.index')}}"><i class="fa fa-database"></i> <span>Projects</span></a></li>
    <li><a href="{{route('reports.index')}}"><i class="fa fa-file-archive-o"></i> <span>Reports</span></a></li>
    <li><a href="{{route('image-slider.index')}}"><i class="fa fa-tv"></i> <span>Slider</span></a></li>
    <li><a href="{{route('tags.index')}}"><i class="fa fa-tags"></i> <span>Tags</span></a></li>
    <li><a href="{{route('users.index')}}"><i class="fa fa-users"></i> <span>Users</span></a></li>
    <li><a href="{{route('videoposts.index')}}"><i class="fa fa-video-camera"></i> <span>Videos</span></a></li>
</ul>
