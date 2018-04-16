$(document).ready(function() {

    $('.menu-icon').click(function() {
        var nav = $('.js--main-nav');
        var icon = $('#nav-icon');

        nav.slideDown(200);
        icon.removeClass('menu-icon');
        icon.addClass('menu-icon-close');

    });

    $('.menu-icon-close').click(function() {
        var nav = $('.js--main-nav');
        var icon = $('#nav-icon');

        nav.slideUp(200);
        icon.removeClass('menu-icon-close');
        icon.addClass('menu-icon');
    });

});