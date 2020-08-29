@extends('layout')

@section('content')
    <!--main content start-->
    <div class="main-content">
        <div class="container">
            <div class="row">
                <div id="accordion">
                    @foreach($groups as $group)
                        @foreach($group as $project)
                            <div class="card">
                                <div class="card-header" id="heading{{$project->year}}">
                                    <h5 class="mb-0 d-inline">
                                        <button class="btn btn-link" data-toggle="collapse"
                                                data-target="#collapse{{$project->year}}" aria-expanded="true"
                                                aria-controls="collapseOne">
                                            {{$project->year}}
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapse{{$project->year}}" class="collapse show"
                                     aria-labelledby="heading{{$project->year}}" data-parent="#accordion">
                                    <div class="card-body" id="child1">
                                        <div class="card">
                                            <div class="card-header">
                                                <a href="#" data-toggle="collapse"
                                                   data-target="#collapse{{$project->id}}">{{$project->title}}</a>
                                            </div>
                                            <div class="card-body collapse" data-parent="#child1" id="collapse{{$project->id}}">
                                                <p>{!!$project->description!!}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endforeach
                </div>
                {{--@include('pages._sidebar')--}}
            </div>
        </div>
    </div>
    <!-- end main content-->
@endsection

