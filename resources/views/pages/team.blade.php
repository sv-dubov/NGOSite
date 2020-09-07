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
    </div>
    </br>
    <!-- end main content-->
@endsection
