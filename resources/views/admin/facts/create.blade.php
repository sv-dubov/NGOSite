@extends('admin.layout')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Add fact
            </h1>
        </section>
        <!-- Main content -->
        <section class="content">
        {{Form::open([
		'route'	=> 'facts.store',
		'files'	=>	true
	])}}
        <!-- Default box -->
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">Add fact</h3>
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
                            <label for="exampleInputEmail1">Number</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="" name="number"
                                   value="{{old('number')}}">
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.box-body -->
            <div class="box-footer">
                <a href="{{route('facts.index')}}" class="btn btn-default">Back</a>
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
