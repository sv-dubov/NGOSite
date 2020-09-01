<div class="slider">
    <!-- Set up your HTML -->
    <div class="owl-carousel">
        @foreach($slider as $slide)
            <div class="item">
                <div class="slider-img"><img src="/uploads/slider/{{ $slide->image }}" alt=""></div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-offset-2 col-lg-8 col-md-offset-2 col-md-8 col-sm-12 col-xs-12">
                            <div class="animated bounceInDown slider-captions">
                                <p class="slider-text hidden-xs">{{ $slide->title }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
