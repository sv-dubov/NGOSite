<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- favicon icon -->
    <title>NGO Site Gallery</title>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <!-- HTML5 shim and Respond.js IE9 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="assets/js/html5shiv.js"></script>
    <script src="assets/js/respond.js"></script>
    <![endif]-->
</head>

<body>
<!--navbar start-->
@include('partials._navbar')
<!--content start-->
<div class="container">
    <a class="btn btn-default" href="{{route('gallery.index')}}">Back to Albums</a>
    @if(count($album->photos) > 0)
        <?php
        $colcount = count($album->photos);
        $i = 1;
        ?>
        <div class="row">
            <div class="col-lg-12">
                @foreach($album->photos as $photo)
                    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                        <h4 class="page-header">{{$photo->title}}</h4>
                        <a class="thumbnail" href="#" data-image-id="{{$photo->id}}" data-toggle="modal"
                           data-title="{{$photo->title}}" data-caption="{!!$photo->description!!}"
                           data-image="/uploads/albums/photos/{{$photo->album_id}}/{{$photo->photo}}"
                           data-target="#image-gallery">
                            <img class="img-responsive"
                                 src="/uploads/albums/photos/{{$photo->album_id}}/{{$photo->photo}}"
                                 alt="{{$photo->title}}">
                        </a>
                    </div>
                @endforeach
            </div>
            <div class="modal fade" id="image-gallery" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                 aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal"><span
                                    aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                            <h4 class="modal-title" id="image-gallery-title"></h4>
                        </div>
                        <div class="modal-body">
                            <img id="image-gallery-image" class="img-responsive" src="">
                        </div>
                        <div class="modal-footer">
                            <div class="col-md-2">
                                <button type="button" class="btn btn-primary" id="show-previous-image">Previous</button>
                            </div>
                            <div class="col-md-8 text-justify" id="image-gallery-caption">
                                This text will be overwritten by jQuery
                            </div>
                            <div class="col-md-2">
                                <button type="button" id="show-next-image" class="btn btn-default">Next</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @else
        <p>No Photos To Display</p>
    @endif
</div>
<!--footer start-->
@include('partials._footer')
<!-- js files -->
<script type="text/javascript">
    $(document).ready(function () {
        loadGallery(true, 'a.thumbnail');

        //This function disables buttons when needed
        function disableButtons(counter_max, counter_current) {
            $('#show-previous-image, #show-next-image').show();
            if (counter_max == counter_current) {
                $('#show-next-image').hide();
            } else if (counter_current == 1) {
                $('#show-previous-image').hide();
            }
        }

        /**
         *
         * @param setIDs        Sets IDs when DOM is loaded. If using a PHP counter, set to false.
         * @param setClickAttr  Sets the attribute for the click handler.
         */
        function loadGallery(setIDs, setClickAttr) {
            var current_image,
                selector,
                counter = 0;
            $('#show-next-image, #show-previous-image').click(function () {
                if ($(this).attr('id') == 'show-previous-image') {
                    current_image--;
                } else {
                    current_image++;
                }
                selector = $('[data-image-id="' + current_image + '"]');
                updateGallery(selector);
            });

            function updateGallery(selector) {
                var $sel = selector;
                current_image = $sel.data('image-id');
                $('#image-gallery-caption').text($sel.data('caption'));
                $('#image-gallery-title').text($sel.data('title'));
                $('#image-gallery-image').attr('src', $sel.data('image'));
                disableButtons(counter, $sel.data('image-id'));
            }

            if (setIDs == true) {
                $('[data-image-id]').each(function () {
                    counter++;
                    $(this).attr('data-image-id', counter);
                });
            }
            $(setClickAttr).on('click', function () {
                updateGallery($(this));
            });
        }
    });
</script>

</body>

</html>
