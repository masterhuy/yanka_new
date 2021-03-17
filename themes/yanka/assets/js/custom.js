jQuery(function ($) {
    "use strict";


    //collapse
    $('.card.card-box').on('show.bs.collapse', function (e) {
        $('.card.card-box .collapse').not(e.target).collapse('hide');
    });

    $('.panel-default').on('show.bs.collapse', function (e) {
        $('.panel-default .collapse').not(e.target).collapse('hide');
    });


    //owl carousel featured product
    var lazyload_fp = false;
    if(gdzSetting.carousel_lazyload)
    var lazyload_fp = true;
    var rtl = false;
	if ($("body").hasClass("rtl")) rtl = true;
    $.each( $(".featured-product-carousel"), function( key, value ) {
        $(this).owlCarousel({
            loop: false,
            rtl:rtl,
            margin: 20,
            nav: false,
            dots: false,
            autoplay: false,
            lazyLoad: lazyload_fp,
            responsive:{
                0:{
                    items: 1
                },
                576:{
                    items: 2
                },
                768:{
                    items: 3
                },
                1200:{
                    items: 4
                },
            }
        });
    });

    //owl carousel same category
    var lazyload_sc = false;
    if(gdzSetting.carousel_lazyload)
    var lazyload_sc = true;
    var rtl = false;
	if ($("body").hasClass("rtl")) rtl = true;
    $.each( $(".customs-carousel-product"), function( key, value ) {
        $(this).owlCarousel({
            loop: false,
            rtl:rtl,
            margin: 20,
            nav: true,
            dots: false,
            autoplay: false,
            lazyLoad: lazyload_sc,
            responsive:{
                0:{
                    items: 2
                },
                576:{
                    items: 2
                },
                768:{
                    items: 3
                },
                1200:{
                    items: 4
                },
            }
        });
    });

    //owl carousel custom
    var lazyload_ins = false;
    if(gdzSetting.carousel_lazyload)
    var lazyload_ins = true;
    var rtl = false;
	if ($("body").hasClass("rtl")) rtl = true;
    $.each( $(".instagram_carousel"), function( key, value ) {
        $(this).owlCarousel({
            loop:false,
            rtl:rtl,
            margin:0,
            nav:false,
            dots:false,
            autoplay:false,
            lazyLoad:lazyload_ins,
            responsive:{
                0:{
                    items: 2
                },
                768:{
                    items: 3
                },
                992:{
                    items: 4
                },
                1200:{
                    items: 5
                },
                1500:{
                    items: 6
                }
            }
        });
    });

    var lazyload_hcr = false;
    if(gdzSetting.carousel_lazyload)
    var lazyload_hcr = true;
    var rtl = false;
    if ($("body").hasClass("rtl")) rtl = true;
    $(".header-content-carousel").addClass('owl-carousel');
    $.each( $(".header-content-carousel"), function( key, value ) {
        $(this).owlCarousel({
            loop:false,
            rtl:rtl,
            margin:0,
            nav:false,
            dots:false,
            autoplay:false,
            lazyLoad:lazyload_hcr,
            responsive:{
                0:{
                    items: 1
                },
            }
        });
    });


    // Scroll Top Button - Show
    var $scrollTop = $('#back-to-top');

    $(window).on('load scroll', function() {
        if ( $(window).scrollTop() >= 400 ) {
            $scrollTop.addClass('show');
        } else {
            $scrollTop.removeClass('show');
        }
    });

    // On click animate to top
    $scrollTop.on('click', function (e) {
        $('html, body').animate({
            'scrollTop': 0
        }, 800);
        e.preventDefault();
    });

    //header sticky
    var win = $(window),
        header = $('.header-sticky');
    if(header.length > 0) {
        //var offset = (header.offset().top);
        win.scroll(function() {
            if (150 < win.scrollTop()) {
                header.addClass("sticky");
            } else {
                header.removeClass("sticky");
            }
        });
    }

    //search
    $( ".btn-search-full" ).click(function() {
        $('#search-form-full').toggleClass('open');
    });
    $( ".search-box-close" ).click(function() {
        $('#search-form-full').removeClass('open');
    });

    //sidebar
    $( "#sidebar-btn" ).click(function() {
        if($('#header-sidebar').hasClass('right-sidebar'))
            $('body').toggleClass('sidebar-right-open');
        else
            $('body').toggleClass('sidebar-left-open');
    });
    $(document).on('click', function(){
        if($('body').hasClass('sidebar-right-open'))
            $('body').removeClass('sidebar-right-open');
        if($('body').hasClass('sidebar-left-open'))
            $('body').removeClass('sidebar-left-open');
    });
    $('#header-sidebar, #sidebar-btn').on('click', function(e){
        e.stopPropagation();
    });

    //product image zoom
    $('.product-detail .product-image-zoom').elevateZoom({
        zoomType: "inner",
        cursor: "crosshair",
        zoomWindowFadeIn: 500,
        zoomWindowFadeOut: 750
    });

    //remove short desc
    if($('body').hasClass('page-index')){
        $('.product-miniature .product-short-desc').remove();
    }

});

