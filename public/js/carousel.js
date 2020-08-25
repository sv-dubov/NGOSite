$(document).ready(function () {
    $(".owl-carousel").owlCarousel({
        loop: true,
        margin: 5,
        nav: true,
        autoplay: true,
        dots: true,
        autoplayTimeout: 5000,
        navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
        responsive:{
            0:{
                items:1
            },
            768:{
                items:2
            },
            1180:{
                items:3
            }
        }
    })
});
