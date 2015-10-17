$(document).ready(function() {
    
    var menu = "close";

    $('.menu-btn').click(function() {

        if(menu == "close") {
            $('.site-nav').css('-webkit-transform', 'translate(0, 0');
            $('.site-nav').css('-moz-transform', 'translate(0, 0');
            $('.site-nav').css('transform', 'translate(0, 0');
            menu = "open";
        }
    });
    
    $('.close-btn').click(function() {

        if(menu == "open") {
            $('.site-nav').css('-webkit-transform', 'translate(0, -100%');
            $('.site-nav').css('-moz-transform', 'translate(0, -100%');
            $('.site-nav').css('transform', 'translate(0, -100%');
            menu = "close";
        }
    });

    var btt = $('.back-to-top');

    btt.on('click', function() {
        $('html, body').animate({
            scrollTop: 0
        }, 300);
    });

    var amountScrolled = 200;

    $(window).scroll(function() {
        if ( $(window).scrollTop() > amountScrolled ) {
            $('.back-to-top').fadeIn(300);
        } else {
            $('.back-to-top').fadeOut(300);
        }
    });
});