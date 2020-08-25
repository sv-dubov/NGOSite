{{--<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Projects</title>
    <link rel="stylesheet" href="/css/expandcollapse.css">
    <style>
        * {
            box-sizing: border-box;
            font-family: 'Open Sans', sans-serif;
            font-weight: 200;
        }

        body {
            background: #F4F4F4;
            width: 40%;
            min-width: 300px;
            max-width: 728px;
            margin: 1.5em auto;
            color: #222;
        }
    </style>
</head>

<body>
<h1>jQuery expandcollapse.js Plugin</h1>
<div class="jquery-script-ads"><script type="text/javascript"><!--
        google_ad_client = "ca-pub-2783044520727903";
        /* jQuery_demo */
        google_ad_slot = "2780937993";
        google_ad_width = 728;
        google_ad_height = 90;
        //-->
    </script>
    <script type="text/javascript"
            src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
    </script></div>
@foreach($projects as $project)
<ul class="accordion">
    <li>
        <a id="top" class="toggle" href="javascript:void(0);">{{$project->year}}</a>
        <ul class="inner">
            <li>
                <a href="#" class="toggle">{{$project->title}}</a>
                        <div class="inner">
                            <p>{!!$project->description!!}</p>
                        </div>
            </li>
        </ul>
    </li>
</ul>
@endforeach
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src="/js/expandcollapse.js"></script>
</body>
<script type="text/javascript">

    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-36251023-1']);
    _gaq.push(['_setDomainName', 'jqueryscript.net']);
    _gaq.push(['_trackPageview']);

    (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
    })();

</script>
</html>--}}

@extends('layout')

@section('assets')
{{--        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">--}}
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
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
{{--                    @foreach($projects as $item)
{{logger($projects)}}
                    <div class="accordion" id="accordion{{$item['year']}}">
                        <div class="accordion-group">
                            <div class="accordion-heading">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion{{$item['year']}}" href="#collapse{{$item['year']}}">
                                    {{$item['year']}}
                                </a>
                            </div>
                            <div id="collapse{{$item['year']}}" class="accordion-body collapse">
                                <div class="accordion-inner">
                                    <!-- Here we insert another nested accordion -->
                                    <div class="accordion" id="accordion{{$item['year']}}{{$item['id']}}">
                                        <div class="accordion-group">
                                            <div class="accordion-heading">
                                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion{{$item['year']}}{{$item['id']}}" href="#collapseInnerOne">
                                                    {{$item['title']}}
                                                </a>
                                            </div>
                                            <div id="collapseInnerOne" class="accordion-body collapse in">
                                                <div class="accordion-inner">
                                                    <p>{!!$item['description']!!}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Inner accordion ends here -->
                                </div>
                            </div>

                        </div>
                    </div>
                    @endforeach--}}
                    <div class="accordion" id="accordionExample">
                        @foreach($projects as $project)
                            <div class="card">
                                <div class="card-header" id="heading{{$project->id}}">
                                    <h2 class="mb-0">
                                        <button type="button" class="btn btn-link" data-toggle="collapse"
                                                data-target="#collapse{{$project->id}}"><i class="fa fa-plus"></i> {{$project->year}}
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapse{{$project->id}}" class="collapse" aria-labelledby="heading{{$project->id}}"
                                     data-parent="#accordionExample">
                                    <div class="accordion-inner">
                                    <div class="card-body">
                                        <div class="accordion" id="accordionExample">
                                            @foreach($projects as $project)
                                                <div class="card">
                                                    <div class="card-header" id="heading{{$project->id}}">
                                                        <h2 class="mb-0">
                                                            <button type="button" class="btn btn-link" data-toggle="collapse"
                                                                    data-target="#collapse{{$project->id}}"><i class="fa fa-plus"></i> {{$project->title}}
                                                            </button>
                                                        </h2>
                                                    </div>
                                                    <div id="collapse{{$project->id}}" class="collapse" aria-labelledby="heading{{$project->id}}"
                                                         data-parent="#accordionExample">
                                                        <div class="card-body">
                                                            <p>{!!$project->description!!}</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    {{--<div class="accordion" id="accordionExample">
                        @foreach($projects as $project)
                            <div class="card">
                                <div class="card-header" id="heading{{$project->id}}">
                                    <h2 class="mb-0">
                                        <button type="button" class="btn btn-link" data-toggle="collapse"
                                                data-target="#collapse{{$project->id}}"><i class="fa fa-plus"></i> {{$project->title}}
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapse{{$project->id}}" class="collapse" aria-labelledby="heading{{$project->id}}"
                                     data-parent="#accordionExample">
                                    <div class="card-body">
                                        <p>{!!$project->description!!}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>--}}
                </div>
                {{--@include('pages._sidebar')--}}
            </div>
        </div>
    </div>
    <!-- end main content-->

@endsection

