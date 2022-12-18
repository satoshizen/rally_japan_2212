$(function() {
    $(window).scroll(function() {
        var scroll = $(this).scrollTop();
        // console.log(scroll);

        if (scroll > 50) {
            $('.header-inner').addClass('scrolled')
        } else {
            $('.header-inner').removeClass('scrolled');
        }
    });
});