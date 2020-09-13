@extends('admin.layout')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Add mission item
            </h1>
        </section>
        <!-- Main content -->
        <section class="content">
        {{Form::open([
		'route'	=> 'missions.store',
		'files'	=>	true
	])}}
        <!-- Default box -->
            <div class="box">
                <div class="box-header with-border">
                    @include('admin.errors')
                </div>
                <div class="box-body">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Title</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="" name="title"
                                   value="{{old('title')}}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">Cover image</label>
                            <input type="file" id="exampleInputFile" name="cover_image">
                            <p class="help-block">Image size must be under 2MB</p>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Description</label>
                            <textarea name="description" id="" cols="30" rows="10"
                                      class="form-control">{{old('description')}}</textarea>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.box-body -->
            <div class="box-footer">
                <a href="{{route('missions.index')}}" class="btn btn-default">Back</a>
                <button class="btn btn-success pull-right">Add</button>
            </div>
            <!-- /.box-footer-->
            <!-- /.box -->
            {{Form::close()}}
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
