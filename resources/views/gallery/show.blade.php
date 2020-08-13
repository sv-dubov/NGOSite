<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>NGO Website</title>
    <link rel="shortcut icon" href="/images/fav.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@400;500&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="/images/fav.jpg">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
    <link rel="stylesheet" href="/css/gallery.css">
</head>
<body>
<!--navbar start-->
@include('partials._navbar')
<!-- Page Content -->
<div class="container page-top">
    <a class="btn btn-primary" href="{{route('gallery.index')}}">Back to Albums</a>
    @if(count($album->photos) > 0)
        <?php
        $colcount = count($album->photos);
        $i = 1;
        ?>
        <div class="row">
            <div class="col-md-12">
                <article class="post">
                    <div class="post-content">
                        </br>
                        <div class="entry-content">
                            {!!$album->description!!}
                        </div>
                        </br>
                    </div>
                </article>
            </div>
        </div>
        <div class="row">
            @foreach($album->photos as $photo)
                <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                    <h4>{{$photo->title}}</h4>
                    <a class="fancybox" href="/uploads/albums/photos/{{$photo->album_id}}/{{$photo->photo}}" rel="ligthbox">
                        <img class="zoom img-fluid"
                             src="/uploads/albums/photos/{{$photo->album_id}}/{{$photo->photo}}" alt="{{$photo->title}}">
                    </a>
                    <h6>{{$photo->description}}</h6>
                </div>
            @endforeach
        </div>
    @else
        <p>No Photos To Display</p>
    @endif
</div>
<!--footer start-->
@include('partials._footer')
<!-- js files -->
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
<script src="/js/gallery.js"></script>
</body>
</html>
