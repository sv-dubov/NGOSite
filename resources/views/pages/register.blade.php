@extends('layout')

@section('content')
    <!--main content start-->
    <div class="main-content">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="leave-comment mr0">
                        <h3>Register</h3>
                        @include('admin.errors')
                        <br>
                        <form class="form-horizontal contact-form" role="form" method="post" action="/register">
                            {{csrf_field()}}
                            <div class="form-group">
                                <span class="asterisk_input"></span>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Name" value="{{old('name')}}">
                                </div>
                            </div>
                            <div class="form-group">
                                <span class="asterisk_input"></span>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" id="email" name="email" placeholder="E-mail" value="{{old('email')}}">
                                </div>
                            </div>
                            <div class="form-group">
                                <span class="asterisk_input"></span>
                                <div class="col-md-8">
                                    <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                                </div>
                            </div>
                            <div style="margin-top:10px;" class="row">
                                <div style="padding-top:10px;" class="col-sm-3"><label></label></div>
                                <div class="col-sm-8">
                                    <button type="submit" class="btn btn-primary btn-sm">Register</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    </br>
                </div>
            </div>
        </div>
    </div>
    <!-- end main content-->
@endsection
