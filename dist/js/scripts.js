jQuery(document).ready(function ($) {
    $(document).foundation();

    // Owl carousels
    var homeCarousel = $('.hero-slideshow');
    homeCarousel.owlCarousel({
        loop: true,
        items: 1,
        dots: true
    });
});