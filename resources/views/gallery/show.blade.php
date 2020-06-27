@extends('layout')

@section('content')
    <!--main content start-->
    <div class="main-content">
        <div class="container">
            <div class="box-body">
                <a class="btn btn-default" href="{{route('gallery.index')}}">Back to Albums</a>
                <hr>
                <div class="row">
                    <div class="col-md-12">
                        <div id="mdb-lightbox-ui"></div>
                        <div class="mdb-lightbox">
                            @foreach($album->photos as $photo)
                            <figure class="col-md-4">
                                        <a href="{{route('gallery.photo', $photo->id)}}">
                                            <img class="img-fluid"
                                                 src="/uploads/albums/photos/{{$photo->album_id}}/{{$photo->photo}}"
                                                 alt="{{$photo->title}}">
                                        </a>
                                        <br>
                                        <h4>{{$photo->title}}</h4>
                            </figure>
                            @endforeach
                        </div>
                    </div>
                </div>
{{--            @if(count($album->photos) > 0)
                <?php
                $colcount = count($album->photos);
                $i = 1;
                ?>
                <!-- Page Content -->
                    <div class="container" id="photos">
                        <h1 class="font-weight-light text-center text-lg-left mt-4 mb-0">{{$album->name}}</h1>
                        <hr class="mt-2 mb-5">
                        <div class="row text-center text-lg-left">
                            @foreach($album->photos as $photo)
                                <div class="col-lg-3 col-md-4 col-6">
                                    <a href="{{route('gallery.show', $photo->id)}}" class="d-block mb-4 h-100">
                                        <img class="img-fluid img-thumbnail"
                                             src="/uploads/albums/photos/{{$photo->album_id}}/{{$photo->photo}}"
                                             alt="{{$photo->title}}">
                                    </a>
                                    <br>
                                    <h4>{{$photo->title}}</h4>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <!-- /.container -->
                @else
                    <p>No Photos To Display</p>
                @endif--}}
            </div>
            <!-- /.box-body -->
        </div>
    </div>
    <!-- end main content-->
@endsection

@push('scripts')
    <script type="text/javascript">
        // MDB Lightbox Init
        $(function () {
            $("#mdb-lightbox-ui").load("mdb-addons/mdb-lightbox-ui.html");
        });
    </script>
@endpush
