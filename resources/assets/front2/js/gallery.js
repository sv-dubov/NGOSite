var $j = jQuery.noConflict();

$j(document).ready(function () {
    $j(".fancybox").fancybox({
        openEffect: "none",
        closeEffect: "none"
    });

    $j(".zoom").hover(function () {
        $j(this).addClass('transition');
    }, function () {
        $j(this).removeClass('transition');
    });
});
