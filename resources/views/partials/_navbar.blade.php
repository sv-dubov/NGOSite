<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- favicon icon -->
    <title>NGO Site</title>
    <!-- common css -->
    <link rel="stylesheet" href="/css/front.css">
    <!-- css for dropdown navbar -->
    <style>
        .dropbtn {
            background-color: #4CAF50;
            color: white;
            padding: 16px;
            font-size: 16px;
            border: none;
        }
        .dropdown {
            position: relative;
            display: inline-block;
        }
        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f1f1f1;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
        }
        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }
        .dropdown-content a:hover {background-color: #ddd;}
        .dropdown:hover .dropdown-content {display: block;}
        .dropdown:hover .dropbtn {background-color: #3e8e41;}
    </style>
    <!-- HTML5 shim and Respond.js IE9 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="assets/js/html5shiv.js"></script>
    <script src="assets/js/respond.js"></script>
    <![endif]-->
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="/images/favicon.png">
    @yield('assets')
</head>

<body>
<nav class="navbar main-menu navbar-default">
    <div class="container">
        <div class="menu-content">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/"><img src="/images/logo.png" alt=""></a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li><a href="/">HOME</a></li>
                    <li><a href="/gallery">GALLERY</a></li>
                    <li><a href="/videos">VIDEO</a></li>
                    <div class="dropdown">
                        <button class="dropbtn">ABOUT US</button>
                        <div class="dropdown-content">
                            <a href="#">Link 1</a>
                            <a href="/projects">Projects</a>
                            <a href="/reports">Reports</a>
                            <a href="/team">Team</a>
                        </div>
                    </div>
                    <li><a href="contact.html">CONTACT</a></li>
                </ul>
                <ul class="nav navbar-nav pull-right">
                    @if(Auth::check())
                        <li><a href="/profile">MY PROFILE</a></li>
                        <li><a href="/logout">LOGOUT</a></li>
                    @else
                        <li><a href="/register">REGISTER</a></li>
                        <li><a href="/login">LOGIN</a></li>
                    @endif
                </ul>
            </div>
            <!-- /.navbar-collapse -->
            <div class="show-search">
                <form role="search" method="get" id="searchform" action="#">
                    <div>
                        <input type="text" placeholder="Search and hit enter..." name="s" id="s">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
</nav>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            @if(session('status'))
                <div class="alert alert-info">
                    {{session('status')}}
                </div>
            @endif
        </div>
    </div>
</div>

{{--@yield('content')--}}

<!-- js files -->
<script src="/js/front.js"></script>
@stack('scripts')
</body>

</html>
