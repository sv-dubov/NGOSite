@extends('admin.layout')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Welcome!
            </h1>
            <ol class="breadcrumb">
                <li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>
            </ol>
        </section>
        <!-- Main content -->
        <section class="content">
            <!-- Default box -->
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Listing photos in album</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <a class="btn btn-default" href="{{route('albums.index')}}">Back</a>
                    <a class="btn btn-success" href="{{route('photos.create', $album->id)}}">Upload Photo To Album</a>
                    <hr>
                    @if(count($album->photos) > 0)
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
                                                <a href="{{route('photos.show', $photo->id)}}" class="d-block mb-4 h-100">
                                                    <img class="img-fluid img-thumbnail" src="/uploads/albums/photos/{{$photo->album_id}}/{{$photo->photo}}" alt="{{$photo->title}}">
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
                    @endif
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
