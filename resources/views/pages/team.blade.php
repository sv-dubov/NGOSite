@extends('layout')

@section('content')
    <!--main content start-->
    <div class="main-content">
        <h1 class="text-center">Our best team</h1>
        <div class="container">
            <div class="row">
                @foreach($members as $member)
                    <div class="col-lg-4">
                        <div class="our-team-main">
                            <div class="team-front">
                                <img src="{{$member->getImage()}}" class="img-fluid"/>
                                <h3>{{$member->name}}</h3>
                                <p>{{$member->position}}</p>
                            </div>
                            <div class="team-back">
                                {{--<span>{!!$member->description!!}</span>--}}
                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget
                                dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, Lorem
                                ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.
                                Aenean massa. Cum sociis natoque.
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    </br>
    <!-- end main content-->
@endsection
