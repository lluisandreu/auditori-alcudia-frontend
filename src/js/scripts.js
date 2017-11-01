const APP_REMOTE_IMG_FOLDER = 'http://gestion.auditorialcudia.net/img/';

function createCookie(name, value, days) { 
    var expires = "";
    if (days) {
        var date = new Date();
        date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
        expires = "; expires=" + date.toUTCString();
    }
    document.cookie = name + "=" + value + expires + "; path=/";
}

function readCookie(name) { 
    var nameEQ = name + "=";
    var ca = document.cookie.split(';');
    for (var i = 0; i < ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') c = c.substring(1, c.length);
        if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length, c.length);
    }
    return null;
}

function deleteCookie(name) {
    document.cookie = name + '=; Path=/; expires=Thu, 01 Jan 1970 00:00:01 GMT;';
};

function toggleFull(element) {

}


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
            autoplayTimeout: 8000,
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

   // Filter toggle
   $('.filter-toggle').on('click', function(event) {
       var icon = $(this).find('.fa');
       if (icon.hasClass('fa-chevron-down')) {
            icon.removeClass('fa-chevron-down').addClass('fa-chevron-up');
       } else {
            icon.removeClass('fa-chevron-up').addClass('fa-chevron-down');
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


    // Envío email NWS
    $("#home-email-form").on('submit', function (e) {
        e.preventDefault();
        $.ajax({
            url: 'workers/class.user.php',
            data: "o=1&m=" + $('#nws_mai').val(),
            dataType: 'text',
            type: 'post',
            success: function (data) {
                //alert(data);
            },
            error: function (xhr, status, error) {
                switch (xhr.status) {
                case 404:
                    window.location = '../404.php';
                    break;
                case 500:
                    window.location = '../500.php';
                    break;
                }
            }

        });
    });

    // Registro usuario
    $("#register-form").on('submit', function (e) {
        e.preventDefault();
        var md = new KJUR.crypto.MessageDigest({
            "alg": "sha512",
            "prov": "cryptojs"
        });
        md.updateString($('#password').val());
        var hashValueHex = md.digest();
        $.ajax({
            url: 'workers/class.user.php',
            data: "o=2&u=" + $('#email').val() + "&p=" + hashValueHex + "&r=" + $("#remember-session").is(":checked"),
            dataType: 'text',
            type: 'post',
            success: function (d) {
                if (d !== 0) {
                    $("#dataok").show();
                    createCookie("auth", d, 30);
                    window.location = '../account.php';
                } else {
                    deleteCookie("auth");
                }
            },
            error: function (xhr, status, error) {
                switch (xhr.status) {
                case 404:
                    window.location = '../404.php';
                    break;
                case 500:
                    window.location = '../500.php';
                    break;
                }
            }

        });
    });

    // Logon usuario
    $("#login-form").on('submit', function (e) {
        e.preventDefault();
        var md = new KJUR.crypto.MessageDigest({
            "alg": "sha512",
            "prov": "cryptojs"
        });
        md.updateString($('#l_password').val());
        var hashValueHex = md.digest();
        $.ajax({
            url: 'workers/class.user.php',
            data: "o=3&u=" + $('#email').val() + "&p=" + hashValueHex + "&r=" + $("#remember-session").is(":checked"),
            dataType: 'text',
            type: 'post',
            success: function (d) {
                if (d === '0') {
                    $("#login-form input").removeClass().addClass("error");
                    $("#wrongdata").show();
                } else {
                    $("#wrongdata").hide();
                    $("#login-form input").removeClass();
                    $("#dataok").show();
                    createCookie("auth", d, 30);
                    window.location = '../account.php';
                }
            },
            error: function (xhr, status, error) {
                switch (xhr.status) {
                case 404:
                    window.location = '../404.php';
                    break;
                case 500:
                    window.location = '../500.php';
                    break;
                }
            }

        });
    });

    $("#logoff").on('click', function () {
        $('#f_o').submit();
    });

    $("#password, #validate-password").on('keyup', function () {
        if ($("#validate-password").val() != $("#password").val()) {
            $("input[type='password']").removeClass().addClass("error");
            $("#wrongdata").show();
        } else {
            $("input[type='password']").removeClass();
            $("#wrongdata").hide();
        }
    });


    $('.solonum').on('input', function () {
        this.value = this.value.replace(/[^0-9\,]/g, '');
    });

});

$(window).on('load', function() {
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
});