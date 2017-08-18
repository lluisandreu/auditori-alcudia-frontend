jQuery(document).ready(function ($) {

    // Seats tooltip

    $('*[data-seat-row]').each(function (index, el) {
        var file = $(this).data('file');
        if ($(this).data('row-wheelchair')) {
            $(this).prepend('<div class="wheelchair-row"><i class="fa fa-wheelchair"></i></div>');
        };
        $(this).find('*[data-seat]').each(function (index, el) {
            $(this).on('click', function (event) {
                event.preventDefault();
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
                    $tooltip.fadeIn(200);
                }, function () {
                    $tooltip.fadeOut(200);
                });

                $(this).append($tooltip);
            }
        });
    });

    // Seat selector


})