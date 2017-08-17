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