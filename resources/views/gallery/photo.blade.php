@extends('layout')

@section('content')
    <!--main content start-->
    <div class="main-content">
        <div class="container">
            <div class="box-body">
                <div class="row">
                    <div class="col-md-12">
                        <div id="mdb-lightbox-ui"></div>
                        <div class="mdb-lightbox">
                            <a class="btn btn-default" href="{{route('gallery.index')}}">Back to Album</a>
                            <hr>
                            <h3>{{$photo->title}}</h3>
                            <p>{{$photo->description}}</p>
                            <hr>
                            <img src="/uploads/albums/photos/{{$photo->album_id}}/{{$photo->photo}}" alt="{{$photo->title}}">
                        </div>
                    </div>
                </div>
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
