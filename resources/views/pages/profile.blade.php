@extends('layout')

@section('content')
<!--main content start-->
<div class="main-content">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="leave-comment mr0">
                    @if(session('status'))
                    <div class="alert alert-success">
                        {{session('status')}}
                    </div>
                    @endif
                    <h3>My profile</h3>
                    @include('admin.errors')
                    <br><img src="{{$user->getImage()}}" alt="" class="profile-image">
                        <br>
                        <br>
                    <form class="form-horizontal contact-form" role="form" method="post" action="/profile" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <div class="form-group">
                            <div class="col-md-8">
                                <input type="file" class="form-control" id="image" name="avatar">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-8">
                                <input type="text" class="form-control" id="name" name="name" placeholder="Name" value="{{$user->name}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-8">
                                <input type="email" class="form-control" id="email" name="email" placeholder="E-mail" value="{{$user->email}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <span class="asterisk_input"></span>
                            <div class="col-md-8">
                                <input type="password" class="form-control" id="password" name="password" placeholder="Confirm or change password">
                            </div>
                        </div>
                        <div style="margin-top:10px;" class="row">
                            <div style="padding-top:10px;" class="col-sm-3"><label></label></div>
                            <div class="col-sm-8">
                                <button type="submit" class="btn btn-primary btn-sm">Update</button>
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
