@extends('layout')

@section('content')
    <!--main content start-->
    <div class="main-content">
        <div class="container">
            <div class="row">
                <div id="accordion">
                    @foreach($groupsByYear as $year => $groups)
                        <div class="card">
                            <div class="card-header" id="heading{{$year}}">
                                <h5 class="mb-0 d-inline">
                                    <button class="btn btn-success" data-toggle="collapse" data-target="#collapse{{$year}}" aria-expanded="true" aria-controls="collapseOne">
                                        {{$year}}
                                    </button>
                                </h5>
                            </div>
                            <div id="collapse{{$year}}" class="collapse show" aria-labelledby="heading{{$year}}" data-parent="#accordion">
                                @foreach($groups as $project)
                                    <div class="card-body" id="child1">
                                        <div class="card">
                                            <div class="card-header">
                                                <a href="#" data-toggle="collapse" data-target="#collapse{{$project->id}}">{{$project->title}}</a>
                                            </div>
                                            <div class="card-body collapse" data-parent="#child1" id="collapse{{$project->id}}">
                                                <p>{!!$project->description!!}</p>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <br><br>
    </div>
    <!-- end main content-->
@endsection