$(document).mouseup(function(e){
    var container = $('.search-box');
    if (!container.is(e.target) && container.has(e.target).length === 0)
    {
        container.closest('.search-overlay').removeClass('open');
    }
});

$(document).on('click', '.addToWishlist', function (e) {
    e.preventDefault();
});

$(document).on('click', '.switch-view', function (e) {
    e.preventDefault();
    $('.switch-view').removeClass('active');
    $(this).addClass('active');
    if($(this).hasClass('view-grid')) {
        $('#product_list').removeClass('products-list');
        $('#product_list').addClass('products-grid');
    } else {
        $('#product_list').removeClass('products-grid');
        $('#product_list').removeClass('grid-2');
        $('#product_list').removeClass('grid-3');
        $('#product_list').removeClass('grid-4');
        $('#product_list').removeClass('grid-5');
        $('#product_list').removeClass('grid-6');
        $('#product_list').addClass('products-list');
    }
});
$(document).on('click', '.view-grid-2', function (e) {
    $('#product_list').addClass('grid-2');
    $('#product_list').removeClass('grid-3');
    $('#product_list').removeClass('grid-4');
    $('#product_list').removeClass('grid-5');
    $('#product_list').removeClass('grid-6');
});
$(document).on('click', '.view-grid-3', function (e) {
    $('#product_list').addClass('grid-3');
    $('#product_list').removeClass('grid-2');
    $('#product_list').removeClass('grid-4');
    $('#product_list').removeClass('grid-5');
    $('#product_list').removeClass('grid-6');
});
$(document).on('click', '.view-grid-4', function (e) {
    $('#product_list').addClass('grid-4');
    $('#product_list').removeClass('grid-2');
    $('#product_list').removeClass('grid-3');
    $('#product_list').removeClass('grid-5');
    $('#product_list').removeClass('grid-6');
});

$(document).on('click', '.dropdown-menu', function (e) {
    e.stopPropagation();
});

function footerCollapse() {
    if ((jQuery(window).width() < 480) && (gdzSetting.footer_block_collapse == 1)) {
        $('#footer-main').addClass('collapsed');
        $('#footer-main').find('.block-content').addClass('collapse');
    } else {
        $('#footer-main').removeClass('collapsed');
        $('#footer-main').find('.block-content').removeClass('collapse');
    }
}

function stickyBar(){
    var blockAddtocart = $('#product .pb-right-column .product-actions form').clone();
    $('#sticky-bar .col-right .content').append(blockAddtocart);
    $('#sticky-bar .bootstrap-touchspin-up').click(function(e){
        // Stop acting like a button
        e.preventDefault();
        var currentVal = parseInt($('#sticky-bar #quantity_wanted').val());
        // If is not undefined
        if (!isNaN(currentVal)) {
            // Increment
            $('#sticky-bar #quantity_wanted').val(currentVal + 1);
        } else {
            // Otherwise put a 0 there
            $('#sticky-bar #quantity_wanted').val(0);
        }
    });
    // This button will decrement the value till 0
    $("#sticky-bar .bootstrap-touchspin-down").click(function(e) {
        // Stop acting like a button
        e.preventDefault();
        var currentVal = parseInt($('#sticky-bar #quantity_wanted').val());
        // If it isn't undefined or its greater than 0
        if (!isNaN(currentVal) && currentVal > 0) {
            // Decrement one
            $('#sticky-bar #quantity_wanted').val(currentVal - 1);
        } else {
            // Otherwise put a 0 there
            $('#sticky-bar #quantity_wanted').val(0);
        }
    });
}

