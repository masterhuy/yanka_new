jQuery(document).ready(function(){
    $(".vermenu .menu-dropdown").collapse('show');

    //header sticky
    var win = $(window),
    header = $('.header-sticky');
    if(header.length > 0) {
        //var offset = (header.offset().top);
        win.scroll(function() {
            if (150 < win.scrollTop()) {
                header.addClass("sticky");
                $(".vermenu .menu-dropdown").collapse('hide');
            } else {
                header.removeClass("sticky");
                $(".vermenu .menu-dropdown").collapse('show');
            }
        });
    }
})