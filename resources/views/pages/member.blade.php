@extends('layout')

@section('content')
    <!--main content start-->
    <div class="main-content">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <a class="btn btn-primary" href="{{route('team.index')}}">Back to Team</a>
                    <br><br>
                    <article class="post">
                        <div class="post-thumb">
                            <img src="{{$member->getImage()}}" alt="">
                        </div>
                        <div class="post-content">
                            <div class="entry-header text-center">
                                <h3 class="entry-title">{{$member->name}}</h3>
                            </div>
                            <div class="entry-header text-center">
                                <h1 class="entry-title">{{$member->position}}</h1>
                            </div>
                            <div class="entry-content">
                                {!!$member->description!!}
                            </div>
                        </div>
                    </article>
                </div>
                @include('pages._sidemember')
            </div>
        </div>
    </div>
    </br>
    <!-- end main content-->
@endsection