function imageThumbCarousel(){
    var lazyload_pm = false;
    if(gdzSetting.carousel_lazyload)
    var lazyload_pm = true;
    if($(".productModal-carousel").length) {
		var productModalCarousel = $(".productModal-carousel");
		var rtl = false;
		if ($("body").hasClass("rtl")){
            rtl = true;
            productModalCarousel.addClass('owl-carousel');
        } 
		    productModalCarousel.owlCarousel({
            rtl: rtl,
            margin: 0,
            animateIn: 'fadeIn',
            animateOut: 'fadeOut',
            nav: true,
            dots: false,
            autoplay: false,
            loop: false,
            lazyLoad:lazyload_pm,
            responsive:{
                0: {
                    items:1
                }
            }
		});
    }
}

function calcOwnControlProductModal(){
	var bodyWidth = $("body").innerWidth();
	var thumbWidth = $('#product-modal .thumb').innerWidth();
    var space = -((bodyWidth - thumbWidth)/2 - 30);

	$("#product-modal .owl-nav .owl-prev").css("left", space);
	$("#product-modal .owl-nav .owl-next").css("right", space);
}

function stickyRightColumn(){
    if($('.product-layout-3columns .pb-left-column').length){
        var rightColumn = new StickySidebar('.product-layout-3columns .pb-right-column', {
            containerSelector: '.product-layout-3columns',
            innerWrapperSelector: '.product-layout-3columns .pb-right-column .row',
            resizeSensor: true,
            topSpacing: 100,
            bottomSpacing: 100
        });
    }
}

function stickyRightColumn2(){
    if($('.product-layout-sticky-info .pb-left-column').length){
        var rightColumn2 = new StickySidebar('.product-layout-sticky-info .pb-right-column .js-content-sticky', {
            containerSelector: '.product-layout-sticky-info',
            innerWrapperSelector: '.product-layout-sticky-info .pb-right-column .js-content-sticky',
            resizeSensor: true,
            topSpacing: 100,
        });
    }
}

function slickImage(){
    // slick carousel
    $('.quickview-modal .product-images').slick({
        dots: false,
        vertical: true,
        slidesToShow: 5,
        slidesToScroll: 1,
        verticalSwiping: true,
        infinite: false,
    });
}


function paginationToTop(){
    var $paginationBtn = $('.js-search-link');
    $paginationBtn.on('click', function (e) {
        $('html, body').animate({
            'scrollTop': 0
        }, 0);
        e.preventDefault();
    });
}


jQuery(document).ready(function(){
    $('#hor-menu .gdz-megamenu').jmsMegaMenu({
        event: 'hover',
        duration: 100
    });
    $('.vermenu .gdz-megamenu').jmsMegaMenu({
        event: 'hover',
        duration: 100
    });
    $('.pb-menu .gdz-megamenu').jmsMegaMenu({
        event: 'hover',
        duration: 100
    });
    $('#off-canvas-menu .gdz-megamenu').jmsMegaMenu({
        event: 'click',
        duration: 100
    });
    prestashop.on('updateProductList', function (event) {
        paginationToTop();
    });
   
    prestashop.on('clickQuickView', function (e) {
		setTimeout(function(){ slickImage(); }, 2000);
	});
    prestashop.on('updatedProduct', function (e) {
        slickImage();
        imageThumbCarousel();
        calcOwnControlProductModal();
    });
    setTimeout(() => {
        $('#product-modal .owl-stage .owl-item:first-child').addClass('active');
    }, 1000);

    paginationToTop();
    stickyRightColumn();
    stickyRightColumn2();
    imageThumbCarousel();
    calcOwnControlProductModal();
    footerCollapse();
    stickyBar();
});

