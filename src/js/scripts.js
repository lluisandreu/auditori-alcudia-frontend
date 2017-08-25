jQuery(document).ready(function ($) {
    $(document).foundation();

    // Owl carousels
    if ($('.hero-slideshow').length) {
        var homeCarousel = $('.hero-slideshow');
        homeCarousel.owlCarousel({
            loop: true,
            items: 1,
            dots: true,
            autoplay: true,
            autoplayTimeout: 4000,
            autoplayHoverPause: true,
            autoHeight: true
        });
    }
    if ($('.featured-carousel').length) {
        var featuredCarousel = $('.featured-carousel');
        featuredCarousel.owlCarousel({
            responsiveClass: true,
            responsive: {
                0: {
                    items: 1,
                    dots: true,
                    stagePadding: 50,
                    loop: true,
                    margin: 20,
                },
                800: {
                    items: 2,
                    dots: true,
                    stagePadding: 50,
                    loop: true,
                    margin: 20,
                },
                1024: {
                    items: 4,
                    stagePadding: 0,
                    margin: 0,
                }
            }
        });
    }

    if ($('.event-trailer-carousel').length) {
        var eventTrailer = $('.event-trailer-carousel');
        eventTrailer.owlCarousel({
            loop: true,
            items: 1,
            dots: true,
            autoplay: true,
            autoplayTimeout: 4000,
            autoplayHoverPause: true,
            center: true,
        });
    }

    // Small menu toggle
    $('.toggle-full').on('click', function (event) {
        event.preventDefault();
        $(this).parents('.teaser').siblings('.full').toggleClass('open');
        var fa = $(this).find('.fa');
        if (fa.hasClass('fa-chevron-down')) {
            fa.addClass('fa-chevron-up').removeClass('fa-chevron-down');
        } else {
            fa.addClass('fa-chevron-down').removeClass('fa-chevron-up');
        }
    });

    // Disable event info when is full event

    $('.trailer-reveal').each(function (index, el) {
        var reveal = $(this);
        $(this).find('.close-button').on('click', function () {
            var iframe = reveal.find('iframe');
            reveal.find('iframe').remove();
            reveal.find('.responsive-embed').append(iframe);
        });
    });

    // Subscriptions select

    $('.subscription-select-events-block').find('.item:not(.event-full)').on('click', function (event) {
        event.preventDefault();
        $(this).toggleClass('selected');
        $(this).find('.button-deselect').toggleClass('show');

    });

    /// Lightbox 

    lightbox.option({
        'albumLabel': "Imatge %1 de %2",
        'wrapAround': true
    });

    /// Others

    $('a[data-open]').on('click', function (event) {
        event.preventDefault();
        /* Act on the event */
    });

});