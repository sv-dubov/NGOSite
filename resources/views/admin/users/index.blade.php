@extends('admin.layout')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Main content -->
        <section class="content">
            <!-- Default box -->
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Listing users</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="form-group">
                        <a href="{{route('users.create')}}" class="btn btn-success">Add</a>
                    </div>
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Username</th>
                            <th>E-mail</th>
                            <th>Avatar</th>
                            <th>Make admin</th>
                            <th>Ban user</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        </tfoot>
                        <tbody>
                        @foreach($users as $user)
                            <tr>
                                <td>{{$user->id}}</td>
                                <td>{{$user->name}}</td>
                                <td>{{$user->email}}</td>
                                <td>
                                    <img src="{{$user->getImage()}}" alt="" class="img-responsive" width="150">
                                </td>
                                <td>
                                    @if($user->is_admin == 1)
                                        <a href="/admin/users/toggle/{{$user->id}}" class="fa fa-lock"></a>
                                    @else
                                        <a href="/admin/users/toggle/{{$user->id}}" class="fa fa-thumbs-o-up"></a>
                                    @endif
                                 </td>
                                <td>
                                    @if($user->status == 0)
                                        <a href="/admin/users/status/{{$user->id}}" class="fa fa-lock"></a>
                                    @else
                                        <a href="/admin/users/status/{{$user->id}}" class="fa fa-thumbs-o-up"></a>
                                    @endif
                                </td>
                                <td><a href="{{route('users.edit', $user->id)}}" class="fa fa-pencil"></a>
                                    {{Form::open(['route'=>['users.destroy', $user->id], 'method'=>'delete'])}}
                                    <button onclick="return confirm('Are you sure?')" type="submit" class="delete">
                                        <i class="fa fa-remove"></i>
                                    </button>
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
