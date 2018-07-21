/**
* ---------------------------------------------------------------------------
Template Name: Educational HTML Responsive Template
Template URL: http://stormrecoveryservices.com/demo/
Author: princ-imran
Version: 1.0
* --------------------------------------------------------------------------- 
*/

(function ($) {
    "use strict";

    jQuery(document).ready(function ($) {


        $(".embed-responsive iframe").addClass("embed-responsive-item");
        $(".carousel-inner .item:first-child").addClass("active");

        $('[data-toggle="tooltip"]').tooltip();

/*---------------------------------------------------
            Owlcarousel SLIDER
---------------------------------------------------*/
        
        $(".slider").owlCarousel({
            items: 1,
            autoplay: true,
            loop: true,
            smartSpeed: 1000,
            nav: true,
            navText: ['<i class="fa fa-angle-double-left"></i>', '<i class="fa fa-angle-double-right"></i>'],
            mouseDrag: false,
            touchDrag: false
        });

        $(".slider").on('translate.owl.carousel', function () {
            $('.slider-content h3').removeClass('slideInDown animated').hide();
            $('.slider-content h2').removeClass('slideInLeft animated').hide();
            $('.slider-content p').removeClass('slideInLeft animated').hide();
            $('.slider-content a').removeClass('slideInLeft animated').hide();
        });
        $(".slider").on('translated.owl.carousel', function () {
            $('.owl-item.active .slider-content h3').addClass('slideInDown animated').show();
            $('.owl-item.active .slider-content h2').addClass('slideInLeft animated').show();
            $('.owl-item.active .slider-content p').addClass('slideInLeft animated').show();
            $('.owl-item.active .slider-content a').addClass('slideInLeft animated').show();
        });



        $(".testi-slider").owlCarousel({
            items: 2,
            autoplay: true,
            loop: true,
            smartSpeed: 1000,
            margin: 30,
            responsive: {
                0: {
                    items: 1
                },
                480: {
                    items: 1
                },
                767: {
                    items: 1
                },
                768: {
                    items: 2
                },
            }
        });


/*---------------------------------------------------
            Slicknav
---------------------------------------------------*/
        
        $('#nav').slicknav({
            prependTo: ".responsive-menu-wrap"
        });

/*---------------------------------------------------
            Venobox 
---------------------------------------------------*/
          
        $('.venobox').venobox({
            spinner: 'wave'
        });

/*---------------------------------------------------
            This code is for Isotop mesonary
---------------------------------------------------*/
        
        var $portfolio = $('.portfolio');
        $portfolio.isotope({
            itemSelector: '.col-md-4',
            layoutMode: 'masonry',
            filter: '*',
            percentPosition: true,
            animationOptions: {
                duration: 750,
                easing: 'linear',
                queue: false,
            }
        });

        $('.portfolio-menu li').on('click', function () {
            $('.portfolio-menu li').removeClass('active');
            $(this).addClass('active');
            var selector = $(this).attr('data-filter');
            $portfolio.isotope({
                filter: selector,
            });
        }); 
        
/*---------------------------------------------------
            ProgressBar Jquery
---------------------------------------------------*/

        $('#bar1').barfiller();
        $('#bar2').barfiller();
        $('#bar3').barfiller();
        $('#bar4').barfiller();
        $('#bar5').barfiller();

/*---------------------------------------------------
            Counter Jquery
---------------------------------------------------*/

        $('.counter').counterUp({
            delay: 10,
            time: 1000
        });


    });

    jQuery(window).load(function () {


    });


}(jQuery));