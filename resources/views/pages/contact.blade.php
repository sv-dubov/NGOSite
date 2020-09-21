<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>NGO Website</title>
    <link rel="shortcut icon" href="/images/fav.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@400;500&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="/images/fav.jpg">
    <link rel="stylesheet" type="text/css" href="/css/front2.css"/>
    <style>
        .reload {
            font-family: Lucida Sans Unicode
        }
    </style>
</head>
<body>
<!--navbar start-->
@include('partials._navbar')
<!--main content start-->
<div class="main-content">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div style="margin-top:0px;" class="row no-margin">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2531.44679028099!2d26.256706315466623!3d50.61881638310027!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x472f134609e1331f%3A0x4b4b27390f364d81!2z0JrQvtC80L8n0Y7RgtC10YDQvdCwINCQ0LrQsNC00LXQvNGW0Y8g0KjQkNCT!5e0!3m2!1suk!2sua!4v1598616301039!5m2!1suk!2sua" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>
                <div class="row contact-rooo no-margin">
                    <div style="padding:20px" class="col-sm-7">
                        <h2>Send Message</h2><br>
                        @include('admin.errors')
                        <br>
                        <form class="form-horizontal contact-form" role="form" method="post" action="/contact">
                            {{csrf_field()}}
                            <div class="form-group">
                                <div class="col-sm-3"><label>Enter Name</label><span class="asterisk_input"></span></div>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Name"
                                           value="{{old('name')}}">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-3"><label>E-mail Address</label><span class="asterisk_input"></span></div>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" id="email" name="email"
                                           placeholder="E-mail" value="{{old('email')}}">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-3"><label>Mobile Phone</label><span> </span></div>
                                <div class="col-md-8">
                                    <input type="text" class="phone form-control" id="phone" name="phone" placeholder="Phone">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-3"><label>Enter Message</label><span class="asterisk_input"></span></div>
                                <div class="col-md-8">
                                        <textarea rows="5" class="form-control" id="message" name="message"
                                                  placeholder="Enter Your Message"></textarea>
                                </div>
                            </div>
                            <div class="form-group mt-4 mb-4">
                                <div class="col-md-8">
                                    <div class="captcha">
                                        <span>{!! captcha_img() !!}</span>
                                        <button type="button" class="btn btn-danger" class="reload" id="reload">
                                            &#x21bb;
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-8">
                                    <input id="captcha" type="text" class="form-control" placeholder="Enter Captcha" name="captcha">
                                </div>
                            </div>
                            <div style="margin-top:10px;" class="row">
                                <div style="padding-top:10px;" class="col-sm-3"><label></label></div>
                                <div class="col-sm-8">
                                    <button type="submit" class="btn btn-primary btn-sm">Send Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-sm-5">
                        <div style="margin:50px" class="serv">
                            <h2 style="margin-top:10px;">Our Address</h2>
                            Soborna Street, <br>
                            33, Building<br>
                            Rivne, Ukraine<br>
                            Phone: +38 0501017689<br>
                            E-mail: superngo@ukr.net<br>
                        </div>
                    </div>
                </div>
                </br>
                <!--end leave comment-->
            </div>
        </div>
    </div>
</div>
<!-- end main content-->
<!--footer start-->
@include('partials._footer')
<!-- js files -->
<script src="/js/front2.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/3.3.4/jquery.inputmask.bundle.min.js"></script>
<script src="/js/phone-mask.js"></script>
<script type="text/javascript">
    $('#reload').click(function () {
        $.ajax({
            type: 'GET',
            url: 'reload-captcha',
            success: function (data) {
                $(".captcha span").html(data.captcha);
            }
        });
    });
</script>
</body>
</html>
