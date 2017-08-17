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

    var eventFull = $(document.querySelectorAll('.event-full'));
    eventFull.each(function (index, el) {
        $(this).removeClass('flip-container');
    });

    $('.trailer-reveal').each(function (index, el) {
        var reveal = $(this);
        $(this).find('.close-button').on('click', function () {
            var iframe = reveal.find('iframe');
            reveal.find('iframe').remove();
            reveal.find('.responsive-embed').append(iframe);
        });
    });

});
jQuery(document).ready(function ($) {

    // Seats tooltip

    $('*[data-seat-row]').each(function (index, el) {
        var file = $(this).data('file');
        if ($(this).data('row-wheelchair')) {
            $(this).find(".seats").prepend('<div class="wheelchair-row"><i class="fa fa-wheelchair"></i></div>');
        };
        $(this).prepend('<div class="row-number show-for-small-only"><h3>Fila ' + file + '&nbsp;<i class="fa fa-chevron-down show-for-small-only"></i></h3></div>');
        $(this).find('*[data-seat]').each(function (index, el) {
            if ($(this).data('num') != undefined) {
                var $tooltip = $('<div />').attr('class', 'seat-tooltip').css('display', 'none');
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

                $(this).append($tooltip);
            }
        });
    });

    // Seats mobile navigation
    $('.seats-block-area').each(function (index, el) {
        $(this).find('.area-name').on('click', function (event) {
            $(this).siblings('.seats-row').toggleClass('expanded');
            if ($(this).find('i').hasClass('fa-chevron-down')) {
                $(this).find('i').removeClass('fa-chevron-down').addClass('fa-chevron-up');
            } else {
                $(this).find('i').removeClass('fa-chevron-up').addClass('fa-chevron-down');
            }
        });
    });
    $('.seats-row').each(function (index, el) {
        $(this).find('.row-number').on('click', function (event) {
            $(this).siblings('.seats').toggleClass('expanded');
            if ($(this).find('i').hasClass('fa-chevron-down')) {
                $(this).find('i').removeClass('fa-chevron-down').addClass('fa-chevron-up');
            } else {
                $(this).find('i').removeClass('fa-chevron-up').addClass('fa-chevron-down');
            }
        });
    });
})