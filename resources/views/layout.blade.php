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
    <link rel="stylesheet" href="/css/front2.css">
    <link rel="stylesheet" href="/plugins/slider/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/plugins/slider/css/owl.theme.default.css">
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
                        <li> <small>Folow Us </small>:</li>
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
                        <img src="/images/logo.jpg" alt="">
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
                        <ul class="navbad">
                            <li class="nav-item">
                                <a class="nav-link" href="about_us.html">About Us</a>
                            </li>
                        </ul>
                        <li class="nav-item">
                            <a class="nav-link" href="contact_us.html">Contact US</a>
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
                <h2>About Us</h2>
                <p>
                    Smart Eye is a leading provider of information technology, consulting, and business process services. Our dedicated employees offer strategic insights, technological expertise and industry experience.
                </p>
                <p>We focus on technologies that promise to reduce costs, streamline processes and speed time-to-market, Backed by our strong quality processes and rich experience managing global... </p>
            </div>
            <div class="col-md-4 col-sm-12">
                <h2>Useful Links</h2>
                <ul class="list-unstyled link-list">
                    <li><a ui-sref="about" href="#/about">About us</a><i class="fa fa-angle-right"></i></li>
                    <li><a ui-sref="portfolio" href="#/portfolio">Portfolio</a><i class="fa fa-angle-right"></i></li>
                    <li><a ui-sref="products" href="#/products">Latest jobs</a><i class="fa fa-angle-right"></i></li>
                    <li><a ui-sref="gallery" href="#/gallery">Gallery</a><i class="fa fa-angle-right"></i></li>
                    <li><a ui-sref="contact" href="#/contact">Contact us</a><i class="fa fa-angle-right"></i></li>
                </ul>
            </div>
            <div class="col-md-4 col-sm-12 map-img">
                <h2>Contact Us</h2>
                <address class="md-margin-bottom-40">
                    BlueDart <br>
                    Marthandam (K.K District) <br>
                    Tamil Nadu, IND <br>
                    Phone: +91 9159669599 <br>
                    Email: <a href="mailto:info@anybiz.com" class="">info@bluedart.in</a><br>
                    Web: <a href="smart-eye.html" class="">www.bluedart.in</a>
                </address>
            </div>
        </div>

        <div class="nav-box row clearfix">
            <div class="inner col-md-9 clearfix">
                <ul class="footer-nav clearfix">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Gallery</a></li>
                    <li><a href="#">Servies</a></li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </div>
            <div class="donate-link col-md-3"><a href="donate.html" class="btn btn-primary "><span class="btn-title">Donate Now</span></a></div>
        </div>
    </div>
</footer>
<div class="copy">
    <div class="container">
        <a href="#">2020 &copy; All Rights Reserved</a>
        <span>
                <a><i class="fab fa-github"></i></a>
                <a><i class="fab fa-twitter"></i></a>
                <a><i class="fab fa-facebook-f"></i></a>
            </span>
    </div>
</div>
<a id="back2Top" title="Back to top" href="#">&#10148;</a>
<!-- js files -->
<script src="/plugins/scroll-fixed/jquery-scrolltofixed-min.js"></script>
<script src="/plugins/slider/js/owl.carousel.min.js"></script>
<script src="/js/front2.js"></script>
@stack('scripts')
</body>

</html>
{{--<!DOCTYPE html>
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
                        <li><a href="/articles">ARTICLES</a></li>
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

    @yield('content')

    <!--footer start-->
    <footer class="footer-widget-section">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <aside class="footer-widget">
                        <div class="about-img"><img src="/images/footer-logo.png" alt=""></div>
                        <div class="about-content">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy
                            eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed voluptua. At vero eos et
                            accusam et justo duo dlores et ea rebum magna text ar koto din.
                        </div>
                        <div class="address">
                            <h4 class="">Contact Info</h4>
                            <p> Rivne, Ukraine</p>
                            <p> Phone: +123 456 78900</p>
                            <p>sv_dubov@ukr.net</p>
                        </div>
                    </aside>
                </div>
                <div class="col-md-4">
                    <aside class="footer-widget">
                        <h3 class="widget-title">Testimonials</h3>
                        <div id="myCarousel" class="carousel slide" data-ride="carousel">
                            <!--Indicator-->
                            <ol class="carousel-indicators">
                                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                <li data-target="#myCarousel" data-slide-to="1"></li>
                                <li data-target="#myCarousel" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner" role="listbox">
                                <div class="item active">
                                    <div class="single-review">
                                        <div class="review-text">
                                            <p>Lorem ipsum dolor sit amet, conssadipscing elitr, sed diam nonumy eirmod
                                                tempvidunt ut labore et dolore magna aliquyam erat,sed diam voluptua. At
                                                vero eos et accusam justo duo dolores et ea rebum.gubergren no sea takimata
                                                magna aliquyam eratma</p>
                                        </div>
                                        <div class="author-id">
                                            <img src="/images/author.png" alt="">
                                            <div class="author-text">
                                                <h4>Sophia</h4>
                                                <h4>Client, Tech</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="single-review">
                                        <div class="review-text">
                                            <p>Lorem ipsum dolor sit amet, conssadipscing elitr, sed diam nonumy eirmod
                                                tempvidunt ut labore et dolore magna aliquyam erat,sed diam voluptua. At
                                                vero eos et accusam justo duo dolores et ea rebum.gubergren no sea takimata
                                                magna aliquyam eratma</p>
                                        </div>
                                        <div class="author-id">
                                            <img src="/images/author.png" alt="">

                                            <div class="author-text">
                                                <h4>Sophia</h4>

                                                <h4>Client, Tech</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="single-review">
                                        <div class="review-text">
                                            <p>Lorem ipsum dolor sit amet, conssadipscing elitr, sed diam nonumy eirmod
                                                tempvidunt ut labore et dolore magna aliquyam erat,sed diam voluptua. At
                                                vero eos et accusam justo duo dolores et ea rebum.gubergren no sea takimata
                                                magna aliquyam eratma</p>
                                        </div>
                                        <div class="author-id">
                                            <img src="/images/author.png" alt="">

                                            <div class="author-text">
                                                <h4>Sophia</h4>

                                                <h4>Client, Tech</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </aside>
                </div>
                <div class="col-md-4">
                    <aside class="footer-widget">
                        <h3 class="widget-title">Custom Category Post</h3>
                        <div class="custom-post">
                            <div>
                                <a href="#"><img src="/images/footer-img.png" alt=""></a>
                            </div>
                            <div>
                                <a href="#">Home is peaceful Place</a>
                                <span class="p-date">February 15, 2016</span>
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
        <div class="footer-copy">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="text-center">&copy; 2020 <a href="#">Site, </a> Designed with <i class="fa fa-heart"></i> by <a href="#">Marlin</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- js files -->
    <script src="/js/front.js"></script>
    @stack('scripts')
</body>

</html>--}}
