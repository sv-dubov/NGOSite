@extends('admin.layout')

@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Add member
                <small>good words...</small>
            </h1>
        </section>
        <!-- Main content -->
        <section class="content">
        {{Form::open([
		'route'	=> 'members.store',
		'files'	=>	true
	])}}
        <!-- Default box -->
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">Add member</h3>
                    @include('admin.errors')
                </div>
                <div class="box-body">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Name</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="" name="name" value="{{old('name')}}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Position</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="" name="position" value="{{old('position')}}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">Image</label>
                            <input type="file" id="exampleInputFile" name="image">
                            <p class="help-block">Some message about image formats...</p>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Description</label>
                            <textarea name="description" id="" cols="30" rows="10" class="form-control">{{old('description')}}</textarea>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.box-body -->
            <div class="box-footer">
                <a href="{{route('members.index')}}" class="btn btn-default">Back</a>
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
