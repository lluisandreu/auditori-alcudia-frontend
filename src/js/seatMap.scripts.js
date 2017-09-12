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