@extends('admin.layout')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Edit photo
            </h1>
        </section>
        <!-- Main content -->
        <section class="content">
        {{Form::open([
        'route'	=>	['photos.update', $photo->id],
		'files'	=>	true,
		'method'	=>	'put'
	])}}
        <!-- Default box -->
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">Edit photo</h3>
                    @include('admin.errors')
                </div>
                {{--{{Form::hidden('album_id', $album_id)}}--}}
                <div class="box-body">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Title</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="" name="title" value="{{$photo->title}}">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Description</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="" name="description" value="{{$photo->description}}">
                            {{--<textarea name="description" id="" cols="30" rows="10" class="form-control">{{old('description')}}</textarea>--}}
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.box-body -->
            <div class="box-footer">
                <a href="{{route('albums.index')}}" class="btn btn-default">Back</a>
                <button class="btn btn-warning pull-right">Edit</button>
            </div>
            <!-- /.box-footer-->
            <!-- /.box -->
            {{Form::close()}}
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