jQuery(window).resize(function () {
    stickyRightColumn();
    stickyRightColumn2();
    footerCollapse();
    calcOwnControlProductModal();
});


$(document).on('click', '.js-qv-mask .js-thumb', function (e) {
    var imageSrc = $(this).attr('src');
    $('#product-modal .owl-stage .owl-item.active .thumb').attr("src", imageSrc);
});

$(document).on('click', '#footer-main.collapsed .block-title', function (e) {
    $(this).parent().toggleClass('collapsed');
    $(this).parent().find('.block-content').toggleClass('collapse');
});

//filter shop no sidebar
$(document).on('click', '.sidebar-toggler > .js-open-filter', function (e) {
    e.preventDefault();
    e.stopPropagation();
    $(this).addClass('active');
    $('#search_filters_wrapper').removeClass('hidden-sm-down');
    $('body').addClass('sidebar-filter-active');
});
$(document).on('click', '.sidebar-toggler > a.active', function (e) {
    e.preventDefault();
    $(this).removeClass('active');
    $('body').removeClass('sidebar-filter-active');
});
$(document).on('click', '.main-site #search_filters_wrapper', function (e) {
    e.stopPropagation();
});
$(document).on('click', '.main-site', function (e) {
    $('.sidebar-toggler > a').removeClass('active');
    $('body').removeClass('sidebar-filter-active');
});
$(document).on('click', '.ok', function (e) {
    $('.sidebar-toggler > a').removeClass('active');
    $('body').removeClass('sidebar-filter-active');
});


jQuery(function ($) {
    "use strict";
    $("#off-canvas-menu .mega .caret").click(function (e) {
        e.preventDefault();
        var _parent = $(this).parent();
        var _dropdown = _parent.next('.dropdown-menu');
        var _grandparent = _parent.parent();
        if(_grandparent.hasClass('open')) {
            _grandparent.removeClass('open');
            _dropdown.slideDown("normal");
           
        } else {
            _grandparent.addClass('open');
            _dropdown.slideUp("normal");
        }
    })
    $(".mega .caret").mouseover(function (e) {
        e.preventDefault();
        return false;
    })
    $("#off-canvas-menu li a").mouseover(function (e) {
        e.preventDefault();
        return false;
    })
});

// new theme yanka viet vao day

jQuery(document).ready(function(){
    $(".main-site").click(function(){
        $(".header-collapse").collapse('hide');
        $(".cart-collapse").collapse('hide');
    });

    

    $('.js-close-search').click(function() {
        $('#gdz_ajax_search .btn-search').dropdown('toggle');
    });

    
    $('.js-open-sidebar').click(function() {
        $('body').addClass('overflow-hidden');
        $('body').css('padding-right', '17px');
        $(".overflow-hidden .main-site").click(function(){
            $('body').removeClass('overflow-hidden');
            $('body').css('padding-right', '0');
        });
    });

    $('.gdz_ajax_search.fullscreen .btn-search').click(function() {
        $('body').addClass('overflow-hidden');
        $('body').css('padding-right', '17px');
        $(".overflow-hidden .js-close-search").click(function(){
            $('body').removeClass('overflow-hidden');
            $('body').css('padding-right', '0');
        });
    });

    //h1 banner carousel 
    var lazyload = false;
    if(gdzSetting.carousel_lazyload)
    var lazyload = true;
    var rtl = false;
    if ($("body").hasClass("rtl") || $("body").hasClass("lang-rtl")) rtl = true;
    
    if($(".h1-banner-carousel").length) {
        var h1BannerCarousel = $(".h1-banner-carousel");
        h1BannerCarousel.addClass('owl-carousel');
        h1BannerCarousel.owlCarousel({
            loop:false,
            rtl:rtl,
            margin:10,
            nav:true,
            dots:true,
            autoplay:false,
            lazyLoad:lazyload,
            responsive:{
                0:{
                    items: 1
                },
                576:{
                    items: 2
                },
                992:{
                    items: 3
                },
            }
        });
    }

    hoverLookbook();
    closeLookbook();

    ratingTestimonial();
    calcOwlnavButton();
    calcOwlBlogCarousel();
    calcOwlControlCarousel('producttab-products');
    calcOwlControlCarousel('filter-products');
    calcOwlControlCarousel('hotdeal-products');
    calcOwlControlCarousel('catproduct-carousel');
    calcOwlControlCarousel('categorytab-products');
});

