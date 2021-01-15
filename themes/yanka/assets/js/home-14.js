$(window).on('load scroll', function() {
    if ( $(window).scrollTop() >= 450 ) {
        $('.vermenu-btn + .menu-dropdown').collapse('hide');
    } else {
        $('.vermenu-btn + .menu-dropdown').collapse('show');
    }
});