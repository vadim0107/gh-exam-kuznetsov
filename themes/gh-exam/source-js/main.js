jQuery(document).ready(function ($) {

    $('.link-down').on('click', 'a', function (event) {
        event.preventDefault();
        var id = $(this).attr('href'),
            top = $(id).offset().top;
        $('body,html').animate({scrollTop: top}, 800);
    });


    $('.clients-slider').owlCarousel({
        loop: true,
        margin: 85,
        dots: false,
        autoplay:true,
        responsiveClass: true,
        responsive: {
            0: {
                items: 1
            },
            450: {
                items: 2
            },
            900: {
                items: 4
            }
        }
    });

    // init Isotope
    var $grid = $('.grid').isotope({
        // options
    });
// filter items on button click
    $('.filter-button-group').on( 'click', 'button', function() {
        var filterValue = $(this).attr('data-filter');
        $grid.isotope({ filter: filterValue });
    });
});