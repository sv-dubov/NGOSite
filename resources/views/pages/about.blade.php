@extends('layout')

@section('content')
    <!--main content start-->
    <div class="main-content">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <article class="post">
                        @foreach($about as $aboutus)
                            <div class="post-content">
                                <div class="entry-header text-center">
                                    <h1 class="entry-title">{{$aboutus->title}}</h1>
                                </div>
                                <div class="entry-content">
                                    {!!$aboutus->content!!}
                                </div>
                            </div>
                        @endforeach
                    </article>
                </div>
            </div>
        </div>
    </div>
    </br>
    <!-- end main content-->
@endsection
