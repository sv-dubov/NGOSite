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
                <div class="box-body">
                    <a class="btn btn-default" href="{{route('albums.show', $photo->album_id)}}">Back to gallery</a>
                    <hr>
                    <h3>{{$photo->title}}</h3>
                    <p>{{$photo->description}}</p>
                    <hr>
                    <img src="/uploads/albums/photos/{{$photo->album_id}}/{{$photo->photo}}" style="height: 600px;" alt="{{$photo->title}}">
                    <br><br>
                    <a href="{{route('photos.edit', $photo->id)}}" class="btn btn-warning">Edit photo</a>
                    <br><br>
                    {{Form::open(['route'=>['photos.destroy', $photo->id], 'method'=>'delete'])}}
                    <button class="btn btn-danger pull-left" onclick="return confirm('Are you sure?')" type="submit">Delete photo</button>
                    {{Form::close()}}
                    <br><br>
                    <h4>Size: {{$photo->size}} bytes</h4>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