$(window).load(function() {
    $('.carousel').carousel('pause'); 
});

function ratingTestimonial(){
    let rating = $('.pb-testimonial-comment .pb-rating');
    rating.each(function() {
        let dataRating = $(this).attr('data-rating');
        for(i = 1;i <= dataRating; i++){
            $(this).find(".star").html('<svg><use xlink:href="#icon-review"><symbol fill="none" viewBox="0 0 16 16" id="icon-review"><path d="M7.552.272c.07-.181.2-.272.39-.272.208 0 .338.09.39.272l1.637 5.193a.35.35 0 0 0 .13.217.527.527 0 0 0 .285.082h5.197c.207 0 .337.1.39.299.069.2.017.362-.157.49L11.632 9.76a.6.6 0 0 0-.182.245.582.582 0 0 0 0 .245l1.636 5.165c.052.2-.008.363-.181.49-.156.127-.304.127-.442 0l-4.209-3.236a.485.485 0 0 0-.26-.081.452.452 0 0 0-.234.082l-4.209 3.235c-.155.127-.311.127-.467 0-.156-.127-.208-.29-.156-.49l1.637-5.165a.49.49 0 0 0-.026-.272.323.323 0 0 0-.156-.218L.2 6.552c-.173-.127-.234-.29-.182-.49.07-.199.208-.298.416-.298H5.63a.369.369 0 0 0 .234-.082.436.436 0 0 0 .182-.217L7.552.272z" fill="currentColor"></path></symbol></use></svg>');
            $(this).find(`.star:nth-child(${i})`).css({"color": "#FFBA0A"});
        }
    });
}

function calcOwlBlogCarousel(){
    var imgHeight = $('.blog-carousel .post-thumb img').outerHeight();
    if(imgHeight > 0){
        var btnControlHeight = $('.blog-carousel .owl-nav button').outerHeight();
	    var space = (imgHeight/2) - (btnControlHeight/2);
	    $('.blog-carousel .owl-nav button').css({top: space, transform: 'none'});
    }	
}

function calcOwlControlCarousel(x){
    var carouselType = x;
    var imgHeight = $('.' + carouselType + '.owl-carousel .product-preview').outerHeight();
    var dataRow = $('.' + carouselType + '.owl-carousel').attr('data-row');
    if(imgHeight > 0 && dataRow == 1){
        var btnControlHeight = $('.' + carouselType + '.owl-carousel .owl-nav button').outerHeight();
	    var space = (imgHeight/2) - (btnControlHeight/2);
	    $('.' + carouselType + '.owl-carousel .owl-nav button').css({top: space, transform: 'none'});
    }	
}


function calcOwlnavButton(){
	var imgHeightB = $('.h1-banner-type-1 .jms-banner > a > img').outerHeight();
    var btnControlHeightB = $('.h1-banner-type-1 .owl-nav button').outerHeight();
    if(imgHeightB > 0){
        var spaceB = (imgHeightB/2) - (btnControlHeightB/2);
	    $(".h1-banner-type-1 .owl-nav button").css({top: spaceB, transform: 'none'});
    }
}

function hoverLookbook(){
    $(".h16-lookbook .pt-hotspot .pt-btn").hover(function(){
        $(".h16-lookbook .pt-hotspot").removeClass('active');
        $(this).parent().addClass("active");
        }, function(){
    });
}

function closeLookbook(){
    $(".h16-lookbook .pt-hotspot-content .pt-btn-close").click(function(){
        $(".h16-lookbook .pt-hotspot").removeClass('active');
    });
}