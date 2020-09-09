(function($) {
    "use strict";

    jQuery(document).ready(function($) {


        $(".embed-responsive iframe").addClass("embed-responsive-item");
        $(".carousel-inner .item:first-child").addClass("active");

        $('[data-toggle="tooltip"]').tooltip();


        $('#mobile-menu-active').meanmenu({
            meanScreenWidth: "767",
            meanMenuContainer: '.menu-prepent',
        });



        $('.menu-open').click(function() {

            $('.site-main-menu').addClass('activee');


        });

        $('.menu-close').click(function() {

            $('.site-main-menu').removeClass('activee');


        });







        $(".about-slider").owlCarousel({
            items: 5,
            nav: false,
            dot: false,
            loop: true,
            margin: 20,
            autoplay: false,
            autoplayTimeout: 3000,
            smartSpeed: 1000,
            responsiveClass: true,
            responsive: {
                0: {
                    items: 1,

                },
                768: {
                    items: 3,

                },
                1000: {
                    items: 3,

                }
            }


        });

        $(".team-sdlier-wrp").owlCarousel({
            items: 5,
            nav: false,
            dot: false,
            loop: true,
            margin: 30,
            autoplay: true,
            autoplayTimeout: 3000,
            smartSpeed: 1000,
            responsiveClass: true,
            stagePadding: 100,
            responsive: {
                0: {
                    items: 1,
                    stagePadding: 40,

                },
                768: {
                    items: 2,

                },
                1000: {
                    items: 4,

                }
            }


        });
        $(".testimonial-item-wrp").owlCarousel({
            items: 5,
            nav: false,
            dot: true,
            loop: true,
            margin: 30,
            autoplay: false,
            autoplayTimeout: 3000,
            smartSpeed: 1000,
            responsiveClass: true,
            responsive: {
                0: {
                    items: 1,

                },
                768: {
                    items: 1,

                },
                1000: {
                    items: 1,

                }
            }


        });




    });


    $(window).on('scroll', function() {
        var scroll = $(window).scrollTop();
        if (scroll < 245) {
            $(".header-bar-section").removeClass("scroll-header");
        } else {
            $(".header-bar-section").addClass("scroll-header");
        }
    });



}(jQuery));