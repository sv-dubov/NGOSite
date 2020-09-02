@extends('admin.layout')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Main content -->
        <section class="content">
            <!-- Default box -->
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Message</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <a class="btn btn-default" href="{{route('contacts.index')}}">Back to list</a>
                    <hr>
                    <div class="col-sm-1"><label>Name:</label></div>
                    <p>{{$contacts->name}}</p></br>
                    <div class="col-sm-1"><label>E-mail:</label></div>
                    <p>{{$contacts->email}}</p></br>
                    <div class="col-sm-1"><label>Phone:</label></div>
                    <p>{{$contacts->phone}}</p></br>
                    <div class="col-sm-1"><label>Message:</label></div>
                    <p>{{$contacts->message}}</p></br>
                    {{Form::open(['route'=>['contacts.destroy', $contacts->id], 'method'=>'delete'])}}
                    <button class="btn btn-danger pull-left" onclick="return confirm('Are you sure?')" type="submit">Delete message</button>
                    {{Form::close()}}
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
