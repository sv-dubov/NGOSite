@extends('layout')

@section('content')
    <!--main content start-->
    <div class="main-content">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="leave-comment mr0">
                        <!--leave comment-->
                        @if(session('status'))
                            <div class="alert alert-danger">
                                {{session('status')}}
                            </div>
                        @endif
                        <h3>Login</h3>
                        @include('admin.errors')
                        <br>
                        <form class="form-horizontal contact-form" role="form" method="post" action="/login">
                            {{csrf_field()}}
                            <div class="form-group">
                                <div class="col-md-8">
                                    <input type="text" class="form-control" id="email" name="email" placeholder="E-mail" value="{{old('email')}}">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-8">
                                    <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                                </div>
                            </div>
                            <div style="margin-top:10px;" class="row">
                                <div style="padding-top:10px;" class="col-sm-3"><label></label></div>
                                <div class="col-sm-8">
                                    <button type="submit" class="btn btn-primary btn-sm">Login</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    </br>
                    <!--end leave comment-->
                </div>
            </div>
        </div>
    </div>
    <!-- end main content-->
@endsection
