@extends('admin.layout')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Edit member
                <small>good words...</small>
            </h1>
        </section>
        <!-- Main content -->
        <section class="content">
        {{Form::open([
		'route'	=>	['members.update', $member->id],
		'files'	=>	true,
		'method'	=>	'put'
	])}}
        <!-- Default box -->
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">Edit member</h3>
                    @include('admin.errors')
                </div>
                <div class="box-body">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Name</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="" value="{{$member->name}}" name="name">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Position</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="" value="{{$member->position}}" name="position">
                        </div>
                        <div class="form-group">
                            <img src="{{$member->getImage()}}" alt="" class="img-responsive" width="200">
                            <label for="exampleInputFile">Image</label>
                            <input type="file" id="exampleInputFile" name="image">
                            <p class="help-block">Some message about image formats...</p>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Description</label>
                            <textarea name="description" id="" cols="30" rows="10" class="form-control">{{$member->description}}</textarea>
                        </div>
                    </div>
                </div>
                <!-- /.box-body -->
                <div class="box-footer">
                    <a href="{{route('members.index')}}" class="btn btn-default">Back</a>
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
