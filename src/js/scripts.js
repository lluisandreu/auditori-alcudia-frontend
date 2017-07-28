jQuery(document).ready(function ($) {
    $(document).foundation();

    // Owl carousels
    var homeCarousel = $('.hero-slideshow');
    homeCarousel.owlCarousel({
        loop: true,
        items: 1,
        dots: true
    });

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