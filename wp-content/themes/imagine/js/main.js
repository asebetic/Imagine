$(document).ready(function() {
    
    var menu = "close";

    $('.menu-btn').click(function() {

        if(menu == "close") {
            $('.site-nav').css('-webkit-transform', 'translate(0, 0)');
            $('.site-nav').css('-moz-transform', 'translate(0, 0)');
            $('.site-nav').css('transform', 'translate(0, 0)');
            menu = "open";
        }

        else {
            $('.site-nav').css('-webkit-transform', 'translate(0, -100%)');
            $('.site-nav').css('-moz-transform', 'translate(0, -100%)');
            $('.site-nav').css('transform', 'translate(0, -100%)');
            menu = "close";
        }
    });

    var btt = $('.back-to-top');

    btt.on('click', function(event) {
        event.preventDefault();
        $('html, body').animate({
            scrollTop: 0
        }, 300);
    });

});