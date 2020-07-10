@extends('layout')

@section('assets')
    {{--    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">--}}
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    {{--    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>--}}
    <style>
        .bs-example {
            margin: 20px;
        }

        .accordion .fa {
            margin-right: 0.5rem;
        }
    </style>
    <script>
        $(document).ready(function () {
            // Add minus icon for collapse element which is open by default
            $(".collapse.show").each(function () {
                $(this).prev(".card-header").find(".fa").addClass("fa-minus").removeClass("fa-plus");
            });
            // Toggle plus minus icon on show hide of collapse element
            $(".collapse").on('show.bs.collapse', function () {
                $(this).prev(".card-header").find(".fa").removeClass("fa-plus").addClass("fa-minus");
            }).on('hide.bs.collapse', function () {
                $(this).prev(".card-header").find(".fa").removeClass("fa-minus").addClass("fa-plus");
            });
        });
    </script>
@endsection

@section('content')

    <!--main content start-->
    <div class="main-content">
        <div class="container">
            <div class="row">
                <div class="bs-example">
                    <div class="accordion" id="accordionExample">
                        @foreach($reports as $report)
                            <div class="card">
                                <div class="card-header" id="heading{{$report->id}}">
                                    <h2 class="mb-0">
                                        <button type="button" class="btn btn-link" data-toggle="collapse"
                                                data-target="#collapse{{$report->id}}"><i
                                                class="fa fa-plus"></i> {{$report->year}}
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapse{{$report->id}}" class="collapse"
                                     aria-labelledby="heading{{$report->id}}"
                                     data-parent="#accordionExample">
                                    <div class="card-body">
                                        <p>{!!$report->description!!}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                {{--@include('pages._sidebar')--}}
            </div>
        </div>
    </div>
    <!-- end main content-->

@endsection
