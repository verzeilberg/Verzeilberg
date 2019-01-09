/*!
 * Start Bootstrap - Stylish Portfolio (http://startbootstrap.com/)
 * Copyright 2013-2017 Start Bootstrap
 * Licensed under MIT (https://github.com/BlackrockDigital/startbootstrap/blob/gh-pages/LICENSE)
 */

(function ($) {
    "use strict"; // Start of use strict

    // Closes the sidebar menu
    $("#menu-close").click(function (e) {
        e.preventDefault();
        $("#sidebar-wrapper").toggleClass("active");
    });

    // Opens the sidebar menu
    $("#menu-toggle").click(function (e) {
        e.preventDefault();
        $("#sidebar-wrapper").toggleClass("active");
    });
    //Opens/Closes submenu
    $("a.dropdown-toggle").click(function (e) {
        e.preventDefault();
        $(this).siblings("ul.dropdown").slideToggle();
    });

    //Button to add smilies tot extfield 
    $(".buttonAddEmoticon").click(function () {
        var imgLink = $(this).data('imglink');
        $(this).siblings('div').children(".answerComment_text").append('<img src="' + imgLink + '"/>');
    });

//Open answer form
    $(".answerComment").click(function () {
        $(this).next('form').toggle();
    })

//Submit anser comment form
    $("form.answerForm").submit(function (event) {
        var comment = $(this).children('.answerComment_wrapper').children('.answerComment_text').html();
        $(this).children('input[name=comment]').val(comment);
    });

    // Smooth scrolling using jQuery easing
    $('a.js-scroll-trigger[href*="#"]:not([href="#"])').click(function () {
        if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
            if (target.length) {
                $('html, body').animate({
                    scrollTop: target.offset().top
                }, 1000, "easeInOutExpo");
                return false;
            }
        }
    });

    // Closes responsive menu when a scroll trigger link is clicked
    $('.js-scroll-trigger').click(function () {
        $("#sidebar-wrapper").removeClass("active");
    });

    //#to-top button appears after scrolling
    var fixed = false;
    $(document).scroll(function () {
        if ($(this).scrollTop() > 250) {
            if (!fixed) {
                fixed = true;
                $('#to-top').show("slow", function () {
                    $('#to-top').css({
                        position: 'fixed',
                        display: 'block'
                    });
                });
            }
        } else {
            if (fixed) {
                fixed = false;
                $('#to-top').hide("slow", function () {
                    $('#to-top').css({
                        display: 'none'
                    });
                });
            }
        }
    });

})(jQuery); // End of use strict

