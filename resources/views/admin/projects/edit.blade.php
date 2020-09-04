@extends('admin.layout')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Edit project
            </h1>
        </section>
        <!-- Main content -->
        <section class="content">
        {{Form::open([
		'route'	=>	['projects.update', $project->id],
		'files'	=>	true,
		'method'	=>	'put'
	])}}
        <!-- Default box -->
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">Edit project</h3>
                    @include('admin.errors')
                </div>
                <div class="box-body">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Year</label>
                            <input type="number" class="form-control" id="exampleInputEmail1" placeholder=""
                                   value="{{$project->year}}" name="year">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Title</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" placeholder=""
                                   value="{{$project->title}}" name="title">
                        </div>
                        <div class="form-group">
                            <img src="{{$project->getImage()}}" alt="" class="img-responsive" width="200">
                            <label for="exampleInputFile">Cover image</label>
                            <input type="file" id="exampleInputFile" name="cover_image">
                            <p class="help-block">Some message about image formats...</p>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Description</label>
                            <textarea name="description" id="" cols="30" rows="10"
                                      class="form-control">{{$project->description}}</textarea>
                        </div>
                    </div>
                </div>
                <!-- /.box-body -->
                <div class="box-footer">
                    <a href="{{route('projects.index')}}" class="btn btn-default">Back</a>
                    <button class="btn btn-warning pull-right">Edit</button>
                </div>
                <!-- /.box-footer-->
            </div>
            <!-- /.box -->
            {{Form::close()}}
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
