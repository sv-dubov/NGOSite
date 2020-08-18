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
                    <h3 class="box-title">Listing albums</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="form-group">
                        <a href="{{route('albums.create')}}" class="btn btn-success">Add</a>
                    </div>
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Show/Add photos</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($albums as $album)
                            <tr>
                                <td>{{$album->id}}</td>
                                <td>{{$album->name}}</td>
                                <td>
                                    <a class="fa fa-picture-o" href="{{route('albums.show', $album->id)}}"></a>
                                </td>
                                <td>
                                    <a href="{{route('albums.edit', $album->id)}}" class="fa fa-pencil"></a>
                                    {{Form::open(['route'=>['albums.destroy', $album->id], 'method'=>'delete'])}}
                                    <button onclick="return confirm('Are you sure?')" type="submit" class="delete"><i class="fa fa-remove"></i></button>
                                    {{Form::close()}}
                                </td>
                            </tr>
                        @endforeach
                        </tfoot>
                    </table>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
