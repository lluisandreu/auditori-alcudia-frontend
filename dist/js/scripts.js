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
            autoHeight: true
        });
    }

    if ($('.organisation-logos-carousel').length) {
        var eventTrailer = $('.organisation-logos-carousel');
        eventTrailer.owlCarousel({
            loop: true,
            items: 1,
            dots: true,
            autoplay: true,
            autoplayTimeout: 4000,
            autoplayHoverPause: true,
            center: true,
            autoHeight: true
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


    var select_i = 0;
    $('.subscription-select-events-block').find('.item:not(.event-full)').each(function (index, el) {
        $(this).on('click', function (event) {
            event.preventDefault();
            if ($(this).hasClass('selected')) {
                $(this).removeClass('selected');
                $(this).find('.button-deselect').removeClass('show');
                --select_i;
            } else {
                $(this).toggleClass('selected');
                $(this).find('.button-deselect').addClass('show');
                ++select_i;
            }
            console.log(select_i);
            if (select_i > 0) {
                $('.sticky-subscription-select').addClass('selected');
                if (select_i == 1) {
                    $('#sticky-subscription-select-tickets').text(select_i + " espectacle");
                } else {
                    $('#sticky-subscription-select-tickets').text(select_i + " espectacles");
                }

            } else {
                $('.sticky-subscription-select').removeClass('selected');
            }
        });
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
jQuery(document).ready(function ($) {

    // Seats tooltip

    $('*[data-seat-row]').each(function (index, el) {
        var file = $(this).data('file');
        if ($(this).data('row-wheelchair')) {
            $(this).prepend('<div class="wheelchair-row"><i class="fa fa-wheelchair"></i></div>');
        };
        $(this).find('*[data-seat]').each(function (index, el) {
            $(this).on('click tap', function (event) {
                event.preventDefault();
                if (!$(this).hasClass('seat-full')) {
                    $(this).toggleClass('selected');
                }
                $('#seat-map-tickets-block').addClass('expanded');
                $('.seat-map-tickets-toggle').addClass('active').on('click tab', function (event) {
                    $(this).data('toggle', '');
                    $('.seat-tooltip').removeClass('show');
                    event.preventDefault();
                    var target = $('#seat-map-tickets-block');
                    $('html, body').animate({
                        scrollTop: target.offset().top
                    }, 1000);
                    window.setTimeout(function () {
                        $('.seat-map-tickets-toggle').removeClass('active');
                    }, 800);
                });;
            });
            if ($(this).data('num') != undefined) {
                var $tooltip = $('<div />').attr('class', 'seat-tooltip');
                var num = $(this).data('num');
                if ($(this).data('full')) {
                    $(this).addClass('seat-full')
                    $tooltip.addClass('seat-full').append('Ocupada');
                } else {
                    $tooltip.append('Fila ' + '<strong>' + file + '</strong> N° <strong>' + num + '</strong>');
                }
                if ($(this).data('wheelchair')) {
                    $tooltip.prepend('<i class="fa fa-wheelchair"></i>&nbsp;');
                }
                $(this).hover(function () {
                    $tooltip.addClass('show');
                }, function () {
                    $tooltip.removeClass('show');
                });

                $tooltip.on('mouseover vmouseover', function (event) {
                    $(this).removeClass('show');
                });


                /// Touch events
                $(this).on('tap', function (event) {
                    event.preventDefault();
                    $tooltip.toggleClass('show');
                }).on('vmousemove', function (event) {
                    $tooltip.removeClass('show');
                });

                $tooltip.on('vmouseover', function (event) {
                    $(this).removeClass('show');
                });

                $(this).append($tooltip);
            }
        });
    });

    // Seat selector


})