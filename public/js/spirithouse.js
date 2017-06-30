
// Smooth scrolling of Nav buttons
$(document).ready(function () {
    $(".section > .row > ul > li > a").bind('click',function(event){
        var anch = $(this);
        var posFix = 0;

        $('html, body').stop().animate({
            scrollTop: $(anch.attr('href')).offset().top - $("#fixedtop .container").height() + posFix
        }, 500,'swing');

        event.preventDefault();
    });
});
