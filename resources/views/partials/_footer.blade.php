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
    @yield('assets')
</head>
<!--footer start-->
<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-12">
                <h2>About Us</h2>
                <p>
                    Smart Eye is a leading provider of information technology, consulting, and business process
                    services. Our dedicated employees offer strategic insights, technological expertise and industry
                    experience.
                </p>
                <p>We focus on technologies that promise to reduce costs, streamline processes and speed time-to-market,
                    Backed by our strong quality processes and rich experience managing global... </p>
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

{{--@yield('content')--}}

<!-- js files -->
<script src="/js/front2.js"></script>
@stack('scripts')
</body>

</html>
