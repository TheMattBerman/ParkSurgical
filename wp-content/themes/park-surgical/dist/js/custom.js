jQuery(function ($) {

    var $document = jQuery(document),
            $topMenu = $('.top-menu'),
            className = 'fixed';

    $document.scroll(function () {
        $topMenu.toggleClass(className, $document.scrollTop() >= 50);
    });


    $document.ready(function () {
        $topMenu.toggleClass(className, $document.scrollTop() >= 50);
    });


// Select all links with hashes
    $('a[href*="#"]')
            // Remove links that don't actually link to anything
            .not('[href="#"]')
            .not('[href="#0"]')
            .click(function (event) {
                // On-page links
                if (
                        location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '')
                        &&
                        location.hostname == this.hostname
                        ) {
                    // Figure out element to scroll to
                    var target = $(this.hash);
                    target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                    // Does a scroll target exist?
                    if (target.length) {
                        // Only prevent default if animation is actually gonna happen
                        event.preventDefault();
                        $('html, body').animate({
                            scrollTop: target.offset().top
                        }, 1000, function () {
                            // Callback after animation
                            // Must change focus!
                            var $target = $(target);
                            $target.focus();
                            if ($target.is(":focus")) { // Checking if the target was focused
                                return false;
                            } else {
                                $target.attr('tabindex', '-1'); // Adding tabindex for elements not focusable
                                $target.focus(); // Set focus again
                            }
                            ;
                        });
                    }
                }
            });






    if (jQuery('.single-slider').length >= 1) {

        jQuery('.single-slider').slick({
            arrows: true,
            prevArrow: '<button type="button" class="slick-prev"></button>',
            nextArrow: '<button type="button" class="slick-next"></button>',
            dots: true,
            infinite: true,
            autoplay: false,
            draggable: true,
            focusOnSelect: true,
            speed: 700,
            autoplaySpeed: 8000,
            adaptiveHeight: false,
            centerMode: true,
            centerPadding: '0',
            slidesToShow: 1,
            slidesToScroll: 1,
            fade: false,
            cssEase: 'ease-in-out',
//            responsive: [
//                {
//                    breakpoint: 990,
//                    settings: {
//                        slidesToShow: 1,
//                        centerPadding: '0',
//                    }
//                },
//                {
//                    breakpoint: 767,
//                    settings: {
//                        slidesToShow: 1,
//                        centerPadding: '0',
//                    }
//                }
//            ]
        });
    }




});

