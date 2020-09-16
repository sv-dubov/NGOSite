@extends('admin.layout')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        @if($auser->is_admin == 1)
            <section class="content-header">
                <h1>
                    Hi! This is admin panel.
                </h1>
            </section>
            <!-- Main content -->
            <section class="content">
                <!-- Default box -->
                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">Main page</h3>
                    </div>
                    <div class="box-body">
                        Instruction for using admin panel.
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </section>
        @elseif($auser->is_editor == 1)
            <section class="content-header">
                <h1>
                    Hi! This is editor panel.
                </h1>
            </section>
            <!-- Main content -->
            <section class="content">
                <!-- Default box -->
                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">Main page</h3>
                    </div>
                    <div class="box-body">
                        Instruction for using editor panel.
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </section>
        @endif
    <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
