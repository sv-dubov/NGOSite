<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>NGO Website</title>
    <link rel="shortcut icon" href="/images/fav.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@400;500&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="/images/fav.jpg">
    <!-- common css -->
    <link rel="stylesheet" type="text/css" href="/css/front2.css" />
    @yield('assets')
</head>

<body>
<header class="continer-fluid ">
    <div class="header-top">
        <div class="container">
            <div class="row col-det">
                <div class="col-lg-6 d-none d-lg-block">
                    <ul class="ulleft">
                        <li>
                            <i class="far fa-envelope"></i>
                            sv_dubov@ukr.net
                            <span>|</span></li>
                        <li>
                            <i class="fas fa-phone-volume"></i>
                            +38 050 101 76 89</li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6 folouws">
                    <ul class="ulright">
                        <li> <small>Follow Us </small>:</li>
                        <li>
                            <a href="https://www.facebook.com/sviatoslav.dubov"><i class="fab fa-facebook-square"></i></a>
                        </li>
                        <li>
                            <a href="https://twitter.com/dubov_rv"><i class="fab fa-twitter-square"></i></a>
                        </li>
                        <li>
                            <a href="https://www.instagram.com/sbf_rivne/"><i class="fab fa-instagram"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fab fa-linkedin"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-3 d-none d-md-block col-md-6 btn-bhed">
                    @if(Auth::check())
                        <button class="btn btn-sm btn-success"><a href="/profile">My Profile</a></button>
                        <button class="btn btn-sm btn-default"><a href="/logout">Logout</a></button>
                    @else
                        <button class="btn btn-sm btn-success"><a href="/login">Login</a></button>
                        <button class="btn btn-sm btn-default"><a href="/register">Register</a></button>
                    @endif
                </div>
            </div>
        </div>
    </div>
    <div id="menu-jk" class="header-bottom">
        <div class="container">
            <div class="row nav-row">
                <div class="col-lg-3 col-md-12 logo">
                    <a href="/">
                        <img src="/images/logoSuperNGO.png" alt="">
                        <a data-toggle="collapse" data-target="#menu" href="#menu"><i class="fas d-block d-lg-none small-menu fa-bars"></i></a>
                    </a>
                </div>
                <div id="menu" class="col-lg-9 col-md-12 d-none d-lg-block nav-col">
                    <ul class="navbad">
                        <li class="nav-item active">
                            <a class="nav-link" href="/">Home
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/posts">News</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/articles">Articles</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/videos">Videos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/gallery">Gallery</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/about">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/contact">Contact US</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>

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

@yield('content')

<!--footer start-->
<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-12">
                <h2>Terms of use</h2>
                <p>
                    При повному або частковому використаннi матерiалiв посилання на cvu.com.ua є обов'язковим. Вiдповiдальнiсть за достовiрнiсть інформації несуть автори матерiалiв. Вiдповiдальнiсть за достовiрнiсть рекламної iнформацiї несуть рекламодавцi.
                </p>
            </div>
            <div class="col-md-4 col-sm-12">
                <h2>Useful Links</h2>
                <ul class="list-unstyled link-list">
                    <li><a ui-sref="about" href="/about">About us</a><i class="fa fa-angle-right"></i></li>
                    <li><a ui-sref="portfolio" href="/team">Team</a><i class="fa fa-angle-right"></i></li>
                    <li><a ui-sref="products" href="/projects">Our projects</a><i class="fa fa-angle-right"></i></li>
                    <li><a ui-sref="gallery" href="/gallery">Gallery</a><i class="fa fa-angle-right"></i></li>
                    <li><a ui-sref="contact" href="/contact">Contact us</a><i class="fa fa-angle-right"></i></li>
                </ul>
            </div>
            <div class="col-md-4 col-sm-12 map-img">
                <h2>Contact Us</h2>
                <address class="md-margin-bottom-40">
                    Soborna Street, <br>
                    33, Building<br>
                    Rivne, Ukraine<br>
                    Phone: +38 0501017689<br>
                    E-mail: superngo@ukr.net<br>
                </address>
            </div>
        </div>
    </div>
</footer>
<div class="copy">
    <div class="container">
        <a href="#">2020 &copy; All Rights Reserved</a>
        <span>
                <a href="https://github.com/sv-dubov"><i class="fab fa-github"></i></a>
                <a href="https://twitter.com/dubov_rv"><i class="fab fa-twitter"></i></a>
                <a href="https://www.facebook.com/sviatoslav.dubov"><i class="fab fa-facebook-f"></i></a>
        </span>
    </div>
</div>
<a id="back2Top" title="Back to top" href="#">&#10148;</a>
<!-- js files -->
<script src="/js/front2.js"></script>
<script src="/js/carousel.js"></script>
<script src="{{ asset('js/share.js') }}"></script>
@stack('scripts')
</body>

</html>
